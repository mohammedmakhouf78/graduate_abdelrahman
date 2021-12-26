<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\ExamObserver;

class ExamObserverController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(ExamObserver $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'observer_id' => 'required|int|exists:observers,id',
            'exam_id' => 'required|int|exists:exams,id',
        ]);
    }

    public function attReq()
    {
        return [
            'observer_id' => request('observer_id'),
            'exam_id' => request('exam_id'),
        ];
    }
}
