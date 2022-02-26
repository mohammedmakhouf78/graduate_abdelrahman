<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FloorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'floor' => $this->faker->word()
        ];
    }
}
