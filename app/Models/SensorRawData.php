<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorRawData extends Model
{
    use HasFactory;

    public $fillable = [
        "soil_moisture",
        "humidity",
        "temperature",
    ];
    
}
