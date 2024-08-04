
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




  <main>







<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form  class="custom-form ticket-form mb-5 mb-lg-0" action="{{ route('hometikey') }}" method="post">
                    @csrf
                    <h2 class="text-center mb-4">Get started here</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="form_name" id="ticket-form-name"
                                    class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="email" name="email" id="ticket-form-email"
                                    pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address"
                                    required>
                            </div>
                        </div>

                        <input type="tel" class="form-control" name="phone"
                            placeholder="numero"  required="">

                        <h6>Choose Ticket Type</h6>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Eary bird $120
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-check-radio form-control">
                                    <input class="form-check-input" type="radio" name="Form"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Standard $240
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="number" name="number" id="ticket-form-number"
                            class="form-control" placeholder="Number of Tickets" required>

                        <textarea name="message" rows="3" class="form-control"
                            id="ticket-form-message" placeholder="Additional Request"></textarea>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Buy Ticket</button>
                        </div>
                    </div>
                </form>
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
