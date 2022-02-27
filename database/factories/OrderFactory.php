<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'description' => $this->faker->title(),
            'status' => $this->faker->randomElement(['APPROVED', 'PENDING'])
        ];
    }
}
