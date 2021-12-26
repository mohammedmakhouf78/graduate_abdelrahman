<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\ProfessorAssistant;
use Illuminate\Http\Request;

class ProfessorAssistantController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(ProfessorAssistant $model)
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
