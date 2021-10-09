<?php

namespace Database\Factories;

use App\Models\FriendInvite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FriendInviteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FriendInvite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'invited_user_id' => User::factory(1)->create()->first()
        ];
    }
}
