@extends('frontend.master')
@section('main')


     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">

                    @foreach($notifications as $notification)
                         <!-- NEWS THUMB -->
                         <div data-wow-delay="0.4s">
                              <div class="news-info">
                                   <span>{{$notification->date}}</span>
                                   <h3>{{$notification->name}}</h3>
                                   <p></p>{{$notification->description}}
                              </div>
                         </div>
                    @endforeach
                    </div>

               </div>
          </div>
     </section>

@stop

     