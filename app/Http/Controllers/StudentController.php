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

    public function store(Request $request)
    {
        $this->validation();
        $fileName = time() . "_student.jpeg";

        $this->uplodadImage($request->image, $fileName, 'students');

        $this->model::create(array_merge(
            $this->attReq(),
            ['image' => $fileName]
        ));
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }


    public function update(Request $request, $id)
    {
        $this->validation();
        $obj = $this->model::find($id);

        $fileName = time() . "_student.jpeg";

        $this->uplodadImage($request->image, $fileName, 'students', $obj->image);

        $obj->update(array_merge(
            $this->attReq(),
            ['image' => $fileName]
        ));
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }

    public function destroy($id)
    {
        $obj = $this->model::find($id);
        unlink(public_path('images/students/' . $obj->image));
        $obj->delete();
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'mother_name' => 'required|string',
            'gender' => 'boolean',
            'hold_number' => 'string',
            'father_job' => 'string',
            'mother_job' => 'string',
            'religion' => 'string',
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
            'hold_number' => request('hold_number'),
            'father_job' => request('father_job'),
            'mother_job' => request('mother_job'),
            'religion' => request('religion'),
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
            'name' => request('name'),
            'gender' => request('gender', 0),
            'birth_date' => request('birth_date'),
            'mother_name' => request('mother_name'),

        ];
    }
}
