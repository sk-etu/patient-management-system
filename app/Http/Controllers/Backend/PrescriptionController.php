<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
  public function prescription()
  {
    return view ('backend.layouts.prescription');
  } 

  public function createprescription(Request $request)
  {
    Prescription::create([
        'patient_id'=>$request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'weight'=>$request->input('weight'),
        'age'=>$request->input('age'),
        'bp'=>$request->input('bp')

    ]);
    return redirect()->back();

  }
  public function list()
  {
    $list=prescription::all();
    return view('backend.layouts.prescription_list',compact('list'));

  }
}
