<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\Diagnosis_list;
use App\Models\Medicine;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
  // view prescription
  public function prescription()
  {
      // table relation
    $diagnoses=Diagnosis_list::with('diagnosisrelation');
    $medicines=Medicine::with('medicinerelation');
    return view ('backend.layouts.prescription_details.prescription',compact('diagnoses'),compact('medicines'));
  } 


    // prescription form create
  public function createPrescription(Request $request)
  {

    // validation
      $request->validate([
          'patient_name'=>'required',
          'bp'=>'required',
          'patient_id'=>'required|numeric'
      ]);

          // in form passing data
    Prescription::create([
        'patient_id'=>$request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'weight'=>$request->input('weight'),
        'age'=>$request->input('age'),
        'bp'=>$request->input('bp'),
        'medicine_id'=>$request->input('medicine_id'),
        'diagnosis_id'=>$request->input('diagnosis_id')

    ]);
    return redirect()->back()->with('message','Prescription Created Successfully.');

  }


    // show list
  public function list()
  {
    $list=prescription::all();
    return view('backend.layouts.prescription_details.prescription_list',compact('list'));

  }


      // delete data
  public function delete($id)
  {
     $prescription=Prescription::find($id);
     if(!empty($prescription))
     {
         $prescription->delete();
         $message="prescription deleted Successfully";
     }else{
         $message="No data found.";
     }
      return redirect()->back()->with('message',$message);
  }


      //Edit data
      public function edit()
      {

        return view ('backend.layouts.prescription_details.edit_prescription');
      }
}
