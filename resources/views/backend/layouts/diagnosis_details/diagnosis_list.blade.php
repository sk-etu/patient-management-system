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
                                            <th>Diagnosis Name</th>
                                            <th>Type</th> 
                                            <th>Action</th>                                         
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $key=>$data)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->type}}</td>  
                                            <td>
                                                <a href="{{route('diagnosis.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('diagnosis.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
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
