<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Organization $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'organization' => 'required|string',
        ]);
    }

    public function attReq()
    {
        return [
            'organization' => request('organization'),
        ];
    }
}
