<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\ExamMarking;
use Illuminate\Http\Request;

class ExamMarkingController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(ExamMarking $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'degree' => 'required|numeric',
            'marking_date' => 'required|date',
            'exam_id' => 'required|int|exists:exams,id',
        ]);
    }

    public function attReq()
    {
        return [
            'degree' => request('degree'),
            'marking_date' => request('marking_date'),
            'exam_id' => request('exam_id'),
        ];
    }
}
