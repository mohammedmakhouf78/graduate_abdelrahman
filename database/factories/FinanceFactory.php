<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FinanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => rand(1, 9),
            'squad_id' => rand(1, 9),
            'total' => $this->faker->randomFloat(2, 0, 10000),
            'fixed_money' => $this->faker->randomFloat(2, 0, 10000),
            'changable_money' => $this->faker->randomFloat(2, 0, 10000),
            'discount' => $this->faker->randomFloat(2, 0, 10000),
            'deserved_money' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
