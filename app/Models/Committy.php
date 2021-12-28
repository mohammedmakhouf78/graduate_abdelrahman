<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committy extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function floor()
    {
        return $this->belongsTo(Floor::class,'floor_id');
    }
}
