<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HTransfer extends Model
{
    protected $table="h_transfers";
    protected $fillable=["date","origin","destination"
    ,"stretcher","companion","patient_id","driver_id","vehicle_id"];
    use HasFactory;
}
