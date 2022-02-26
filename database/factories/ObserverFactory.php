<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObserverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => rand(1, 9)
        ];
    }
}
