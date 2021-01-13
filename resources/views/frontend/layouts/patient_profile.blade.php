@extends('frontend.master')
@section('main')


@if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item active" role="personalinfo">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#personalinfo" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
  </li>
  <li class="nav-item" role="prescription">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#prescription" role="tab" aria-controls="profile" aria-selected="false">Prescription</a>
  </li>
  <li class="nav-item" role="booking_time">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#bookingtime" role="tab" aria-controls="contact" aria-selected="false">Appointment Time</a>
  </li>
  <li class="nav-item" role="feedback">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#feedback" role="tab" aria-controls="feedback" aria-selected="false">Feedback</a>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade active in" id="personalinfo" role="tabpanel" aria-labelledby="home-tab">
  <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
  <div class="">
            <p>
            <label for="">Patient ID:</label>{{$patient->id}}
            </p>
            <p>
            <label for="">Patient Name:</label>{{$patient->user->name}}
            </p>
            <p>
            <label for="">Patient Gender:</label>{{$patient->gender}}
            </p>
            <p>
            <label for="">Patient Email:</label>{{$patient->user->email}}
            </p>
            <p>
            <label for="">Patient Age:</label>{{$patient->age}}
            </p>

            <p>
            <label for="">Phone No:</label> {{$patient->phone}}
            </p>
            <p>
            <label for="">Address:</label>{{$patient->address}}
            </p>
           
    </div>
    <button href="#" class="btn btn-primary">Upadate Info</button>
</main>
  </div>
  <div class="tab-pane fade" id="prescription" role="tabpanel" aria-labelledby="profile-tab">
  
  <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">

                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient ID</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prescription as $key=>$data)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$data->patient_id}}</td>
                                                <td>{{$data->date}}</td>                                               
                                                <td>
                                                <a href="{{route('profile.view',$data->id)}}" class="btn btn-sm btn-info">View</a>
                                                <a href="{{route('profile.view',$data->id)}}" download class="btn btn-sm btn-info">Download</a>
                                               
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

  </div>
  <div class="tab-pane fade" id="bookingtime" role="tabpanel" aria-labelledby="contact-tab">
  <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">

                                <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Date</th>
                                                <th>Emergency</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($appointment as $data)
                                            <tr>
                                                <td>{{$data->patient_name}}</td>  
                                                <td>{{$data->date}}</td>
                                                <td>{{$data->emergency}}</td>                                               
                                                <td>
                                               <a href="{{route('appointment.cancle',$data->id)}}" class="btn btn-sm btn-info">Cancle Appointment</a>
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

  </div>
<div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
  <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

            <h1>Give Your Feedback</h1>

            <form action="{{route('feedback.store')}}" method="post">
                @csrf
            
           
                <div class="col-md-12 col-sm-16">
                                <label for="feedback">Feedback</label>
                                <textarea  name="feedback" placeholder="Enter feedback" type="text" class="form-control" id="feedback" aria-describedby="emailHelp"></textarea>
                              
                              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>


  </main>
 </div>

 </div>


@stop