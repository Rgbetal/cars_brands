<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'car_brand_id',
        'supplier_id',
        'year',
    ];

    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }

    public function supplier()
    {
        return $this->belongsTo(VehicleSupplier::class, 'supplier_id');
    }
    public function cars() {
    return $this->hasMany(Car::class, 'supplier_id');
    }
}

