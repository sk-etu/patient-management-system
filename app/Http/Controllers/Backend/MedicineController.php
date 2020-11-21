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
    $list=Medicine::all();
    return view('backend.layouts.medicine_details.medicine_list',compact('list'));
}
}
