<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function squad()
    {
        return $this->belongsTo(Squad::class,'squad_id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id');
    }
}
