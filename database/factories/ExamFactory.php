<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'exam_date' => $this->faker->date(),
            'full_mark' => $this->faker->randomFloat(2, 50, 100),
            'subject_id' => rand(1, 9),
            'department_id' => rand(1, 9),
            'squad_id' => rand(1, 9),
            'professor_id' => rand(1, 9),
            'professor_assistant_id' => rand(1, 9),
        ];
    }
}
