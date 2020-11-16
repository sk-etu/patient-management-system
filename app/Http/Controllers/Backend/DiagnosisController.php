<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Diagnosis_list;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function diagnosis()
    {
        return view('backend.layouts.diagnosis');

    }
public function creatediagnosis(Request $request)
{

    Diagnosis_list::create([
        'name'=> $request->input('name'),
        'type'=>$request->input('type')
        
    ]);

    return redirect()->back();

}

public function list()
{
    $list=Diagnosis_list::all();
    return view('backend.layouts.diagnosis_list',compact('list'));
}
}
