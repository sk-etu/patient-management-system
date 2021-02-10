<!-- @extends('backend.master')
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


                <form action="{{route('prescription.update',$prescription->id)}}" method="post">
                @method('put')
                @csrf


                  <div class="form-group">
                      <label for="date">Select Date</label>
                      <input value="{{$prescription->date}}" type="date" name="date" value="" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="weight">Weight</label>
                    <input value="{{$prescription->weight}}" name="weight" type="number" class="form-control" id="weight" aria-describedby="emailHelp">
                    </div>
                  <div class="form-group">
                    <label for="bp">Blood Pressure</label>
                    <input value="{{$prescription->bp}}" name="bp"   type="text" class="form-control" id="bp" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                    <label for="pulse">Pulse</label>
                    <input value="{{$prescription->pulse}}" name="pulse"   type="number" class="form-control" id="pulse">
                    </div>

                    <div class="form -group">
                        <label for="chief_complaint">Chief Complaint </label>
                        <textarea name="chief_complaint"  class="form-control" id="chief_complaint">{{$prescription->chief_complaint}}</textarea>
            
                    </div>
                    <div class="form -group">
                        <label for="history">History </label>
                        <textarea name="history" class="form-control" id="history">{{$prescription->history}}</textarea>
            
                    </div>

                    <div class="form -group">
                        <label for="additional_instructions">Additional Instructions</label>
                        <textarea name="additional_instructions" class="form-control" id="additional_instructions">{{$prescription->additional_instructions}}</textarea>
            
                    </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
        </div>
      </div>
    </div>
</div>
@stop -->