<?php

namespace Database\Factories;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => ucwords($this->faker->words(rand(3, 5), true)),
            'location' => ucwords($this->faker->words(rand(2, 4), true)),
            'description' => $this->faker->text(),
            'when' => $this->faker->dateTimeBetween('+1 week', '+2 years'),
            'published' => now()
        ];
    }
}
