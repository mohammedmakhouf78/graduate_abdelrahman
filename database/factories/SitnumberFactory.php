<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SitnumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => rand(1, 9),
            'squad_id' => rand(1, 9),
            'sit_number' => $this->faker->randomNumber(7),
        ];
    }
}
