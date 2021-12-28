<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professor_professorAssistant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }

    public function professorAssistant()
    {
        return $this->belongsTo(ProfessorAssistant::class,'professor_assistant_id');
    }
}
