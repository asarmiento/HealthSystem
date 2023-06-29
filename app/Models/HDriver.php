<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HDriver extends Model
{
    protected $table = "h_drivers";
    protected $fillable =["name", "last_name", "card", "phone", "email", "hospital_id"];
    use HasFactory;
}
