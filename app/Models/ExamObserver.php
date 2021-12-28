<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamObserver extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function observer()
    {
        return $this->belongsTo(Observer::class,'observer_id');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id');
    }
}
