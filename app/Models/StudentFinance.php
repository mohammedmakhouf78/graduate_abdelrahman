<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFinance extends Model
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

    public function installment()
    {
        return $this->belongsTo(Installment::class,'id','student_finance_id');
    }
}
