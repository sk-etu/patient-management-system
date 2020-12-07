<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis_list;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{

    // show 
    public function diagnosis()
    {
        return view('backend.layouts.diagnosis_details.diagnosis');

    }

    // insert data
public function creatediagnosis(Request $request)
{

    // validation
        $request->validate([
            'name'=>'required',
            'type'=>'required'

        ]);
    

    Diagnosis_list::create([
        'name'=> $request->input('name'),
        'type'=>$request->input('type')
        
    ]);

    return redirect()->back()->with('message','Diagnosis create successfully.');

}
// show list
    public function list()
    {
        $list= Diagnosis_list::all();

        
        return view('backend.layouts.diagnosis_details.diagnosis_list',compact('list'));
    }

         // delete data
         public function delete($id)
         {
            $diagnosis=Diagnosis_list::find($id);
            if(!empty($diagnosis))
            {
                $diagnosis->delete();
                $message="diagnosis deleted Successfully";
            }else{
                $message="No data found.";
            }
             return redirect()->back()->with('message',$message);
         }
    
             //single data view
        public function view($id)
        {
          $diagnosis=Diagnosis_list::find($id);
         
          return view('backend.layouts.diagnosis_details.view_diagnosis',compact('diagnosis'));
    
        } 
}
