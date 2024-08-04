<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Parakou EventShow</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="../assets/lib/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto">Parakou EventShow</a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('accueil') }}">Home</a></li>
          <li><a href="{{ route('eventes') }}">Evènement</a></li>
          <li><a href="{{ route('hoteling') }}">Hôtel</a></li>
          <li><a href="{{ route('tourisme') }}">Visite</a></li>
          <li><a href="{{ route('contacte') }}">Contact</a></li>

          <li class="buy-tickets"><a href="{{ route('buy') }}">Buy Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="introsse">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Découvrez <br><span>la magie de</span> PARAKOU</h1>
      <p class="mb-4 pb-0">Votre prochaine aventure vous attend</p>
      <div>
        <a href="#about" class="about-btn scrollto">About The Event</a>
       <a href="{{ route('gallery') }}" class="about-btn scrollto">Gallerie</a>
       <a href="{{ route('homes') }}" class="about-btn scrollto">Decouvrer La Ville</a>
      </div>
    </div>
  </section>
 

  <main id="main">




    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Les Endroits à Visiter</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="../assets/img/pkou/pl.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>



          @foreach ($Visites as $Visite)

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


           @endforeach
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="../assets/img/pkou/PKOU.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
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



    <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>HOTEL DE VILLE</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                <img src="../assets/img/hotels/2023-10-11 (1).webp" alt="Hotel 1" class="img-fluid">
              </div>
              <h3><a href="#">Hotel IYA-OASIS</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>Quartier Ladjifarani</p>
            </div>
          </div>


          @foreach ($Hotes as $Hote)

          <div class="col-lg-4 col-md-6">
            <div class="hotel">
              <div class="hotel-img">
                 <img  class="img-fluid" src="{{Storage::url($Hote['image'])}}">
              </div>
              <h3><a href="#">{{$Hote->titre}}</a></h3>
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>{{$Hote->quartier}}</p>
            </div>
          </div>

          @endforeach

        </div>
      </div>

    </section>





    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="{{ route('contacte') }}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="msge" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->




  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="../build/img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>



          <div class="col-lg-5 col-md-6 footer-links">
            <section id="subscribe">
                <div class="container wow fadeInUp">
                  <div class="section-header">
                    <h2></h2>
                  </div>

                  <div>
                    <form method="POST" action="#" class="mt-4">
                    <div class="form-row justify-content-center">
                      <div class="col-auto">
                        <input type="text" class="form-control" placeholder="Enter your Email">
                      </div>
                      <div class="col-auto">
                        <button type="submit">Subscribe</button>
                      </div>
                    </div>
                  </form>
                  </div>

                </div>
              </section>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">Abdoulaye ISSA</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../assets/lib/jquery/jquery.min.js"></script>
  <script src="../assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="../assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/lib/easing/easing.min.js"></script>
  <script src="../assets/lib/superfish/hoverIntent.js"></script>
  <script src="../assets/lib/superfish/superfish.min.js"></script>
  <script src="../assets/lib/wow/wow.min.js"></script>
  <script src="../assets/lib/venobox/venobox.min.js"></script>
  <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>
