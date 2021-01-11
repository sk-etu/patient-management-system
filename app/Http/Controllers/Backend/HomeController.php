<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Notification;
class HomeController extends Controller
{
    public function index()
        {
            $list=Appointment::count();
            $patient=Patient::count();
            $notice=Notification::count();
            return view('backend.home',compact('list','patient','notice'));
        }
       
}
