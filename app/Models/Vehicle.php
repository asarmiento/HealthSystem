<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table="vehicles";
    protected $fillable=["type","plate","fuel_type"
    ,"hospital_id"];
    use HasFactory;
}
