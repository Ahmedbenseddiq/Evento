<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=reservation>
 */
class reservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "seats_reserved" => fake()->between(1, 10)->randomDigitNotNull(),
            "status" => false,
            "event_id" => 1,
            "user_id" => 1,
        ];
    }
}
