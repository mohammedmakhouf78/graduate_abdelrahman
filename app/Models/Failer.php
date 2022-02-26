<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Failer extends Model
{
    use HasFactory;

    public function squad()
    {
        return $this->belongsTo(Squad::class, 'squad_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function subject1()
    {
        return $this->belongsTo(Subject::class, 'subject_id1');
    }

    public function subject2()
    {
        return $this->belongsTo(Subject::class, 'subject_id2');
    }

    public function subject3()
    {
        return $this->belongsTo(Subject::class, 'subject_id3');
    }
}
