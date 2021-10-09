<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\PlanAttendee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanAttendeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PlanAttendee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['G', 'N', 'M']; // G = Going, N = Not Going, or M = Maybe

        return [
            'user_id' => User::factory(1)->create()->first(),
            'plan_id' => 1,
            'status' => array_rand($status)
        ];
    }
}
