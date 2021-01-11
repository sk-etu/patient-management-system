<header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 01725-710843</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 10:00 AM - 8:00 PM (Sun-Thu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">health@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>

          <!-- MENU -->
          <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('home')}}" class="smoothScroll">Home</a></li>
                         @guest
                       
                         <li><a href="{{route('frontend.login')}}" class="smoothScroll">Login</a></li>
                         
                         @endguest

                         
                         @auth
                         @if(auth()->user()->role=='user')  
                         <li><a href="{{route('notification.view')}}" class="smoothScroll">Notification</a></li>
                     
                         <li><a href="{{route('profile')}}" class="smoothScroll">Profile</a></li>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Make An Appointment
                         </button>  
                         <a href="{{route('frontend.logout')}}" type="button" class="btn btn-primary">
                              Logout
                         </a>
                         @endif
                         @if(auth()->user()->role=='doctor')  
                         <li><a href="{{route('notification.view')}}" class="smoothScroll">Notification</a></li>
                    
                         <a href="{{route('frontend.logout')}}" type="button" class="btn btn-primary">
                              Logout
                         </a>   
                    @endif  

                    @if(auth()->user()->role=='admin')  
                         <li><a href="{{route('notification.view')}}" class="smoothScroll">Notification</a></li>
                    
                         <a href="{{route('frontend.logout')}}" type="button" class="btn btn-primary">
                              Logout
                         </a>   
                    @endif   

                              @endauth   

                  
                          
                    </ul>




               </div>

          </div>
     </section>


