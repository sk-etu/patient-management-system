@extends('frontend.master')
@section('main')


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



     @stop