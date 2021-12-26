<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Department $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'department' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'department' => request('department'),
        ];
    }
}
