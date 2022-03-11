<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fyear extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function squad1()
    {
        return $this->belongsTo(Squad::class, 'squad_id1');
    }

    public function squad2()
    {
        return $this->belongsTo(Squad::class, 'squad_id2');
    }

    public function squad3()
    {
        return $this->belongsTo(Squad::class, 'squad_id3');
    }
}
