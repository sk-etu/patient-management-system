@extends('backend.master')
@section('main')
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">

                                @if(session()->has('message'))
                                    <p class="alert alert-success">{{session()->get('message')}}</p>
                                @endif

                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient ID</th>
                                                <th>Patient Name</th>
                                                <th>Weight</th>
                                                <th>Age</th>
                                                <th>BP</th>                                              
                                                <th>Medicine</th>
                                                <th>Diagnosis</th>

                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->patient_id}}</td>
                                                <td>{{$data->patient_name}}</td>
                                                <td>{{$data->weight}}</td>
                                                <td>{{$data->age}}</td>
                                                <td>{{$data->bp}}</td>
                                                <td>{{$data->medicinerelation->name}}</td>
                                                <td>{{$data->diagnosisrelation->name}}</td>
                                                <td>
                                                <a href="{{route('prescription.edit')}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{route('prescription.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="" class="btn btn-sm btn-info">View</a>
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop
