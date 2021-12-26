<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Observer;
use Illuminate\Http\Request;

class ObserverController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Observer $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'employee_id' => 'required|int|exists:employees,id',
        ]);
    }

    public function attReq()
    {
        return [
            'employee_id' => request('employee_id'),
        ];
    }
}
