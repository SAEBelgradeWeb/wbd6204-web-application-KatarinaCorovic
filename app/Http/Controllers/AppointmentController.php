<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of th me resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('appointment');
    }

   function getData()
   {
       return "Form data will be here";

   }

    public function appointmentForm(Request $request)
    {
        dd(Appointment::create($request->all()));
//            $this->validate($request, [
//           'speciality' => 'required',
//            'doctor' => 'required',
//            'hospital' => 'required',
//            'date_of_birth' => 'required',
//            'comment' => 'required'
//               'notes'=>required

//        ]);

        Appointment::create($request->all());

        //
        return back()->with('success', 'Your form has been send successfuly.');

   }

}
