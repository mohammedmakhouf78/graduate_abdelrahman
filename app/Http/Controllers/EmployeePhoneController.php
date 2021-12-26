<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\EmployeePhone;
use Illuminate\Http\Request;

class EmployeePhoneController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(EmployeePhone $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'phone' => 'required|string',
            'employee_id' => 'required|int|exists:employees,id',
        ]);
    }

    public function attReq()
    {
        return [
            'phone' => request('phone'),
            'employee_id' => request('employee_id'),
        ];
    }
}
