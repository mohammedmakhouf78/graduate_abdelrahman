<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArmyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'army' => $this->faker->name()
        ];
    }
}
