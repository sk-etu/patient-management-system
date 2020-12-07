<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment()
    {
        return view('frontend.master');

    }
public function createappointment(Request $request)
{

        $request->validate([
            'id'=>'required',
            'name'=>'required'
        ]);

        Appointment::create([
        'patient_id'=> $request->input('id'),
        'patient_name'=>$request->input('name'),
        'date'=>$request->input('date'),
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
