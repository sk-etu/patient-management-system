<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function medicine()
    {
        return view('backend.layouts.medicine_details.insert_medicine');

    }
public function createmedicine(Request $request)
{
    
        $request->validate([
            'name'=>'required',
            'generic_name'=>'required'
        ]);

    Medicine::create([
        'name'=> $request->input('name'),
        'generic_name'=>$request->input('generic_name')
        
    ]);

    return redirect()->back()->with('message','Medicine Created Successfully.');

}

public function list()
{
    $list=Medicine::paginate(5);
    return view('backend.layouts.medicine_details.medicine_list',compact('list'));
}

     // delete data
     public function delete($id)
     {
        $medicine=Medicine::find($id);
        if(!empty($medicine))
        {
            $medicine->delete();
            $message="medicine deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }

         //single data view
    public function view($id)
    {
      $medicine=Medicine::find($id);
      return view('backend.layouts.medicine_details.view_medicine',compact('medicine'));

    } 


    //single data edit
    public function edit($id)
    {
        $medicine=Medicine::find($id);

        return view('backend.layouts.medicine_details.edit_medicine',compact('medicine'));

    }

    public function update(Request $request,$id)
    {


        $request->validate([
            'name'=>'required',
            'generic_name'=>'required'
        ]);

        $medicine=Medicine::find($id);
        $medicine->update([

            'name'=> $request->input('name'),
            'generic_name'=>$request->input('generic_name')


        ]);
        
            return redirect()->back()->with('message','medicine update sucessfully' );
    }
}
