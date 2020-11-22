<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patient()
    {
        return view('backend.layouts.patient_details.insert_patient');

    }

}
