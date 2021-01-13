<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <a href="index.html" style='color:black;' class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
                
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                    @if(auth()->user()->role=='doctor')
                        <li class="{{request()->routeIs('dashboard') ? 'active':''}} has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                      
                        </li>  

    <!-- Prescription -->
                    <li class="{{request()->routeIs('prescription.list') ? 'active':''}}  ">
                            <a href="{{route('prescription.list')}}">
                            <i class="fas fa-list"></i>Prescription list</a>
                    </li>

 <!-- Appointment -->
                    <li class="{{request()->routeIs('appointment.list') ? 'active':''}}  ">
                            <a href="{{route('appointment.list')}}">
                            <i class="fas fa-list"></i>Appointment list</a>
                    </li>
                    @endif

<!-- admin -->
                    @if(auth()->user()->role=='admin')

                    <li  style="margin-top: 15px;" class="{{request()->routeIs('dashboard') ? 'active':''}}  has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                      
                        </li>  

    <!-- Prescription -->

                        <li  style="margin-top: 15px;" class="{{request()->routeIs('prescription.list') ? 'active':''}}  ">
                            <a href="{{route('prescription.list')}}">
                            <i class="fas fa-list"></i>Prescription</a>
                        </li>


    <!-- Appointment -->

                        <li  style="margin-top: 15px;" class="{{request()->routeIs('appointment.list') ? 'active':''}}  ">
                            <a href="{{route('appointment.list')}}">
                            <i class="far fa-calendar-check"></i>Appointment</a>
                        </li>


  <!-- Diagnosis -->

                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#diagnosis" aria-expanded="true">
                        <i class="fas fa-stethoscope"></i>
                             Diagnosis
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                        <ul id="diagnosis" class="collapse">
                            <li class="{{request()->routeIs('diagnosis') ? 'active':''}}  ">
                                <a href="{{route('diagnosis')}}">
                                    <i></i>Add Diagnosis</a>
                            </li>
                            <li class="{{request()->routeIs('diagnosis.list') ? 'active':''}}  ">
                                <a href="{{route('diagnosis.list')}}">
                                <i></i>Diagnosis list</a>
                            </li>
                        </ul>
                    </li> 
   
   <!-- Medicine -->

                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#medicine" aria-expanded="true">
                        <i class="fas fa-pills"></i>
                             Medicine
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="medicine" class="collapse">
                        <li class="{{request()->routeIs('medicine') ? 'active':''}}  ">
                            <a href="{{route('medicine')}}">
                                <i></i>Add Medicine</a>
                        </li>
                        
                        <li class="{{request()->routeIs('medicine.list') ? 'active':''}}  ">
                            <a href="{{route('medicine.list')}}">
                                <i></i>Medicine list</a>
                        </li>
                    </ul>
                    </li>                   


<!-- Notification -->

<li>
<div   style="margin-top: 15px;" href="#" data-toggle="collapse" data-target="#notification" aria-expanded="true">
<i class="far fa-bell"></i>
        Notice
        <i class="fa fa-caret-down"></i>
</div>                        
    <ul id="notification" class="collapse">
        <li class="{{request()->routeIs('notification') ? 'active':''}}  ">
            <a href="{{route('notification')}}">
                <i></i>Create Notice</a>
        </li>
        
        <li class="{{request()->routeIs('notification.list') ? 'active':''}}  ">
            <a href="{{route('notification.list')}}">
                <i></i>Notice list</a>
        </li>
    </ul>
    </li>      
 

  <!-- patient -->
                <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#Patient" aria-expanded="true">
                        <i class="far fa-user-circle"></i>
                             Patient
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="Patient" class="collapse">
                        <li class="{{request()->routeIs('registration') ? 'active':''}}  ">
                            <a href="{{route('registration')}}">
                                <i></i>Add Patient</a>
                        </li>
                        
                        <li class="{{request()->routeIs('patient.list') ? 'active':''}}  ">
                            <a href="{{route('patient.list')}}">
                                <i></i>Patient list</a>
                        </li>
                    </ul>
                </li>


                   <!-- Feedback   -->

                        <li  style="margin-top: 15px;" class="{{request()->routeIs('feedback.list') ? 'active':''}}  ">
                            <a href="{{route('feedback.list')}}">
                            <i class="far fa-comment"></i>Feedback</a>
                        </li>

                @endif
                    </ul>
                </nav>
            </div>
        </aside>