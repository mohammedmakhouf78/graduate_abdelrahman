<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Exam $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'exam_date' => 'required|date',
            'full_mark' => 'required|numeric',
            'subject_id' => 'required|int|exists:subjects,id',
            'department_id' => 'required|int|exists:departments,id',
            'squad_id' => 'required|int|exists:squads,id',
            'professor_id' => 'required|int|exists:professors,id',
            'professor_assistant_id' => 'required|int|exists:professor_assistants,id',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'exam_date' => request('exam_date'),
            'full_mark' => request('full_mark'),
            'subject_id' => request('subject_id'),
            'department_id' => request('department_id'),
            'squad_id' => request('squad_id'),
            'professor_id' => request('professor_id'),
            'professor_assistant_id' => request('professor_assistant_id'),
        ];
    }
}
