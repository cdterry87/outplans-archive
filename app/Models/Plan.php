<?php

namespace App\Models;

use App\Models\PlanAttendee;
use App\Models\PlanInvite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attendees()
    {
        return $this->hasMany(PlanAttendee::class);
    }

    public function invites()
    {
        return $this->hasMany(PlanInvite::class);
    }
}
