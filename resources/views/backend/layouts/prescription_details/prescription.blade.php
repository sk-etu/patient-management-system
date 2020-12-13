@extends('backend.master')
@section('main')
<div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
              <h1>New Prescription</h1>

              @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif


                <form action="{{route('prescription.store')}}" method="post">
                @csrf

                
                  <div class="form-group">
                        <label for="patient_id">Select patient</label>
                        <select class="form-control" name="patient_id" id="id">
                            @foreach($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->name}}</option>
                            @endforeach
                        </select>
                  </div>
                  <div class="form-group">
                      <label for="date">Select Date</label>
                      <input type="date" name="date" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="weight">Weight</label>
                    <input  name="weight"  placeholder="Enter patient weight" type="number" class="form-control" id="weight" aria-describedby="emailHelp">
                    </div>
                  <div class="form-group">
                    <label for="bp">Blood Pressure</label>
                    <input  name="bp"  placeholder="Enter patient bp" type="text" class="form-control" id="bp" aria-describedby="emailHelp">
                    </div>


                    <div class="form-group">
                        <label for="diagnosis">Select Diagnosis Name</label>
                        <select class="form-control" name="diagnosis_id" id="diagnosis">
                            @foreach($diagnoses as $diagnosis)
                            <option value="{{$diagnosis->id}}">{{$diagnosis->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form -group">
                        <label for="additional_instructions">Additional Instructions</label>
                        <textarea name="additional_instructions" placeholder="Enter additional instructions" class="form-control" id="additional_instructions"></textarea>
            
                    </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>
@stop