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
            'user_id' => User::factory(1)->create()->first(),
            'title' => $this->faker->text(),
            'location' => $this->faker->text(),
            'description' => $this->faker->text(),
            'when' => now(),
            'published' => now()
        ];
    }
}
