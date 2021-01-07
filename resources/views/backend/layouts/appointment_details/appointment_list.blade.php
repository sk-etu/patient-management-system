@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                                <table class="table table-borderless table-striped table-earning">
                                        
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>Date</th>
                                          
                                            <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                        <tr>
                                            <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->patient_id}}</td>
                                            <td>{{$data->patient_name}}</td>
                                            <td>{{$data->date}}</td>
                                            
                                            <td>
                                               
                                                <a href="{{route('appointment.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('appointment.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{route('insert.prescription',$data->patient_id)}}" class="btn btn-sm btn-info">Prescription</a>
                                            </td>                                       
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
     </div>

    </div>
@stop
