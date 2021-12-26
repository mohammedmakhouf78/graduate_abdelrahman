<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Floor $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'floor' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'floor' => request('floor'),
        ];
    }
}
