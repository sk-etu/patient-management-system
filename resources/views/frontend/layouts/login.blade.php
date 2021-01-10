<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="{{asset('frontend/css/style/style.css')}}">
  </head>
  <body>
    <style>
      body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url("http://localhost/pms/public /frontend/images/slider1.jpg");
    background-size: cover;
}
    </style>
        <div class="login-box">
        @if(session()->has('message'))
                  <p style="color:black;" class="alert alert-success">{{session()->get('message')}}</p>
              @endif

              @if($errors->any())
                  @foreach($errors->all() as $er)
                      <p style="color:black;" class="alert alert-danger">{{$er}}</p>
              @endforeach
              @endif

            <h1 style="color:black;">Log In</h1>

          <form action="{{route('frontend.login.do')}}" method="POST" role="form">
                  @csrf
          <div class="textbox">
            <i style="color:black;" class="fas fa-user"></i>
            <input name="email" type="email" placeholder="enter email"  class="form-control" id="email">
          </div>

          <div class="textbox">
            <i style="color:black;" class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password" class="form-control" id="password">
          </div>

          <input style="color:black;" type="submit" class="btn" value="Sign in">
          
        <div class="container signin">
          <p style="color:black;" >Create an account? <a href="{{route('registration')}}"style="color:#4caf50">Sign Up</a>.</p>
        </div>
        </div>


</form>
          </body>
        </html>