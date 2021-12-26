<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\City;

class CityController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(City $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'city' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'city' => request('city'),
        ];
    }
}
