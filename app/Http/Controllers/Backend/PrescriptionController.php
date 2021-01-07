<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use App\Models\Diagnosis_list;
use App\Models\Medicine;
use App\Models\patient;
use App\User;
use App\Models\Prescribe_medicine;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
  // view prescription
  public function prescription()
  {

    // dd($diagnoses);
    
  
    // $patients=Patient::select(['id'])->get();
    // $users=User::select(['name','id'])->get();
    return view ('backend.layouts.prescription_details.prescription');
  } 


    // prescription form create
  public function createPrescription(Request $request)
  {
   //dd($request->all());

    // validation
      $request->validate([
        
          'weight'=>'required',
          'bp'=>'required',
          'pulse'=>'required'
         
         
      ]);

      // in form passing data
      $data = Prescription::create([
        'user_id'=> auth()->user()->id,
        'patient_id'=>$request->input('patient_id'),
        'weight'=>$request->input('weight'),
        'pulse'=>$request->input('pulse'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'additional_instructions'=>$request->input('additional_instructions'),
        'chief_complaint'=>$request->input('chief_complaint'),
        'history'=>$request->input('history')

    ]);

    return redirect()->route('prescribe_medicine',['p_id'=>$data->id])->with('message','Prescription Created Successfully.');

  }


    // show list
  public function list()
  {
    $list=prescription::with(['patientrelation','prescribe_medicinerelation'])->get();

  //dd($list);
          // table relation
 
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


    //single data view
    public function view($id)
    {
      $prescription=prescription::with(['prescribe_medicinerelation.medicinerelation','patientrelation.user','prescribe_medicinerelation.diagnosisrelation'])->find($id);
      
      //dd($prescription);
      return view('backend.layouts.prescription_details.view_prescription',compact('prescription'));

    } 


    //Edit data
    public function edit($id)
    {
      $prescription=Prescription::find($id);
 


      return view ('backend.layouts.prescription_details.edit_prescription',compact('prescription','diagnoses'));
    }

    // insert update form
    public function update(Request $request,$id)
    {
      $request->validate([
        
        'weight'=>'required',
        'bp'=>'required',
        'pulse'=>'required',
        'date'=>'required'
        ]);
       $prescription=Prescription::find($id);
       $prescription->update([
        'patient_id'=>$request->input('patient_id'),
        'user_id'=>auth()->user()->id,
        'weight'=>$request->input('weight'),
        'pulse'=>$request->input('pulse'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'chief_complaint'=>$request->input('chief_complaint'),      
        'additional_instructions'=>$request->input('additional_instructions'),
        'history'=>$request->input('history')
       ]);

       return redirect()->back()->with('message','Product Updated Successfully.');
    }
}
