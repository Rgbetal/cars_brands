<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleSupplier extends Model
{
    protected $fillable = ['full_name', 'phone_number', 'photo'];


public function cars()
    {
    return $this->hasMany(Car::class);
    }

}


