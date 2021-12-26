<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\professor_professorAssistant;

class ProfessorProfessorAssistantController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(professor_professorAssistant $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'subject_id' => 'required|int|exists:subjects,id',
            'professor_id' => 'required|int|exists:professors,id',
            'professor_assistant_id' => 'required|int|exists:professor_assistants,id',
        ]);
    }

    public function attReq()
    {
        return [
            'subject_id' => request('subject_id'),
            'professor_id' => request('professor_id'),
            'professor_assistant_id' => request('professor_assistant_id'),
        ];
    }
}
