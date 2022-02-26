<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommittyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'floor_id' => rand(1, 9),
            'start_from' => rand(100, 1000),
            'end_to' => rand(1000, 10000),
        ];
    }
}
