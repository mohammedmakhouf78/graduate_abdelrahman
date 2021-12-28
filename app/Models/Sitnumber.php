<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitnumber extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function squad()
    {
        return $this->belongsTo(Squad::class,'squad_id');
    }
}
