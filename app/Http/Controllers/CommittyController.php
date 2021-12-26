<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Committy;
use Illuminate\Http\Request;

class CommittyController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Committy $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'name' => 'required|string',
            'floor_id' => 'required|int|exists:floors,id',
            'start_from' => 'required|integer',
            'end_to' => 'required|integer',
        ]);
    }

    public function attReq()
    {
        return [
            'name' => request('name'),
            'floor_id' => request('floor_id'),
            'start_from' => request('start_from'),
            'end_to' => request('end_to'),
        ];
    }
}
