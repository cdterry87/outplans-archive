<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Guest',
            'email' => 'guest@example.com',
        ])->each(function ($user) {
            $user->plans()->saveMany(Plan::factory()->count(10)->create());
        });
    }
}
