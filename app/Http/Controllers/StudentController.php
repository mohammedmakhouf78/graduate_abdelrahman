<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Student;

class StudentController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Student $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'third_name' => 'required|string',
            'last_name' => 'required|string',
            'mother_name' => 'required|string',
            'gender' => 'required|boolean',
            'birth_date' => 'required|date',
            'study_year' => 'required|date',
            'coming_date' => 'required|date',
            'home_phone' => 'required|string',
            'identity_card' => 'required|string',
            'image' => 'required|file',

            'status_id' => 'nullable|int|exists:statuses,id',
            'nationality_id' => 'nullable|int|exists:nationalities,id',
            'city_id' => 'nullable|int|exists:cities,id',
            'center_id' => 'nullable|int|exists:centers,id',
            'qualification_id' => 'nullable|int|exists:qualifications,id',
            'army_id' => 'nullable|int|exists:armies,id',
            'squad_id' => 'nullable|int|exists:squads,id',
            'department_id' => 'nullable|int|exists:departments,id',
            'coming_from' => 'nullable|int|exists:organizations,id',
            'going_to' => 'nullable|int|exists:organizations,id',
            'payment_state_id' => 'nullable|int|exists:payment_states,id',
        ]);
    }

    public function attReq()
    {
        return [
            'payment_state_id' => request('payment_state_id'),
            'going_to' => request('going_to'),
            'coming_from' => request('coming_from'),
            'department_id' => request('department_id'),
            'squad_id' => request('squad_id'),
            'army_id' => request('army_id'),
            'qualification_id' => request('qualification_id'),
            'center_id' => request('center_id'),
            'city_id' => request('city_id'),
            'nationality_id' => request('nationality_id'),
            'status_id' => request('status_id'),
            'identity_card' => request('identity_card'),
            'home_phone' => request('home_phone'),
            'coming_date' => request('coming_date'),
            'study_year' => request('study_year'),
            'first_name' => request('first_name'),
            'gender' => request('gender'),
            'birth_date' => request('birth_date'),
            'second_name' => request('second_name'),
            'third_name' => request('third_name'),
            'last_name' => request('last_name'),
            'mother_name' => request('mother_name'),

        ];
    }
}
