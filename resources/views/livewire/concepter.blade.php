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

        @if ($update==false)


        <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form  wire:submit.prevent="marchersave" >


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" wire:model="image">
                  </div>
                </div>

                <div class="row mb-3">
                    <label  class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" wire:model="titre">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" wire:model="detail">
                    </div>
                  </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit"  value="save"  class="btn btn-primary">Ajouter</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

              <br><br>

              <div class="">

                <div class="card">
                  <div class="card-body">
                   <div class="d-flex justify-content-between">

                    <table class="table table-striped">
                      <thead>
                        <tr>

                          <th scope="col">ID</th>
                          <th scope="col">File Upload</th>
                          <th scope="col">Titre</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>

                      <tbody>


                      @foreach ($conceptions as $conception)

                      <tr>
                        <th>
                            {{$conception->id}}
                        </th>

                        <th scope="col">
                            <div class="col-md-10">
                               <div class="speaker">
                                  <img style="height: 50px; width: 50px;" class="img-fluid" src="{{Storage::url($conception['image'])}}">
                               </div>
                          </div>
                        </th>
                        <th scope="col">
                             <h4> {{$conception->titre}}</h4>
                        </th>

                        <th scope="col">
                            <p>  {{$conception->detail}} </p>
                        </th>

                        <th>
                            <div class="col-sm-2 d-flex">
                               <button type="submit" value="save"   wire:click="updateconception({{$conception['id']}})"  class="btn btn-primary">Update</button>
                               <button type="submit" value="save" wire:click="deleteconception({{$conception['id']}})" class="btn btn-secondary">Delete</button>
                              </div>

                        </th>
                      </tr>

                      @endforeach

                      </tbody>
                    </table>
                  </div>

                </div>
            </div>

            </div>
        </div>


        @else


        <form  wire:submit.prevent="updata({{$id}})" >

            <div class="row mb-3">

                <input type="text" class="form-control" wire:model="id" hidden>


            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Chose new Image</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" wire:model="imageup">
              </div>
            </div>

            <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Titre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" wire:model="titre">
                </div>
              </div>

              <div class="row mb-3">
                <label  class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" wire:model="detail">
                </div>
              </div>


            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
               <button type="submit"  value="update"  class="btn btn-primary">Ajouter</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        @endif



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
