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

                                <!-- search -->

                            <div class="col-md-12">
                                <form action="{{route('search')}}" style="/* float:right */">
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
                                   

<!-- table -->
                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient ID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $key=>$data)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$data->patient_id}}</td> 
                                                <td>{{$data->patientrelation->user->name}}</td>                                              
                                                <td>
                                               <a href="{{route('prescription.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('prescription.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
                                                <a href="#" class="btn btn-sm btn-info">E-mail</a>
                                            
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
