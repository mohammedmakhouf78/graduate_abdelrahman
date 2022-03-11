<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Fyear;
use Illuminate\Http\Request;

class FyearController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Fyear $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'student_id' => 'nullable|int|exists:students,id',
            'squad_id1' => 'nullable|int|exists:squads,id',
            'squad_id2' => 'nullable|int|exists:squads,id',
            'squad_id3' => 'nullable|int|exists:squads,id',
        ]);
    }

    public function attReq()
    {
        return [
            'student_id' => request('student_id'),
            'squad_id1' => request('squad_id1'),
            'squad_id2' => request('squad_id2'),
            'squad_id3' => request('squad_id3'),
        ];
    }
}
