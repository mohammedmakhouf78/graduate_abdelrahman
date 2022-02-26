<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InstallmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 10000),
            'pay_date' => $this->faker->date(),
            'student_finance_id' => rand(1, 9),
        ];
    }
}
