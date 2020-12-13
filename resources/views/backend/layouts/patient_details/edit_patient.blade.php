@extends('frontend.master')
@section('main')



  <div class="container">

              @if(session()->has('message'))
                  <p class="alert alert-success">{{session()->get('message')}}</p>
              @endif


              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p class="alert alert-danger">{{$er}}</p>
                  @endforeach
              @endif

              <h1>Registration</h1>
              <p>Please fill in this form to create an account.</p>
                  <form action="{{route('patient.update',$patients->id)}}" method="post" >
                  @method('put')
                      @csrf
          
                              <div class="col-md-6 col-sm-12">
                                <label for="name">patients Name</label>
                                <input value="{{$patients->name}}" name="name" placeholder="Enter patients Name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                              </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="gender">Gender</label>
                                <select value="" id="gender" name="gender" class="form-control">
                                  <option value="#">Choose a Gender</option>
                                  <option value="male" {{$patients->gender == 'male' ? 'selected' : ''}} >Male</option>
                                  <option value="female" {{$patients->gender == 'female' ? 'selected' : ''}} >Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="age">Age</label>
                                <input value="{{$patients->age}}" name="age" placeholder="Enter Age" type="number" class="form-control" id="age" aria-describedby="emailHelp">         
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <label for="phone">Phone Number</label>
                                <input value="{{$patients->phone}}"  name="phone" placeholder="Enter phone number" type="number" class="form-control" id="phone" aria-describedby="emailHelp">         
                              </div>

                              <div class="col-md-6 col-sm-12">
                                <label for="address">Address</label>
                                <input value="{{$patients->address}}" name="address" placeholder="Enter address" type="text" class="form-control" id="address" aria-describedby="emailHelp">         
                              </div>

                              <div class="col-md-6 col-sm-12">
                                <label for="password">Password</label>
                                <input value="{{$patients->password}}" name="password" placeholder="Enter password" type="password" class="form-control" id="password" aria-describedby="emailHelp">
                              
                              </div>

                              <button type="submit" class="btn btn-primary">Registration</button>
</div>

        <div class="container signin">
          <p>Already have an account? <a href="{{route('login')}}">Sign in</a>.</p>
        </div>
</form>

@stop