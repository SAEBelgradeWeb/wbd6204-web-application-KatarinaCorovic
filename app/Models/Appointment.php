<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $fillable = ['speciality', 'doctor', 'hospital', 'date_of_birth', 'comment'];
}
