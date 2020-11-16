@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
              <h1>New Prescription</h1>
                <form action="{{route('prescription.store')}}" method="post">
                @csrf

                
                  <div class="form-group">
                    <label for="patient_id">ID</label>
                    <input name="patient_id" required placeholder="Enter patient id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   </div>
                  <div class="form-group">
                    <label for="patient_name">Name</label>
                    <input name="patient_name" required placeholder="Enter patient name" type="text" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="weight">Weight</label>
                    <input  name="weight" required placeholder="Enter patient weight" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input name="age" required placeholder="Enter patient age"  type="number" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="bp">Blood Pressure</label>
                    <input  name="bp" required placeholder="Enter patient bp" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>
@stop