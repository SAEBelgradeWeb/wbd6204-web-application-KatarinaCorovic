<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function patientForm(Request $request)
    {
//           dd(Patient::create($request->all()));
            $this->validate($request, [
           'patient_name' => 'required',
            'email_address' => 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'country_of_residence' => 'required',
             'gender'=>'required',

     ]);

            Patient::create($request->all());

        //
        return back()->with('success', 'Your form has been send successfully.');

    }

    public function patientView ()
    {
        return view('/patient');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }


}
