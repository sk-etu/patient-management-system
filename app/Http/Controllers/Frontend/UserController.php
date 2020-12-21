<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   //login
   public function login()
   {
       return view('frontend.layouts.login');

   }

   public function loginProcess(Request $request)
   {

       $request->validate([
          'email'=>'required',
          'password'=>'required'
       ]);

       $login_info=$request->except(['_token']);


       if(Auth::attempt($login_info)){
           $request->session()->regenerate();
           return redirect()->intended('/home');
       }
       else
       {
           return redirect()->back()->withErrors('Invalid');
       }
   }


       //Logout
       public function logout()
       {
         
           Auth::logout();
           return redirect()->route('frontend.login.do');
   
   
       }
    
}
