@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                                
                                <!-- search -->

                            <div class="col-md-12">
                                <form action="{{route('patient.search')}}" style="/* float:right */">
                                    <div style="
                                        float: right;
                                        padding: 10px 10px;
                                    ">
                                    <div>
                                        <div class="input-group mb-3">
                                            <input type="text"  name="query" class="form-control" aria-label="seaching anything..." aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text text-capitalize" id="basic-addon2">search</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                        
                                </form>
                            </div>
                                   
                                <table class="table table-borderless table-striped table-earning">
                                        
                                        <thead>
                                            <tr>
                                            <th>ID</th>                                          
                                            <th>Patient Name</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->user->name}}</td>
                                            <td>
                                                <a href="{{route('patient.edit',$data->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{route('patient.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('patient.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
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
