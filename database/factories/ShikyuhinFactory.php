<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shikyuhin>
 */
class ShikyuhinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(111111111111,999999999999),
            'location' => $this->faker->streetAddress,
            'plant' => $this->faker->name(8),
            'furidashi' => $this->faker->name(8),
        ];
    }
}
