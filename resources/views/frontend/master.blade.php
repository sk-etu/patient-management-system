<!DOCTYPE html>
<html lang="en">
<head>

     <title>Dr. Fatema tuz johra eva</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('/frontend/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('/frontend/css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('/frontend/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('/frontend/css/owl.theme.default.min.css')}}">
     <!-- <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">
      -->
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('/frontend/css/tooplate-style.css')}}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
        @include('frontend.partials.header')


               @yield('main')

    

     <!-- FOOTER -->
     @include('frontend.partials.footer')

     <!-- Appointment -->

<main class="app-content">

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
                                      <br></br>
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
     <!-- end Appointment -->

     <!-- SCRIPTS -->
     <script src="{{asset('/frontend/js/jquery.js')}}"></script>
     <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('/frontend/js/jquery.sticky.js')}}"></script>
     <script src="{{asset('/frontend/js/jquery.stellar.min.js')}}"></script>
     <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
     <script src="{{asset('/frontend/js/smoothscroll.js')}}"></script>
     <script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('/frontend/js/custom.js')}}"></script>

</body>
</html>