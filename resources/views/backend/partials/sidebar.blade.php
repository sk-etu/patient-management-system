<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('backend/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>                      
                        </li>  

    <!-- Prescription -->

                    <li>
                        <div href="#" data-toggle="collapse" data-target="#prescription" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             prescription
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="prescription" class="collapse">
                        <li>
                            <a href="{{route('prescription')}}">
                                <i></i>Insert Prescription</a>
                        </li>
                        
                        <li>
                            <a href="{{route('prescription.list')}}">
                                <i></i>Prescription_list</a>
                        </li>
                    </ul>
                    </li>

  <!-- Diagnosis -->

                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#diagnosis" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             Diagnosis
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                        <ul id="diagnosis" class="collapse">
                            <li>
                                <a href="{{route('diagnosis')}}">
                                    <i></i>Inser Diagnosis</a>
                            </li>
                            <li>
                                <a href="{{route('diagnosis.list')}}">
                                <i></i>Diagnosis_list</a>
                            </li>
                        </ul>
                    </li> 
   
   <!-- Medicine -->

                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#medicine" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             Medicine
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="medicine" class="collapse">
                        <li>
                            <a href="{{route('medicine')}}">
                                <i></i>Insert Medicine</a>
                        </li>
                        
                        <li>
                            <a href="{{route('medicine.list')}}">
                                <i></i>medicine_list</a>
                        </li>
                    </ul>
                    </li>                   
 <!-- Appointment -->
                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#appointment" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             Appointment
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="appointment" class="collapse">
                        <li>
                            <a href="{{route('appointment')}}">
                                <i></i>Insert Appointment</a>
                        </li>
                        
                        <li>
                            <a href="{{route('appointment.list')}}">
                                <i></i>Appointment_list</a>
                        </li>
                    </ul>
                    </li>

  <!-- Doctor -->
                    <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#appointment" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             Doctor
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="doctor" class="collapse">
                        <li>
                            <a href="{{route('doctor')}}">
                                <i></i>Insert Doctor</a>
                        </li>
                        
                      
                    </ul>
                    </li>

  <!-- patient -->
  <li>
                        <div href="#" style="margin-top: 15px;" data-toggle="collapse" data-target="#Patient" aria-expanded="true">
                             <i class="fa fa-tags"></i>
                             Patient
                             <i class="fa fa-caret-down"></i>
                        </div>                        
                    <ul id="Patient" class="collapse">
                        <li>
                            <a href="{{route('registration')}}">
                                <i></i>Insert Patient</a>
                        </li>
                        
                        <li>
                            <a href="{{route('patient.list')}}">
                                <i></i>Patient_list</a>
                        </li>
                    </ul>
                    </li>

                    </ul>
                </nav>
            </div>
        </aside>