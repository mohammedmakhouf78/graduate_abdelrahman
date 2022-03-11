<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Sitnumber;

class SitnumberController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Sitnumber $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'student_id' => 'nullable|int|exists:students,id',
            'sit_number1' => 'nullable|int',
            'sit_number2' => 'nullable|int',
            'sit_number3' => 'nullable|int',
            'sit_number4' => 'nullable|int',
        ]);
    }

    public function attReq()
    {
        return [
            'student_id' => request('student_id'),
            'sit_number1' => request('sit_number'),
            'sit_number2' => request('sit_number'),
            'sit_number3' => request('sit_number'),
            'sit_number4' => request('sit_number'),
        ];
    }
}
