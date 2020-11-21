<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\Diagnosis_list;
use App\Models\Medicine;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
  public function prescription()
  {

    $diagnoses=Diagnosis_list::all();
    $medicines=Medicine::all();
    return view ('backend.layouts.prescription_details.prescription',compact('diagnoses'),compact('medicines'));
  } 



  public function createPrescription(Request $request)
  {
      $request->validate([
          'patient_name'=>'required',
          'bp'=>'required',
          'patient_id'=>'required|numeric'
      ]);


    Prescription::create([
        'patient_id'=>$request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'weight'=>$request->input('weight'),
        'age'=>$request->input('age'),
        'bp'=>$request->input('bp')

    ]);
    return redirect()->back()->with('message','Prescription Created Successfully.');

  }



  public function list()
  {
    $list=prescription::all();
    return view('backend.layouts.prescription_details.prescription_list',compact('list'));

  }
}
