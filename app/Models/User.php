<?php

namespace App\Models;

use App\Models\Friend;
use App\Models\FriendInvite;
use App\Models\Message;
use App\Models\Plan;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        return $this->hasMany(Plan::class);
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }

    public function friends_invites()
    {
        return $this->hasMany(FriendInvite::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
