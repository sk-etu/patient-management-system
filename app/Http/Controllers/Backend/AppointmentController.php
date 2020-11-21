<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment()
    {
        return view('backend.layouts.appointment_details.insert_appointment');

    }
public function createappointment(Request $request)
{
    
        $request->validate([
            'patient_id'=>'required',
            'patient_name'=>'required'
        ]);

        Appointment::create([
        'patient_id'=> $request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'emergency'=>$request->input('emergency')
        
    ]);

    return redirect()->back()->with('message','Appointment Created Successfully.');

}

public function list()
{
    $list=Appointment::all();
    return view('backend.layouts.appointment_details.appointment_list',compact('list'));
}
}
