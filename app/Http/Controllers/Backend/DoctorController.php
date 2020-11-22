<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor()
    {
        return view('backend.layouts.doctor_details.insert_doctor');

    }
}
