@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>Appointment</h1>

                @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

                <form action="{{route('appointment.store')}}" method="post">
                    @csrf

                <div class="form-group">
                    <label for="patient_id">Patient ID</label>
                    <input  name="patient_id"  placeholder="Enter Patient id" type="number" class="form-control" id="patient_id" aria-describedby="emailHelp">
                  
                </div>
                  
                  <div class="form-group">
                            <label for="patient_name">Patient Name</label>
                            <input name="patient_name"  placeholder="Enter Patient name" type="text" class="form-control" id="patient_name" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                            <label for="emergency">Emergency(if have)</label>
                            <input name="emergency"  placeholder="Enter emergency reason" type="text" class="form-control" id="emergency" aria-describedby="emailHelp">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @stop