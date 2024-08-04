@extends('layoutspage.basespage')
@section('basespage')

  <br><br>
  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Speaker Details</h2>
          <p>Praesentium ut qui possimus sapiente nulla.</p>
        </div>


        <div class="row">
            <div class="col-lg-4 col-md-6">
             <div class="speaker">
               <img  src="{{Storage::url($concert['image'])}}" class="img-fluid">
               <div class="details">
                 <h3>{{$concert->titre}}</h3>
                 <p>{{$concert->detail}}</p>
                 <div class="social">
                   <a href=""><i class="fa fa-twitter"></i></a>
                   <a href=""><i class="fa fa-facebook"></i></a>
                   <a href=""><i class="fa fa-google-plus"></i></a>
                   <a href=""><i class="fa fa-linkedin"></i></a>
                 </div>
               </div>
             </div>
           </div>

        </div>
      </div>


    </section>

  </main>


  @endsection
