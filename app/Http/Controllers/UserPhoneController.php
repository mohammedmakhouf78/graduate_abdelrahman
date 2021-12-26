<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\UserPhone;
use Illuminate\Http\Request;

class UserPhoneController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(UserPhone $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'phone' => 'required|string',
            'user_id' => 'required|int|exists:users,id',
        ]);
    }

    public function attReq()
    {
        return [
            'phone' => request('phone'),
            'user_id' => request('user_id'),
        ];
    }
}
