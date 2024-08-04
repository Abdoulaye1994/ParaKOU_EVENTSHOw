<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Dashboard - NiceAdmin Bootstrap Template</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="../build/nice/assets/img/favicon.png" rel="icon">
      <link href="../build/nice/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="../build/nice/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="../build/nice/assets/vendor/simple-datatables/style.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="../build/nice/assets/css/style.css" rel="stylesheet">
     </head>

     <body>

        <section class="section dashboard">
            <div class="row">

              <!-- Left side columns -->
              <div class="">
                <div class="row">

                  <!-- Sales Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Evènement <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                          </div>
                          <div class="ps-3">
                            <h6> {{ $Eventes }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Programme <span>| This yea</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Projets }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->




                  <!-- Sales Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card sales-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Hotel <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $concerts }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Sales Card -->

                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Festivale<span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $conceptions }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->



                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Lieux<span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Festivales }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->




                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Ticket <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Hotes }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->




                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Art <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Visites }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->





                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Concert <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Prices }} </h6>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->



                  <!-- Revenue Card -->
                  <div class="col-xxl-4 col-md-3">
                    <div class="card info-card revenue-card">

                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>

                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">Message <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>{{ $Messages }}</h6>
                           
                          </div>
                        </div>
                      </div>

                    </div>
                  </div><!-- End Revenue Card -->







      <h1>Liste des Inscriptions </h1>

<div class="">

    <div class="card">
      <div class="card-body">
       <div class="d-flex justify-content-between">



        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">username</th>

            </tr>
          </thead>

          <tbody>


          @foreach ($Profils as $Profil)
          <tr>
            <th scope="col"> {{ $Profil ->name }} </th>
            <th scope="col">{{ $Profil ->email}} </th>
            <th scope="col">{{ $Profil ->username}} </th>

          </tr>

          @endforeach

          </tbody>
        </table>
      </div>






            </section>
        <!-- ======= Footer ======= -->
      <footer id="footer" class="footer" style="margin: auto;">
        <div class="copyright">
          &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">Abdoulaye ISSA</a>
        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="../build/nice/assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="../build/nice/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../build/nice/assets/vendor/chart.js/chart.umd.js"></script>
      <script src="../build/nice/assets/vendor/echarts/echarts.min.js"></script>
      <script src="../build/nice/assets/vendor/quill/quill.min.js"></script>
      <script src="../build/nice/assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="../build/nice/assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="../build/nice/assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="../build/nice/assets/js/main.js"></script>

    </body>

    </html>
    </div>


</div>
