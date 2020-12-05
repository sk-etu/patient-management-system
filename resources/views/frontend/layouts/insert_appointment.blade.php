@extends('frontend.master')
@section('main')
<main class="app-content">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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

                    <div class="wow fadeInUp">
                                   <div class="col-md-6 col-sm-12">
                                        <label for="id">Patient ID</label>
                                        <input type="number" class="form-control" id="id" name="id" placeholder="id">
                                   </div>

                                   <div class="col-md-6 col-sm-12">
                                        <label for="name">Patient Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                   </div>

                                   <div class="col-md-6 col-sm-12">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="emergency">Emergency(if have)</label>
                                        <textarea class="form-control" id="emergency" name="emergency" placeholder="emergency"></textarea>
                                        <button type="submit" class="btn btn-primary" id="cf-submit" name="submit">Submit</button>
                                   </div>
                    </div>
      </div>    
                    <div class="modal-footer">
                    </div>
                </form>
    </div>
  </div>
</div>
</main>

                @stop