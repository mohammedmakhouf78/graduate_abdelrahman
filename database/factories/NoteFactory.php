<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'note' => $this->faker->text(),
            'note_date' => $this->faker->date(),
            'type_id' => rand(1, 9),
            'student_id' => rand(1, 9),
        ];
    }
}
