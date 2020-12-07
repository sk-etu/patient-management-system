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

    $diagnoses=Diagnosis_list::select(['name','id'])->get();
    // dd($diagnoses);
    
    $medicines=Medicine::select(['name','id'])->get();
    return view ('backend.layouts.prescription_details.prescription',compact('diagnoses','medicines'));
  } 


    // prescription form create
  public function createPrescription(Request $request)
  {


    // validation
      $request->validate([
          'patient_id'=>'required|numeric',
          'patient_name'=>'required',
          'gender'=>'required',
          'weight'=>'required',
          'age'=>'required',
          'bp'=>'required',
          'date'=>'required',
          'medicine_id'=>'required',
          'diagnosis_id'=>'required'
      ]);


          // in form passing data
   $data = Prescription::create([
        'patient_id'=>$request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'gender'=>$request->input('gender'),
        'weight'=>$request->input('weight'),
        'age'=>$request->input('age'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'medicine_id'=>$request->input('medicine_id'),
        'diagnosis_id'=>$request->input('diagnosis_id'),
        'additional_instructions'=>$request->input('additional_instructions')

    ]);

    return redirect()->back()->with('message','Prescription Created Successfully.');

  }


    // show list
  public function list()
  {
    $list=prescription::all();
          // table relation
    $diagnoses=Diagnosis_list::with('diagnosisrelation');
    $medicines=Medicine::with('medicinerelation');
    return view('backend.layouts.prescription_details.prescription_list',compact('list','diagnoses','medicines'));

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


    //single data view
    public function view($id)
    {
      $prescription=prescription::find($id);
      return view('backend.layouts.prescription_details.view_prescription',compact('prescription'));

    } 


    //Edit data
    public function edit($id)
    {
      $prescription=Prescription::find($id);
      $diagnoses=Diagnosis_list::all();
      $medicines=Medicine::all();


      return view ('backend.layouts.prescription_details.edit_prescription',compact('prescription','diagnoses','medicines'));
    }

    // insert update form
    public function update(Request $request,$id)
    {
      $request->validate([
        'patient_id'=>'required|numeric',
        'patient_name'=>'required',
        'gender'=>'required',
        'weight'=>'required',
        'age'=>'required',
        'bp'=>'required',
        'date'=>'required',
        'medicine_id'=>'required',
        'diagnosis_id'=>'required'
        ]);
       $prescription=Prescription::find($id);
       $prescription->update([
        'patient_id'=>$request->input('patient_id'),
        'patient_name'=>$request->input('patient_name'),
        'gender'=>$request->input('gender'),
        'weight'=>$request->input('weight'),
        'age'=>$request->input('age'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'medicine_id'=>$request->input('medicine_id'),
        'diagnosis_id'=>$request->input('diagnosis_id'),
        'additional_instructions'=>$request->input('additional_instructions')
       ]);

       return redirect()->back()->with('message','Product Updated Successfully.');
    }
}
