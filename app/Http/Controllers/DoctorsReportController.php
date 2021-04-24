<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsReportController extends Controller
{
    public function view ()
    {
        if(\Auth::user()->role == 'doctor') {
            return view('doctors_report');
        } else {
            return view('');
        }
    }
}
