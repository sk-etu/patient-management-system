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
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $key=>$data)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$data->user_id}}</td>                                               
                                                <td>
                                                <a href="{{route('prescription.edit',$data->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{route('prescription.delete',$data->id)}}" class="btn btn-sm btn-info">Delete</a>
                                                <a href="{{route('prescription.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
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
