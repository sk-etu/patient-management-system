@extends('frontend.master')
@section('main')

<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">

                <h1>Log In</h1>

                <form action="#" >
                    @csrf
                  
                  <div class="form-group">
                            <label for="patient_id">Patient ID</label>
                            <input name="patient_id" required placeholder="Enter patient id" type="number" class="form-control" id="patient_id" aria-describedby="emailHelp">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input  name="password" required placeholder="Enter password" type="password" class="form-control" id="password" aria-describedby="emailHelp">
                  
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>


@stop