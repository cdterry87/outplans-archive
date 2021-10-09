<?php

namespace Database\Seeders;

use App\Models\FriendInvite;
use Illuminate\Database\Seeder;

class FriendInviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FriendInvite::factory(10)->create();
    }
}
