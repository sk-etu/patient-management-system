@extends('backend.master')
@section('main')
<div class="section__content section__content--p10">
    <div class="container-fluid">
    <div class="row m-t-3">
                            <div class="col-md-10">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Diagnosis Name</th>
                                            <th scope="col">Type</th>                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                        <tr>
                                            <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->type}}</td>                                        
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
