<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamMarkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->randomFloat(2, 0, 100),
            'marking_date' => $this->faker->date(),
            'exam_id' => rand(1, 9),
            'student_id' => rand(1, 9),
        ];
    }
}
