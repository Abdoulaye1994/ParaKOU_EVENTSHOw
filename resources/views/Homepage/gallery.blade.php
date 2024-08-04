@extends('layoutspage.basespage')
@section('basespage')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Parakou :<br>Le coeur battant de la culture<span>et des diversements</span>au Bénin</h1>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <div>
        <a href="#about" class="about-btn scrollto">About The Event</a>
        <a href="{{ route('gallery') }}" class="about-btn scrollto">Gallerie</a>
       <a href="{{ route('homes') }}" class="about-btn scrollto">Decouvrer La Ville</a>
      </div>
    </div>
  </section>

  <main id="main">


    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>Event Venue</h2>
          <p>Event venue location info and gallery</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>Downtown Conference Center, New York</h3>
                <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="../assets/img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="../assets/img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>


    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="../assets/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/1.jpg" alt=""></a>
        <a href="../assets/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/2.jpg" alt=""></a>
        <a href="../assets/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/3.jpg" alt=""></a>
        <a href="../assets/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/4.jpg" alt=""></a>
        <a href="../assets/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/5.jpg" alt=""></a>
        <a href="../assets/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/6.jpg" alt=""></a>
        <a href="../assets/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/7.jpg" alt=""></a>
        <a href="../assets/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="../assets/img/gallery/8.jpg" alt=""></a>
      </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="sponsors" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters sponsors-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="sponsor-logo">
              <img src="../assets/img/sponsors/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>


     <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">

          <div class="section-header">
            <h2>Buy Tickets</h2>
            <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                  <h6 class="card-price text-center">$150</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                  <h6 class="card-price text-center">$250</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                  <h6 class="card-price text-center">$350</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <select id="ticket-type" name="ticket-type" class="form-control" >
                      <option value="">-- Select Your Ticket Type --</option>
                      <option value="standard-access">Standard Access</option>
                      <option value="pro-access">Pro Access</option>
                      <option value="premium-access">Premium Access</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </section>



  </main>

  @endsection
