<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Plan;
use App\Models\Friend;
use App\Models\Message;
use App\Models\FriendRequest;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class)->orderBy('when');
    }

    public function plans_upcoming()
    {
        return $this->hasMany(Plan::class)
            ->where('plans.when', '>=', Carbon::now())
            ->orderBy('when');
    }

    public function plans_invites()
    {
        return DB::table('plans')
            ->select(
                'plans.*',
                'plans_invites.invited_user_id',
                'users.name as sent_to'
            )
            ->join('plans_invites', 'plans_invites.plan_id', '=', 'plans.id')
            ->join('users', 'users.id', '=', 'plans_invites.invited_user_id')
            ->where('plans_invites.user_id', '=', auth()->user()->id)
            ->orderBy('when');
    }

    public function plans_invited()
    {
        return DB::table('plans')
            ->select(
                'plans.*',
                'users.name as invited_by',
                'plans_invites.user_id',
                'plans_attendees.status'
            )
            ->join('plans_invites', 'plans_invites.plan_id', '=', 'plans.id')
            ->leftJoin('plans_attendees', 'plans_attendees.plan_id', '=', 'plans.id')
            ->join('users', 'users.id', '=', 'plans_invites.user_id')
            ->where('plans_invites.invited_user_id', '=', auth()->user()->id)
            ->where('plans.when', '>=', Carbon::now())
            ->orderBy('plans.when');
    }

    public function plans_attended()
    {
        return DB::table('plans')
            ->select(
                'plans.*',
                'plans_attendees.status'
            )
            ->join('plans_attendees', 'plans_attendees.plan_id', '=', 'plans.id')
            ->where('plans_attendees.status', '=', 'A')
            ->where('plans_attendees.user_id', '=', auth()->user()->id)
            ->where('plans.published', '!=', null)
            ->where('plans.when', '<', Carbon::now())
            ->orderBy('plans.when', 'desc');
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function friends_requests()
    {
        return $this->hasMany(Friend::class);
    }

    public function friends_with_details()
    {
        return DB::table('users')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'users.created_at'
            )
            ->join('friends', 'friends.friend_user_id', 'users.id')
            ->where('friends.user_id', '=', auth()->user()->id);
    }

    public function friends_requests_sent_with_details()
    {
        return DB::table('users')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'friends_requests.created_at'
            )
            ->join('friends_requests', 'friends_requests.requested_user_id', 'users.id')
            ->where('friends_requests.user_id', '=', auth()->user()->id);
    }

    public function friends_requests_received_with_details()
    {
        return DB::table('users')
            ->select(
                'users.id',
                'users.name',
                'users.email',
                'friends_requests.created_at'
            )
            ->join('friends_requests', 'friends_requests.user_id', 'users.id')
            ->where('friends_requests.requested_user_id', '=', auth()->user()->id);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
