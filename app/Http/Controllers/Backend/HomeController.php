<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Patient;
use Carbon\Carbon;
use App\Models\Notification;
class HomeController extends Controller
{
    public function index()
        {
            $list=Appointment::whereDate('date', Carbon::today())->get()->count();
            $appointment=Appointment::whereDate('date', Carbon::today())->get()->where('status','true')->count();
            $patient=Patient::count();
            $notice=Notification::count();
            return view('backend.home',compact('list','patient','notice','appointment'));
        }
       
}
