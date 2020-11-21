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
                                            <th scope="col">ID</th>
                                            <th scope="col">Patient ID</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Emergency</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $data)
                                        <tr>
                                            <th scope="row">{{$data->id}}</th>
                                            <td>{{$data->patient_id}}</td>
                                            <td>{{$data->patient_name}}</td>
                                            <td>{{$data->emergency}}</td>                                        
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
