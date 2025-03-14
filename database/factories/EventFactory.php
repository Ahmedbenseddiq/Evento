<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->realText(10),
            'description' => $this->faker->realText(100),
            'date' => $this->faker->date(),
            'place' => $this->faker->address(),
            'seats_number' => $this->faker->numberBetween(1, 100),
            'category_id' => 1,
            'user_id' => 1,
        ];
    }
}
