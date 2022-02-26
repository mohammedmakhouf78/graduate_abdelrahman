<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFinanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paid' => $this->faker->randomFloat(2, 0, 10000),
            'rest_money' => $this->faker->randomFloat(2, 0, 10000),
            'money_from_prev_years' => $this->faker->randomFloat(2, 0, 10000),
            'finance_id' => rand(1, 9),
            'student_id' => rand(1, 9),
            'paid_date' => $this->faker->date(),
            'paid_id_number' => $this->faker->randomNumber(7),
        ];
    }
}
