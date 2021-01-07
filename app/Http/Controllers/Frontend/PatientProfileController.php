<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\Appointment;
use App\Models\Patient;
use Carbon\Carbon;
use App\User;     

class PatientProfileController extends Controller
{
    public function profile()
    {

        $patient = auth()->user()->patient;
  
        $prescription = Prescription::where('patient_id','=',$patient->id)->get();
        $appointment = Appointment::where('patient_id','=',$patient->id)->whereDate('date','>=', Carbon::today())->get();
//dd($appointment);
        return view('frontend.layouts.patient_profile',compact('patient','prescription','appointment'));
    }

    public function view($id)
    {


      $prescription=Prescription::findOrfail($id);
      // dd($prescription);
     
      return view('frontend.layouts.view_prescription',compact('prescription'));

    } 

     // delete data
     public function cancle($id)
     {
        $appointment=Appointment::find($id);
        if(!empty($appointment))
        {
            $appointment->delete();
            $message="appointment Cancle Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }
}
