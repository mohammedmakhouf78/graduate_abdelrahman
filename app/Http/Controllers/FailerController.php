<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Failer;
use App\Models\Student;
use Illuminate\Http\Request;

class FailerController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Failer $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'squad_id' => 'nullable|int|exists:squads,id',
            'student_id' => 'nullable|int|exists:students,id',
            'subject_id1' => 'nullable|int|exists:subjects,id',
            'subject_id2' => 'nullable|int|exists:subjects,id',
            'subject_id3' => 'nullable|int|exists:subjects,id',
        ]);
    }

    public function attReq()
    {
        return [
            'squad_id' => request('squad_id'),
            'student_id' => request('student_id'),
            'subject_id1' => request('subject_id1'),
            'subject_id2' => request('subject_id2'),
            'subject_id3' => request('subject_id3'),
        ];
    }
}
