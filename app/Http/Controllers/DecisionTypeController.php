<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\DecisionType;
use Illuminate\Http\Request;

class DecisionTypeController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(DecisionType $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'type' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'type' => request('type'),
        ];
    }
}
