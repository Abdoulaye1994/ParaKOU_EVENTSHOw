@extends('layoutspage.basespage')
@section('basespage')

  <br><br>



  <!--==========================
    Speakers Section
  ============================-->
  <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2> agenda des événements à ne pas manquer à Parakou.</h2>
          <p>Vivez des expériences extraordinaires à Parakou : la ville aux mille et une festivités</p>
        </div>

       



         <div class="section-header">
            <h2>Expositions et vernissages</h2>
          </div>



          <div class="row">

              @foreach ($concerts as $concert)

              <div class="col-lg-4 col-md-6">
               <div class="speaker">
                   <img src="{{Storage::url($concert['image'])}}"  class="img-fluid">
                 <div class="details">
                  <h3><a href="{{ route('speakers', ['id' => $concert->id]) }} ">{{$concert->titre}}</a></h3>
                  <p>@php
                      echo Str::substr( $concert->detail, 0, 0);
                  @endphp</p>
                   <div class="social">
                     <a href=""><i class="fa fa-twitter"></i></a>
                     <a href=""><i class="fa fa-facebook"></i></a>
                     <a href=""><i class="fa fa-google-plus"></i></a>
                     <a href=""><i class="fa fa-linkedin"></i></a>
                   </div>
                 </div>
               </div>
             </div>

              @endforeach


           </div>


      </div>

    </section>



</main>



  @endsection
