@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                   

                                @if(session()->has('message'))
                                    <p class="alert alert-danger">{{session()->get('message')}}</p>
                                @endif
                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Medicine Name</th>
                                            <th>Generic Name</th>  
                                            <th>Action</th>                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $key=>$data)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->generic_name}}</td>  
                                            <td>
        
                                                <a href="{{route('medicine.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('medicine.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{route('medicine.edit',$data->id)}}" class="btn btn-sm btn-info">Edit</a>
                                            </td>                                      
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{$list->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
     </div>

    </div>
@stop
