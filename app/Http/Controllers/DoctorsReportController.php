<?php

namespace App\Http\Controllers;

use App\Models\DoctorsReport;
use Illuminate\Http\Request;

class DoctorsReportController extends Controller
{
//    public function view ()
//    {
//        if(\Auth::user()->role == 'doctor') {
//            return view('/doctors_report');
//        } else {
//            return view('');
//        }
//    }

    public function view()
    {
        return view('/doctors_report');

    }

    public function doctorsReportForm(Request $request)
    {
//           dd(Patient::create($request->all()));
        $this->validate($request, [
            'patient' => 'required',
            'report' => 'required',

        ]);

        DoctorsReport::create($request->all());

        //
        return back()->with('success', 'Your form has been send successfully.');

    }

    public function doctorsReportView ()
    {
        return view('/doctors_report');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
