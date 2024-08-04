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
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto">LABARI</a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('accueil') }}">Accueil</a></li>
          <li><a href="{{ route('eventes') }}">Evènement</a></li>
          <li><a href="{{ route('spectacle') }}">Spectacle</a></li>
          <li><a href="{{ route('concertes') }}">Foire</a></li>
          <li><a href="{{ route('animation') }}">Animation</a></li>
          <li><a href="{{ route('culture') }}">Arts</a></li>

          <li><a href="{{ route('registers') }}">Se connecter</a></li>
          <li class="buy-tickets"><a href="{{ route('buy') }}"> Tickets</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  @yield('basespage')


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
                Quartier : Madina  <br>
                Benin Parakou, bp: 25<br>
              United States <br>
              <strong>Phone:</strong> +229 96265169<br>
              <strong>Email:</strong> issaabdel420@gmail.com<br>
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
