<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescribe_medicine;
use App\Models\Medicine;
use App\Models\Diagnosis_list;
use Illuminate\Http\Request;

class Prescribe_medicineController extends Controller
{
    public function prescribe_medicine()
    {

        $medicines=Medicine::select(['name','id'])->get();
        $diagnoses=Diagnosis_list::select(['name','id'])->get();
        return view('backend.layouts.prescribe_medicine.insert_prescribe_medicine', compact('medicines','diagnoses'));

    }
public function createprescribe_medicine(Request $request)
{
    

    prescribe_medicine::create([
        'prescription_id'=> $request->input('p_id'),
        'medicine_id'=> $request->input('medicine_id'),
        'days'=>$request->input('days'),
        'dosages'=>$request->input('dosages'),
        'diagnosis_id'=>$request->input('diagnosis_id')
        
    ]);

    

    return redirect()->back()->with('message','Medicine Created Successfully.');

}

    // show list
    public function list()
    {
      $list=Prescribe_medicine::all();
            // table relation
      $medicines=Medicine::with('medicinerelation');
      $diagnoses=Diagnosis_list::with('diagnosisrelation');
      return view('backend.layouts.prescribe_medicine.Prescribe_medicine_list',compact('list','diagnoses','medicines'));
  
    }

     //single data edit
     public function edit($id)
     {
         $prescribe_medicine=Prescribe_medicine::find($id);
 
         return view('backend.layouts.prescribe_medicine_details.edit_prescribe_medicine',compact('Prescribe_medicine'));
 
     }
 
     public function update(Request $request,$id)
     {
 
 
         $prescribe_medicine=Prescribe_medicine::find($id);
         Prescribe_medicine::create([
            'prescription_id'=> $request->input('p_id'),
            'medicine_id'=> $request->input('medicine_id'),
            'days'=>$request->input('days'),
            'dosages'=>$request->input('dosages'),
            'diagnosis_id'=>$request->input('diagnosis_id')
            
        ]);
             return redirect()->back()->with('message','Prescribe medicine update sucessfully' );
     }


}
