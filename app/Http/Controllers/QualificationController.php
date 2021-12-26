<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Qualification $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'qualification' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'qualification' => request('qualification'),
        ];
    }
}
