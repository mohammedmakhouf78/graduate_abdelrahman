<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\CrudTrait;
use App\Models\Note;

class NoteController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Note $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    private function validation()
    {
        request()->validate([
            'note' => 'required|string',
            'note_date' => 'required|date',
            'type_id' => 'required|int|exists:types,id',
            'student_id' => 'required|int|exists:students,id',
        ]);
    }

    public function attReq()
    {
        return [
            'note' => request('note'),
            'note_date' => request('note_date'),
            'type_id' => request('type_id'),
            'student_id' => request('student_id'),
        ];
    }
}
