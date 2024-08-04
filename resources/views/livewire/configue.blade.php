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





<h1>Liste des Messages </h1>

  <div class="">

      <div class="card">
        <div class="card-body">
         <div class="d-flex justify-content-between">



          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
              </tr>
            </thead>

            <tbody>


            @foreach ($Messages as $Message)
            <tr>
              <th scope="col"> {{ $Message ->name }} </th>
              <th scope="col">{{ $Message ->email}} </th>
              <th scope="col">{{ $Message ->subject}} </th>
              <th scope="col">{{ $Message ->msge}} </th>
              <th scope="col"></th>

            </tr>

            @endforeach

            </tbody>
          </table>
        </div>


             <!-- ======= Footer ======= -->
<footer id="footer" class="footer" style="margin: auto">
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
