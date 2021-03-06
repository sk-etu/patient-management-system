<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\User;
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
            'gender'=>'required',
            'age'=>'required',
            'phone'=>"required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/",
            'address'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'

        ]);
    
        $user = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ]);
    
        Patient::create([
            'user_id'=>$user->id,
            'gender'=>$request->input('gender'),
            'age'=>$request->input('age'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
        ]);

    return redirect()->back()->with('message','Registration create successfully.');

}


public function search(Request $request)
{

  $search_text = $request->input('query');

  $list=Patient::whereHas('user',function($query) use($search_text){
       $query->where('name','LIKE','%'. $search_text.'%');
  })->get();

  return view('backend.layouts.patient_details.patient_list',compact('list'));
}

//for view data table
    public function list()
    {

        $list=Patient::with('user')->get();
        
        
        return view('backend.layouts.patient_details.patient_list', compact('list'));
    }

     // delete data
  public function delete($id)
  {
     $patients=Patient::find($id);
     if(!empty($patients))
     {
         $patients->delete();
         $message="Patient deleted Successfully";
     }
     else
     {
         $message="No data found.";
     }
      return redirect()->back()->with('message',$message);
  }



      //single data view
      public function view($id)
      {
        $patients=Patient::find($id);
        return view('backend.layouts.patient_details.view_patient',compact('patients'));
  
      } 


          //Edit data
    // public function edit($id)
    // {
    //   $patients=Patient::find($id);
    //   $users=User::find($id);


    //   return view ('backend.layouts.patient_details.edit_patient',compact('patients','users'));
    // }


    //  // insert update form
    //  public function update(Request $request,$id)
    //  {
    //     $request->validate([
    //         'name'=>'required',
    //         'gender'=>'required',
    //         'age'=>'required',
    //         'phone'=>"required|regex:/^\+?(88)?0?1[3456789][0-9]{8}\b/",
    //         'address'=>'required',
    //         'email'=>'required|email|unique:users,email,'.$id,
           

    //     ]);
    
    //     $user = User::create([
    //         'name'=>$request->input('name'),
    //         'email'=>$request->input('email'),
           
    //     ]);
    
    //     Patient::create([
    //         'user_id'=>$user->id,
    //         'gender'=>$request->input('gender'),
    //         'age'=>$request->input('age'),
    //         'phone'=>$request->input('phone'),
    //         'address'=>$request->input('address'),
    //     ]);

 
    //     return redirect()->back()->with('message','Patient Updated Successfully.');
    //  }

  
}
