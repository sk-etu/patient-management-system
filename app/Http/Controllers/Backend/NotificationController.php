<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notification()
    {
        return view('backend.layouts.notification_details.insert_notification');

    }
public function createnotification(Request $request)
{
    
        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'description'=>'required'
        ]);

        Notification::create([
        'name'=> $request->input('name'),
        'date'=> $request->input('date'),
        'description'=>$request->input('description')
        
    ]);

    return redirect()->back()->with('message','Notification Created Successfully.');

}
public function list()
{
    $list=Notification::all();
    return view('backend.layouts.notification_details.notification_list',compact('list'));
}

     // delete data
     public function delete($id)
     {
        $notification=Notification::find($id);
        if(!empty($notification))
        {
            $notification->delete();
            $message="notification deleted Successfully";
        }else{
            $message="No data found.";
        }
         return redirect()->back()->with('message',$message);
     }

         //single data view
    public function view()
    {
      $notifications=Notification::all();
      return view('frontend.layouts.notification',compact('notifications'));

    } 
    //Edit data
    public function edit($id)
    {
      $notifications=Notification::find($id);

      return view ('backend.layouts.notification_details.edit_notification',compact('notifications'));
    }

    // insert update form
    public function update(Request $request,$id)
    {
      $request->validate([
        'name'=>'required',
        'date'=>'required',
        'description'=>'required'
        ]);
       $notifications=Notification::find($id);
       $notifications->update([
        'name'=> $request->input('name'),
        'date'=> $request->input('date'),
        'description'=>$request->input('description')
       ]);

       return redirect()->back()->with('message','notification Updated Successfully.');
    }
}
