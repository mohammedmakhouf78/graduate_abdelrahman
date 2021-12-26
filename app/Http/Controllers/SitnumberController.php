<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Sitnumber;

class SitnumberController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Sitnumber $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'squad_id' => 'nullable|int|exists:squads,id',
            'student_id' => 'nullable|int|exists:students,id',
            'sit_number' => 'required|int',
        ]);
    }

    public function attReq()
    {
        return [
            'squad_id' => request('squad_id'),
            'student_id' => request('student_id'),
            'sit_number' => request('sit_number'),
        ];
    }
}
