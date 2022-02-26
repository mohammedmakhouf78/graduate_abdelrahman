<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FailerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'squad_id' => rand(1, 9),
            'student_id' => rand(1, 9),
            'subject_id1' => rand(1, 9),
            'subject_id2' => rand(1, 9),
            'subject_id3' => rand(1, 9),

        ];
    }
}
