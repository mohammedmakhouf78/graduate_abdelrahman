<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Nationality $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'nationality' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'nationality' => request('nationality'),
        ];
    }
}
