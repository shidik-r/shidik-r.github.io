<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors';

    protected $primarykey = 'id';
    protected $fillable = ['soil_moisture', 'humidity', 'temperature', 'pump'];
}
