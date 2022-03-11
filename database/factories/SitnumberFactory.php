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
            'sit_number1' => $this->faker->randomNumber(7),
            'sit_number2' => $this->faker->randomNumber(7),
            'sit_number3' => $this->faker->randomNumber(7),
            'sit_number4' => $this->faker->randomNumber(7),
        ];
    }
}
