<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Finance;

class FinanceController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Finance $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'total' => 'required|numeric',
            'fixed_money' => 'required|numeric',
            'changable_money' => 'required|numeric',
            'discount' => 'required|numeric',
            'deserved_money' => 'required|numeric',
            'squad_id' => 'required|int|exists:squads,id',
        ]);
    }

    public function attReq()
    {
        return [
            'total' => request('total'),
            'fixed_money' => request('fixed_money'),
            'changable_money' => request('changable_money'),
            'discount' => request('discount'),
            'deserved_money' => request('deserved_money'),
            'squad_id' => request('squad_id'),
        ];
    }
}
