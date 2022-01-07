<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Decision;
use Illuminate\Http\Request;

class DecisionController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Decision $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'decision' => 'required|string',
            'decision_date' => 'required|date',
            'type_id' => 'required|int|exists:decision_types,id',
            'student_id' => 'required|int|exists:students,id',
        ]);
    }

    public function attReq()
    {
        return [
            'decision' => request('decision'),
            'decision_date' => request('decision_date'),
            'type_id' => request('type_id'),
            'student_id' => request('student_id'),
        ];
    }
}
