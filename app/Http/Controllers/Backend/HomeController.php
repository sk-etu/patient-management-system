<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index()
        {
            $list=Appointment::count();
            return view('backend.home',compact('list'));
        }
       
}
