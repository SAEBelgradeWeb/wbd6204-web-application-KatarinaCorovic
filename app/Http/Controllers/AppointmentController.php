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

    public function AppointmentForm(Request $request)
    {

        $this->validate($request, [
           'spaciality' => 'required',
            'doctor' => 'required',
            'hospital' => 'required',
            'date_of_birth' => 'required',
            'comment' => 'required'
        ]);

        Contact::create($request->all());

        //
        return back()->with('success', 'Your form has been send successfuly.');

   }

}
