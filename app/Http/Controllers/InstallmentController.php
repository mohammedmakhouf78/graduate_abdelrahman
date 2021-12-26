<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Installment;

class InstallmentController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Installment $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'value' => 'required|numeric',
            'pay_date' => 'required|date',
            'student_finance_id' => 'required|int|exists:student_finances,id',
        ]);
    }

    public function attReq()
    {
        return [
            'value' => request('value'),
            'pay_date' => request('pay_date'),
            'student_finance_id' => request('student_finance_id'),
        ];
    }
}
