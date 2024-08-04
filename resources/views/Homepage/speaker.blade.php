


@extends('layoutspage.basespage')
@section('basespage')


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="../build/temp/css/bootstrap.min.css" rel="stylesheet">

    <link href="../build/temp/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../build/temp/css/templatemo-festava-live.css" rel="stylesheet">


</head>

<body>

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
          <div class="col-md-6">
            <img src="{{Storage::url($Evente['image'])}}"  class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>{{$Evente->titre}}</h2>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
              <p>{{$Evente->detail}}</p>

            </div>
          </div>

        </div>
      </div>

    </section>



    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>Event Schedule</h2>
            <p>Here is our event schedule</p>
          </div>

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Day 1</a>
            </li>
          </ul>

          <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
            necessitatibus voluptatem quis labore perspiciatis quia.</h3>

          <div class="tab-content row justify-content-center">

            <!-- Schdule Day 1 -->
            <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">



              @foreach ($Projets as $Projet)

     <div class="row schedule-item">
        <div class="col-md-2">
            {{$Projet->time}}
        </div>
        <div class="col-md-10">
          <div class="speaker">
            <img src="{{Storage::url($Projet['image'])}}">
          </div>
          <h4> {{$Projet->titre}}</h4>
          <p>  {{$Projet->details}} </p>
        </div>
      </div>

             @endforeach

            </div>
            <!-- End Schdule Day 1 -->



            <section class="pricing-section section-padding section-bg" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Plans, you' love</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>Early Bird</small> $120</h3>

                                        <p>Including good things:</p>
                                    </div>

                                    <p class="pricing-tag ms-auto">Save up to <span>50%</span></h2>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">platform for potential customers</li>

                                    <li class="pricing-list-item">digital experience</li>

                                    <li class="pricing-list-item">high-quality sound</li>

                                    <li class="pricing-list-item">standard content</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="{{ route('hometikey') }}">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="16" cy="16" r="15.5"></circle>
                                            <line x1="10" y1="18" x2="16" y2="12"></line>
                                            <line x1="16" y1="12" x2="22" y2="18"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                            <div class="pricing-thumb">
                                <div class="d-flex">
                                    <div>
                                        <h3><small>Standard</small> $240</h3>

                                        <p>What makes a premium festava?</p>
                                    </div>
                                </div>

                                <ul class="pricing-list mt-3">
                                    <li class="pricing-list-item">platform for potential customers</li>

                                    <li class="pricing-list-item">digital experience</li>

                                    <li class="pricing-list-item">high-quality sound</li>

                                    <li class="pricing-list-item">premium content</li>

                                    <li class="pricing-list-item">live chat support</li>
                                </ul>

                                <a class="link-fx-1 color-contrast-higher mt-4" href="{{  route('hometikey') }}">
                                    <span>Buy Ticket</span>
                                    <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="16" cy="16" r="15.5"></circle>
                                            <line x1="10" y1="18" x2="16" y2="12"></line>
                                            <line x1="16" y1="12" x2="22" y2="18"></line>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

  </main>




  <!-- JAVASCRIPT FILES -->
  <script src="../build/temp/js/jquery.min.js"></script>
  <script src="../build/temp/js/bootstrap.min.js"></script>
  <script src="../build/temp/js/jquery.sticky.js"></script>
  <script src="../build/temp/js/click-scroll.js"></script>
  <script src="../build/temp/js/custom.js"></script>

</body>

</html>



@endsection



