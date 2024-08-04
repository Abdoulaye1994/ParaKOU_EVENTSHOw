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
          <h2>Programme</h2>

        </div>


        <div class="row">
            <div class="col-lg-4 col-md-6">
             <div class="speaker">
               <img  src="{{Storage::url($Visite['image'])}}" class="img-fluid">
               <div class="details">
                 <h3><a href="{{ route('spoke', ['id' => $Visite->id]) }} ">{{$Visite->titre}}</a></h3>
                 <p>{{$Visite->detail}}</p>
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
