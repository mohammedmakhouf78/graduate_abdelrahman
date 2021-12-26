<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\PaymentState;
use Illuminate\Http\Request;

class PaymentStateController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(PaymentState $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'state' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'state' => request('state'),
        ];
    }
}
