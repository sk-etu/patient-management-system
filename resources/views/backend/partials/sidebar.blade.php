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
                    
                    <li>
                        <div href="#" data-toggle="collapse" data-target="#diagnosis" aria-expanded="true">
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
                        
                    </ul>
                </nav>
            </div>
        </aside>