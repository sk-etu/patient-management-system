<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
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
    
  
    $patients=Patient::select(['id'])->get();
    $users=User::select(['name','id'])->get();
    return view ('backend.layouts.prescription_details.prescription',compact('patients','users'));
  } 


    // prescription form create
  public function createPrescription(Request $request)
  {


    // validation
      $request->validate([
          'user_id'=>'required',
          'weight'=>'required',
          'bp'=>'required',
          'date'=>'required',
         
      ]);
// dd($request->all());

          // in form passing data
   $data = Prescription::create([
        'user_id'=>$request->input('user_id'),
        'patient_id'=>$request->input('patient_id'),
        'weight'=>$request->input('weight'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'additional_instructions'=>$request->input('additional_instructions'),
        'chief_complaint'=>$request->input('chief_complaint')

    ]);

    return redirect()->route('prescribe_medicine',['p_id'=>$data->id])->with('message','Prescription Created Successfully.');

  }


    // show list
  public function list()
  {
    $list=prescription::all();
          // table relation
    $patients=Patient::with('patientrelation');
    $users=User::with('userrelation');
    $prescribe_medicine=Prescribe_medicine::with('prescribe_medicinerelation');
    return view('backend.layouts.prescription_details.prescription_list',compact('list','users','prescribe_medicine'));

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
      $prescription=prescription::with(['prescribe_medicinerelation.medicinerelation','prescribe_medicinerelation.diagnosisrelation'])->find($id);
      
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
        'User_id'=>'required',
        'weight'=>'required',
        'bp'=>'required',
        'date'=>'required'
        ]);
       $prescription=Prescription::find($id);
       $prescription->update([
        'patient_id'=>$request->input('patient_id'),
        'user_id'=>$request->input('user_id'),
        'weight'=>$request->input('weight'),
        'bp'=>$request->input('bp'),
        'date'=>$request->input('date'),
        'chief_complaint'=>$request->input('chief_complaint'),      
        'additional_instructions'=>$request->input('additional_instructions')
       ]);

       return redirect()->back()->with('message','Product Updated Successfully.');
    }
}
