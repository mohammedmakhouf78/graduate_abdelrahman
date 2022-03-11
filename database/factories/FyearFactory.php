<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FyearFactory extends Factory
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
            'squad_id1' => rand(1, 9),
            'squad_id2' => rand(1, 9),
            'squad_id3' => rand(1, 9),
        ];
    }
}
