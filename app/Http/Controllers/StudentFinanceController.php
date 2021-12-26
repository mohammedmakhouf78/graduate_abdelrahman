<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\student_finance;

class StudentFinanceController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(student_finance $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'paid' => 'required|numeric',
            'rest_money' => 'required|numeric',
            'money_from_prev_years' => 'required|numeric',
            'finance_id' => 'nullable|int|exists:finances,id',
            'student_id' => 'nullable|int|exists:students,id',
            'paid_date' => 'required|date',
            'paid_id_number' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'paid' => request('paid'),
            'rest_money' => request('rest_money'),
            'money_from_prev_years' => request('money_from_prev_years'),
            'finance_id' => request('finance_id'),
            'student_id' => request('student_id'),
            'paid_date' => request('paid_date'),
            'paid_id_number' => request('paid_id_number'),
        ];
    }
}
