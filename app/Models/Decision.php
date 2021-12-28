<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function type()
    {
        return $this->belongsTo(DecisionType::class,'type_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}