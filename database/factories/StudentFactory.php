<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
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
            'hold_number' => $this->faker->numberBetween(10000, 100000),
            'father_job' => $this->faker->jobTitle(),
            'mother_job' => $this->faker->jobTitle(),
            'religion' => $this->faker->word(),
            'mother_name' => $this->faker->firstNameFemale(),
            'gender' => $this->faker->boolean(),
            'birth_date' => $this->faker->date(),
            'study_year' => $this->faker->date(),
            'coming_date' => $this->faker->date(),
            'home_phone' => $this->faker->phoneNumber(),
            'identity_card' => $this->faker->randomNumber(5),
            'status_id' => rand(1, 9),
            'nationality_id' => rand(1, 9),
            'city_id' => rand(1, 9),
            'center_id' => rand(1, 9),
            'qualification_id' => rand(1, 9),
            'army_id' => rand(1, 9),
            'squad_id' => rand(1, 9),
            'department_id' => rand(1, 9),
            'coming_from' => rand(1, 9),
            'going_to' => rand(1, 9),
            'payment_state_id' => rand(1, 9),
        ];
    }
}
