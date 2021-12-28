<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class,'nationality_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }

    public function center()
    {
        return $this->belongsTo(Center::class,'center_id');
    }

    public function qualification()
    {
        return $this->belongsTo(Qualification::class,'qualification_id');
    }

    public function army()
    {
        return $this->belongsTo(Army::class,'army_id');
    }

    public function squad()
    {
        return $this->belongsTo(Squad::class,'squad_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function coming_from()
    {
        return $this->belongsTo(Organization::class,'coming_from');
    }

    public function going_to()
    {
        return $this->belongsTo(Organization::class,'going_to');
    }

    public function paymentState()
    {
        return $this->belongsTo(PaymentState::class,'payment_state_id');
    }
}
