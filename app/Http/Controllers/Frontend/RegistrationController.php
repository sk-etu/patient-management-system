<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {

        return view('frontend.layouts.registration');
    }

    public function createregistration(Request $request)
{

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required'

        ]);
    

    Patient::create([
        'name'=> $request->input('name'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'password'=>$request->input('password')
        
    ]);

    return redirect()->back()->with('message','Registration create successfully.');

}

//for view data table
    public function list()
    {

        $list=Patient::all();
        return view('backend.layouts.patient_details.patient_list', compact('list'));
    }
}
