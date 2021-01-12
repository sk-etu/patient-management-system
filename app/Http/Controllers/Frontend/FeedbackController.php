<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback()
    {

        return view('frontend.layouts.patient_profile');

    }
    public function createfeedback(Request $request)
{
   // dd($request);
        $request->validate([
            'feedback'=>'required'
        ]);

        Feedback::create([
        'feedback'=> $request->input('feedback')
       
    ]);

    return redirect()->back()->with('message','Feedback Submit Successfully.');

}

public function list()
{
    $list=Feedback::paginate(5);
    return view('backend.layouts.feedback.Feedback_list',compact('list'));
}

 //view data
 public function view($id)
 {
 $feedback=Feedback::find($id);
 return view('backend.layouts.feedback.view_Feedback',compact('feedback'));

 } 

 // delete data
 public function delete($id)
 {
    $feedback=Feedback::find($id);
    if(!empty($feedback))
    {
        $feedback->delete();
        $message="Feedback deleted Successfully";
    }else{
        $message="No data found.";
    }
     return redirect()->back()->with('message',$message);
 }



}
