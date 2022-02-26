<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExamObserverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'observer_id' => rand(1, 9),
            'exam_id' => rand(1, 9)
        ];
    }
}
