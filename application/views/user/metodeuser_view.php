<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medicio | Bootstrap Medical Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css')?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico')?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <!-- Primary Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light py-4 border-bottom border-gray bg-white">
        <div class="container d-flex align-items-center justify-content-beween"><a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo.svg')?>" alt="" width="170"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
      </nav>
      <!-- Secondary Navbar                -->
      <nav class="navbar navbar-expand-lg navbar-light py-0 shadow-sm bg-white">
        <div class="container">
          <div class="collapse navbar-collapse py-3 py-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"><a class="nav-link pl-lg-0" href="<?php echo base_url('index.php/BerandaUser')?>">Home <span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/TabelPenyakitUser')?>">Penyakit </a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/KeluhanUser')?>">Keluhan </a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/KeluhanUser')?>">Logout </a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Banner-->
    <section class="hero bg-cover bg-top" style="background: url(<?php echo base_url('assets/img/contact-banner.jpg)')?>">
      <div class="container index-forward">
        <div class="row align-items-lg-center">
          <div class="col-lg-7 order-2 order-lg-1">
            <h1 class="text-uppercase text-white">Keluhan <span class="text-primary">Penyakit</span></h1>
            <p class="lead text-white mb-0">Masukkan data dengan sesuai</p>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 text-lg-right">
            <!-- Breadcrumb-->
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/BerandaUser')?>"> <i class="fa fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Keluhan</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- Make Appointment Section-->
    <section class="about">
      <div class="container">   
        <!-- <div class="row" >
          <div class="col-xs-12">
          <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Datalatih</th>
            <th>ID Datalatih 2</th>
            <th>Jarak</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_euclidien as $hasil){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil->id_datalatih ?></td>
            <td><?php echo $hasil->id_datalatih2 ?></td>
            <td><?php echo $hasil->Jarak ?></td>
          </tr>
          <?php } ?>
        </tbody>     
      </table>
      <br>
      <h5>Menghitung Validitas</h5>
          <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Datalatih</th>
            <th>ID Datalatih 2</th>
            <th>Jarak</th>
            <th>ID penyakit 1</th>
            <th>ID penyakit 2</th>
            <th>N</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_ranking as $hasil){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $hasil->id_datalatih ?></td>
            <td><?php echo $hasil->id_datalatih2 ?></td>
            <td><?php echo $hasil->Jarak ?></td>
            <td><?php echo $hasil->id_penyakit1 ?></td>
            <td><?php echo $hasil->id_penyakit2 ?></td>
            <td><?php echo $hasil->n ?></td>
          </tr>
          <?php } ?>
        </tbody>     
      </table>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Datalatih</th>
            <th>Validitas</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_validitas as $hasil){ 
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $hasil->id_datalatih ?></td>
              <td><?php echo $hasil->validitas ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table> -->
       <h5>Data Gejala</h5>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>ID Gejala</th>
            <th>Nilai</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_uji as $hasil){ 
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $hasil->nama_pasien ?></td>
              <td><?php echo $hasil->nama_gejala ?></td>
              <?php
                if ($hasil->nilai > 0) {
                  $status = "Ya";
                }
                else{
                  $status = "Tidak";
                }
              ?>
              <td><?php echo $status ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table>
      <!-- <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>ID Data Latih</th>
            <th>ID Pasien</th>
            <th>Jarak</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_euclidienuji as $hasil){ 
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $hasil->id_datalatih ?></td>
              <td><?php echo $hasil->id_pasien ?></td>
              <td><?php echo $hasil->Jarak ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Ranking</th>
            <th>ID Data Latih</th>
            <th>Weight Voting</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_weightvoting as $hasil){ 
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $hasil->id_datalatih ?></td>
              <td><?php echo $hasil->weightvoting ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Ranking</th>
            <th>ID Data Latih</th>
            <th>Weight Voting</th>
            <th>Penyakit</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no = 1; 
            foreach($data_weightvotinglimit as $hasil){ 
          ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $hasil->id_datalatih ?></td>
              <td><?php echo $hasil->weightvoting ?></td>
              <td><?php echo $hasil->id_penyakit ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table> -->
       <h5>Hasil Diagnosa</h5>
      <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>Diagnosa</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($data_diagnosa as $hasil){ 
          ?>
            <tr>
              <td><?php echo $hasil->nama_penyakit ?></td>
            </tr>
          <?php } ?>
        </tbody>     
      </table>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 mb-4 mb-lg-0">
            <h2 class="h5 lined text-white mb-4">About</h2>
            <p class="text-muted text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            <p class="text-muted text-small">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a class="social-link" href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="h5 text-white lined mb-4">Quick Links</h2>
            <div class="d-flex">
              <ul class="list-unstyled d-inline-block mr-4 mb-0">
                <li class="mb-2"><a class="footer-link" href="#">Make appointments </a></li>
                <li class="mb-2"><a class="footer-link" href="#">Doctors team</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Departments services</a></li>
                <li class="mb-2"><a class="footer-link" href="#">About our clinic</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contact us</a></li>
              </ul>
              <ul class="list-unstyled d-inline-block mb-0">
                <li class="mb-2"><a class="footer-link" href="index.html">Home </a></li>
                <li class="mb-2"><a class="footer-link" href="about.html">About us</a></li>
                <li class="mb-2"><a class="footer-link" href="contact.html">Contact us</a></li>
                <li class="mb-2"><a class="footer-link" href="#">About our clinic</a></li>
                <li class="mb-2"><a class="footer-link" href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="h5 text-white lined mb-4">Newsletter</h2>
            <p class="text-muted text-small">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
            <div class="input-group mb-3">
              <input class="form-control text-muted bg-none border-primary" type="text" placeholder="Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">       
        <div class="container text-center py-4">
          <p class="mb-0 text-muted">&copy; 2019, Your company. Template designed by <a href="https://bootstraptemple.com">Bootstrap Temple</a>.</p>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/front.js')?>"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>