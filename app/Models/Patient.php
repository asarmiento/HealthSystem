<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table="patients";
    protected $fillable=["name","card","last_name","phone","cell"
    ,"email","hospital_id"];
    use HasFactory;
}