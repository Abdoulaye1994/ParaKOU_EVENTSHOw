<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Parakou</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="../build/new/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../build/new/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="../build/new/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../build/new/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../build/new/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @extends('layoutshome.homeparakou')
    @section('homeparakou')

    <!--==========================
        Intro Section
      ============================-->
      <section id="intro">
        <div class="intro-container wow fadeIn">
          <h1 class="mb-4 pb-0">Parakou : <br><span>Votre destination</span> pour des événements inoubliables</h1>
          <div>
           <a href="{{ route('gallery') }}" class="about-btn scrollto">Gallerie</a>
           
           <a href="{{ route('parakou') }}" class="about-btn scrollto">Decouvrer La Ville </a>
          </div>
        </div>

      </section>

  <main id="main">



    <!-- Header Start -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  
                    <h1 class="display-5 mb-4">
                        Lieux à Visiter
                        <span class="text-primary"></span> 
                    </h1>
                    <p class="mb-4">
                        Parakou est une ville dynamique et accueillante qui offre aux visiteurs une expérience inoubliable. N'hésitez pas à explorer ses nombreux attraits et à découvrir la richesse de sa culture et de son histoire.
                    </p>
                   
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                        <div class="owl-carousel header-carousel">
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="../assets/img/pkou/pl.jpg" alt="" />
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="../assets/img/gallery/parakou1.jpg" style="width: 800px; height: 360px;" />
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="../assets/img/pkou/carriere-de-granit.webp" alt="" />
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="../assets/img/pkou/Mont.jpg" alt="" />
                            </div>
                            <div class="owl-carousel-item">
                                <img class="img-fluid" src="../assets/img/pkou/MCHE.jpg" alt="" />
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/2021-11-02.jpg" alt="" />
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/okpara3.jpg" alt="" />
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/okpara4.jpg" alt="" />
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/parakou_rucher3.jpg" alt="" />
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/moro2.jpg" alt="" />
                        </div>
                         <div class="owl-carousel-item">
                            <img class="img-fluid" src="../assets/img/pkou/parakou_rucher3.jpg" alt="" />
                        </div>
                    </div>
            </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2"></span></p>
                    <h1 class="display-5 mb-4">
                      Les environs de 
                        <span class="text-primary">Parakou </span> 
                    </h1>
                    <p class="mb-4">
                        Parakou, la ville aux mille et une merveilles, offre aux visiteurs un riche patrimoine culturel et historique. Mais saviez-vous que ses environs regorgent également de trésors cachés qui valent le détour ? Que vous soyez un touriste en quête d'aventures ou un natif à la recherche de nouvelles découvertes, 
                        laissez-vous guider par notre sélection d'endroits à explorer autour de Parakou.
                    </p>
                  
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2"></span></p>
                    <h1 class="display-5 mb-0">

                        <span class="text-primary">Les Hotels </span> de la Ville
                    </h1>
                </div>

            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/7203621.jpg" alt="Icon" />
                    <h5 class="mb-3">Car Parking</h5>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/503813957.jpg" alt="Icon" />
                    <h5 class="mb-3">Hotel </h5>
                   
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/complexe-hotelier-GPS-1.jpg" alt="Icon" />
                    <h5 class="mb-3">Guide Services</h5>
                   
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/3.jpg" alt="Icon" />
                    <h5 class="mb-3">Food & Beverages</h5>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($Hotes as $Hote)
                    <img  class="img-fluid" src="{{Storage::url($Hote['image'])}}">
                    @endforeach
                    <h5 class="mb-3">Zoo Shopping</h5>
                   
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/2.jpg" alt="Icon" />
                    <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                   
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/2023-08-21.webp" alt="Icon" />
                    <h5 class="mb-3">Play Ground</h5>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="../assets/img/hotels/503813969.jpg" alt="Icon" />
                    <h5 class="mb-3">Rest House</h5>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                  
                    <h1 class="display-5 mb-0">
                        Les images de la ville
                        
                    </h1>
                </div>
                
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/gallery/parakou2.jpg" data-lightbox="animal" >
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/gallery/parakou2.jpg" style="width: 800px; height: 300px;" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">les rues de la vile de Parakou</p>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/gallery/parakou13.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/gallery/parakou13.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/hotels/503813969.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/hotels/503813969.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/hotels/503813969.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/hotels/503813969.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/hotels/503813969.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/hotels/503813969.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="animal-item" href="../assets/img/hotels/503813969.jpg" data-lightbox="animal">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../assets/img/hotels/503813969.jpg" alt="" />
                                    <div class="animal-text p-4">
                                        <p class="text-white small text-uppercase mb-0">Animal</p>
                                        <h5 class="text-white mb-0">Elephant</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Animal End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                Our Clients Say!
            </h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                            clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.
                        </p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-2.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                            clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.
                        </p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="img/testimonial-3.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text rounded text-center p-4">
                        <p>
                            Clita clita tempor justo dolor ipsum amet kasd amet duo justo
                            duo duo labore sed sed. Magna ut diam sit et amet stet eos sed
                            clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.
                        </p>
                        <h5 class="mb-1">Patient Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

</main>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../build/new/lib/wow/wow.min.js"></script>
    <script src="../build/new/lib/easing/easing.min.js"></script>
    <script src="../build/new/lib/waypoints/waypoints.min.js"></script>
    <script src="../build/new/lib/counterup/counterup.min.js"></script>
    <script src="../build/new/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../build/new/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../build/new/js/main.js"></script>
</body>

</html>


@endsection
