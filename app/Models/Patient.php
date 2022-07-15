<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $fillable = ['patient_name', 'email_address', 'phone_number', 'date_of_birth', 'country_of_residence', 'gender'];
}
