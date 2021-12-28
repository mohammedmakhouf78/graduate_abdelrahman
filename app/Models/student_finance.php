<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_finance extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function finance()
    {
        return $this->belongsTo(Finance::class,'finance_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }
}
