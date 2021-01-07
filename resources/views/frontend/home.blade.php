 @extends('frontend.master')
 @section('main')
 <!-- HOME -->
 <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
               
        @if($errors->any())
            @foreach($errors->all() as $er)
                <p class="alert alert-danger">{{$er}}</p>
        @endforeach
        @endif

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Let's make your life happier</h3>
                                             <h1>Healthy Living</h1>
                                             <a href="#about" class="section-btn btn btn-default smoothScroll">Meet Our Doctor</a>
                                        </div>
                                   </div>
                              </div>

                             

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                           
                                             <h1>Your Health Benefits</h1>
                                             <a href="{{route('notification.view')}}" class="section-btn btn btn-default btn-blue smoothScroll">Read News</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>



     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Whatever you do, do with determination. You have one life to live; do your work with passion and give your best. 
                                   Whether you want to be a chef, doctor, actor, or a mother, be passionate to get the best result.
                                   And here we are for helping you to get your best result by take care of your health.</p>
                             </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="{{asset('/frontend/images/feva.jpg')}}" class="img-responsive" alt="Dr. Fatema">
                                   <figcaption>
                                        <h3>Dr. Fatema tuz johra eva</h3>
                                        <p>Medicine specialist</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 017-68504750</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">fatema@gmail.com</a></p>
                                        </div>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


   
     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>       
     
@stop
