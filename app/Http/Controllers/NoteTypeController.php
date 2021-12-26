<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\NoteType;
use Illuminate\Http\Request;

class NoteTypeController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(NoteType $model)
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
