<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Festava Live - Bootstrap 5 CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="../build/temp/https://fonts.googleapis.com">

    <link rel="preconnect" href="../build/temp/https://fonts.gstatic.com" crossorigin>

    <link href="../build/temp/https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="../build/temp/css/bootstrap.min.css" rel="stylesheet">

    <link href="../build/temp/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../build/temp/css/templatemo-festava-live.css" rel="stylesheet">

    <!--

@extends('layoutspage.basespage')
@section('basespage')

  <br><br>



  <main id="main">


  <br>






<section class="schedule-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">Calandrier Evénementiel</h1>

                    <div class="table-responsive">
                        <table class="schedule-table table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>

                                    <th scope="col">Mercredi</th>

                                    <th scope="col">Jeudi</th>

                                    <th scope="col">Vendredi</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">Jour 1</th>

                                    <td class="table-background-image-wrap pop-background-image">
                                        <h3>Pop Night</h3>

                                        <p class="mb-2">5:00 - 7:00 </p>

                                        <p>By Adele</p>

                                        <div class="section-overlay"></div>
                                    </td>

                                    <td style="background-color: #F3DCD4"></td>

                                    <td class="table-background-image-wrap rock-background-image">
                                        <h3>Rock & Roll</h3>

                                        <p class="mb-2">7:00 - 11:00</p>

                                        <p>By Rihana</p>

                                        <div class="section-overlay"></div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Jour 2</th>

                                    <td style="background-color: #ECC9C7"></td>

                                    <td>
                                        <h3>DJ Night</h3>

                                        <p class="mb-2">6:30 - 9:30 </p>

                                        <p>By Rihana</p>
                                    </td>

                                    <td style="background-color: #D9E3DA"></td>
                                </tr>

                                <tr>
                                    <th scope="row">Jour  3</th>

                                    <td class="table-background-image-wrap country-background-image">
                                        <h3>Country Music</h3>

                                        <p class="mb-2">4:30 - 7:30 </p>

                                        <p>By Rihana</p>

                                        <div class="section-overlay"></div>
                                    </td>

                                    <td style="background-color: #D1CFC0"></td>

                                    <td>
                                        <h3>Free Styles</h3>

                                        <p class="mb-2">6:00 - 10:00 PM</p>

                                        <p>By Members</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</section>




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
              <h2>Evènement en Cours</h2>
            </div>


          <div class="row" id="eventes">

              @foreach ($Eventes as $Evente)

              <div class="col-lg-4 col-md-6">
               <div class="speaker">
                   <img src="{{Storage::url($Evente['image'])}}"  class="img-fluid">
                 <div class="details">
                  <h3><a href="{{ route('speakers', ['id' => $Evente->id]) }}">{{$Evente->titre}}</a></h3>
                  <p>@php
                      echo Str::substr( $Evente->detail, 0, 0);
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


            <div class="section-header">
              <h2>Marchés et foires artisanales</h2>
            </div>




            <div class="row">

                @foreach ($conceptions as $conception)

                <div class="col-lg-4 col-md-6">
                 <div class="speaker">
                     <img src="{{Storage::url($conception['image'])}}"  class="img-fluid">
                   <div class="details">
                    <h3><a href="{{ route('speakers', ['id' => $conception->id]) }} ">{{$conception->titre}}</a></h3>
                    <p>@php
                        echo Str::substr( $conception->detail, 0, 0);
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



            <div class="section-header">
              <h2>Fêtes et animations sportives</h2>
            </div>


            <div class="row">

                @foreach ($Festivales as $Festivale)

                <div class="col-lg-4 col-md-6">
                 <div class="speaker">
                     <img src="{{Storage::url($Festivale['image'])}}"  class="img-fluid">
                   <div class="details">
                    <h3><a href="{{ route('speakers', ['id' => $Festivale->id]) }} ">{{$Festivale->titre}}</a></h3>
                    <p>@php
                        echo Str::substr( $Festivale->detail, 0, 0);
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


  <script src="../build/temp/js/jquery.min.js"></script>
  <script src="../build/temp/js/bootstrap.min.js"></script>
  <script src="../build/temp/js/jquery.sticky.js"></script>
  <script src="../build/temp/js/click-scroll.js"></script>
  <script src="../build/temp/js/custom.js"></script>

</body>

</html>

  @endsection


