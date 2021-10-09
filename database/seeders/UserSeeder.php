<?php

namespace Database\Seeders;

use App\Models\Friend;
use App\Models\FriendInvite;
use App\Models\Message;
use App\Models\Plan;
use App\Models\PlanAttendee;
use App\Models\PlanInvite;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a guest account
        $guest = User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@example.com',
        ]);

        // For the guest account, create some plans
        $guest->plans()->saveMany(Plan::factory()->count(5)->create([
            'user_id' => $guest->id
        ])->each(function ($plan) use (&$guest) {
            // For each plan add some attendees...
            $plan->attendees()->saveMany(PlanAttendee::factory()->count(5)->create([
                'plan_id' => $plan->id
            ]));
            // ...and send some plan invites
            $plan->invites()->saveMany(PlanInvite::factory()->count(5)->create([
                'user_id' => $guest->id,
                'plan_id' => $plan->id
            ]));
            // ...and finally display some messages for each plan
            $guest->messages()->saveMany(Message::factory()->count(2)->create([
                'user_id' => $guest->id,
                'plan_id' => $plan->id
            ]));
        }));

        // The guest should also have some friends
        $guest->friends()->saveMany(Friend::factory()->count(5)->create([
            'user_id' => $guest->id,
        ]));

        // And the guest should also have sent some friend invites
        $guest->friends_invites()->saveMany(FriendInvite::factory()->count(5)->create([
            'user_id' => $guest->id,
        ]));
    }
}
