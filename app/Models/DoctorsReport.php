<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsReport extends Model
{
    use HasFactory;
    public $fillable = ['patient', 'report', ];
}
