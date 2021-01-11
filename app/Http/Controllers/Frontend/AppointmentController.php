<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Prescription;
use Carbon\Carbon;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment()
    {

        return view('frontend.master',compact('appointment'));

    }



public function createappointment(Request $request)
{

    //already created
    $allreadyCreated = appointment::where('patient_id','=',auth()->user()->patient->id)->whereDate('date', '=',$request->input('date'))->count();

        if($allreadyCreated !== 0){
           return redirect()->back()->with('message','In same date you already have appointment.');
        }


        
        Appointment::create([
        'patient_id'=> auth()->user()->patient->id,
        'patient_name'=> auth()->user()->name,
        'date'=>$request->input('date'),
        'emergency'=>$request->input('emergency')
        
    ]);

    return redirect()->route('profile')->with('message','Appointment Created Successfully.');

}


    public function list()

    {
         
        
        $list = appointment::whereDate('date', Carbon::today())->get();
    
        return view('backend.layouts.appointment_details.appointment_list',compact('list'));
    }
    //view data
    public function view($id)
    {
    $appointment=appointment::find($id);
    return view('backend.layouts.appointment_details.view_appointment',compact('appointment'));

    } 

     // delete data
     public function delete($id)
     {
        $appointment=Appointment::find($id);
        if(!empty($appointment))
        {
            $appointment->delete();
            $message="appointment deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }

         // prescription
    public function prescriptionview($id)
    {
       
    return view('backend.layouts.prescription_details.prescription',compact('id'));

    } 
}
