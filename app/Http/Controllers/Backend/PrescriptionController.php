<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\Diagnosis_list;
use App\Models\Medicine;
use App\Models\patient;
use App\Models\Prescribe_medicine;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
  // view prescription
  public function prescription()
  {

    $diagnoses=Diagnosis_list::select(['name','id'])->get();
    // dd($diagnoses);
    
    $patients=patient::select(['name','id'])->get();
    return view ('backend.layouts.prescription_details.prescription',compact('diagnoses','patients'));
  } 


    // prescription form create
  public function createPrescription(Request $request)
  {


    // validation
      $request->validate([
          'patient_id'=>'required',
          'weight'=>'required',
          'bp'=>'required',
          'date'=>'required',
          'diagnosis_id'=>'required'
      ]);


          // in form passing data
   $data = Prescription::create([
        'patient_id'=>$request->input('patient_id'),
        'weight'=>$request->input('weight'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'diagnosis_id'=>$request->input('diagnosis_id'),
        'additional_instructions'=>$request->input('additional_instructions')

    ]);

    return redirect()->route('prescribe_medicine',['p_id'=>$data->id])->with('message','Prescription Created Successfully.');

  }


    // show list
  public function list()
  {
    $list=prescription::all();
          // table relation
    $diagnoses=Diagnosis_list::with('diagnosisrelation');
    $patients=Patient::with('patientrelation');
    $prescribe_medicine=Prescribe_medicine::with('prescribe_medicinerelation');
    return view('backend.layouts.prescription_details.prescription_list',compact('list','prescribe_medicine','diagnoses'));

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
      $prescription=prescription::with(['prescribe_medicinerelation.medicinerelation'])->find($id);
      // dd($prescription);
      return view('backend.layouts.prescription_details.view_prescription',compact('prescription'));

    } 


    //Edit data
    public function edit($id)
    {
      $prescription=Prescription::find($id);
      $diagnoses=Diagnosis_list::all();
 


      return view ('backend.layouts.prescription_details.edit_prescription',compact('prescription','diagnoses'));
    }

    // insert update form
    public function update(Request $request,$id)
    {
      $request->validate([
        'patient_id'=>'required',
        'weight'=>'required',
        'bp'=>'required',
        'date'=>'required',
        'diagnosis_id'=>'required'
        ]);
       $prescription=Prescription::find($id);
       $prescription->update([
        'patient_id'=>$request->input('patient_id'),
        'weight'=>$request->input('weight'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'diagnosis_id'=>$request->input('diagnosis_id'),
        'additional_instructions'=>$request->input('additional_instructions')
       ]);

       return redirect()->back()->with('message','Product Updated Successfully.');
    }
}
