<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\StudentPhone;

class StudentPhoneController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(StudentPhone $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'phone' => 'required|string',
            'student_id' => 'required|int|exists:students,id',
        ]);
    }

    public function attReq()
    {
        return [
            'phone' => request('phone'),
            'student_id' => request('student_id'),
        ];
    }
}
