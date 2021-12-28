<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Subject $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'squad_id' => 'required|int|exists:squads,id',
            'professor_id' => 'required|int|exists:professors,id',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'squad_id' => request('squad_id'),
            'professor_id' => request('professor_id'),
        ];
    }
}
