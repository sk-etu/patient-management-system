<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescribe_medicine;
use App\Models\Medicine;
use Illuminate\Http\Request;

class Prescribe_medicineController extends Controller
{
    public function prescribe_medicine()
    {

        $medicines=Medicine::select(['name','id'])->get();
        return view('backend.layouts.prescribe_medicine.insert_prescribe_medicine', compact('medicines'));

    }
public function createprescribe_medicine(Request $request)
{
    
    
        $request->validate([
            'medicine_id'=>'required',
            'days'=>'required',
            'dosages'=>'required'

        ]);

    prescribe_medicine::create([
        'prescription_id'=> $request->input('p_id'),
        'medicine_id'=> $request->input('medicine_id'),
        'days'=>$request->input('days'),
        'dosages'=>$request->input('dosages')
        
    ]);

    

    return redirect()->back()->with('message','Medicine Created Successfully.');

}

    // show list
    public function list()
    {
      $list=Prescribe_medicine::all();
            // table relation
      $medicines=Medicine::with('medicinerelation');
      return view('backend.layouts.prescribe_medicine.Prescribe_medicine_list',compact('list','medicines'));
  
    }
}
