<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class professor_professorAssistantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'professor_id' => rand(1, 9),
            'subject_id' => rand(1, 9),
            'professor_assistant_id' => rand(1, 9),
        ];
    }
}
