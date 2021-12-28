<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Squad;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Squad $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'squad' => 'required|string',
            'department_id' => 'nullable|int|exists:departments,id',
        ]);
    }

    public function attReq()
    {
        return [
            'squad' => request('squad'),
            'department_id' => request('department_id'),
        ];
    }
}
