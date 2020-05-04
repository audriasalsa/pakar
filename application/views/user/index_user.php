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
            	<li class="nav-item"><a class="nav-link" href="contact.html">Logout </a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="p-3 shadow-sm index-forward border-top" id="search">
        <div class="container">
          <form action="#">
            <div class="row">
              <div class="form-group col-sm-8 mb-0 mb-2 mb-sm-0">
                <input class="form-control" type="search" placeholder="What're you looking for...">
              </div>
              <div class="form-group col-sm-4 text-center text-sm-left mb-0">
                <button class="btn btn-primary" type="submit"> <i class="fas fa-search mr-2"></i>Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <!-- Hero Banner-->
    <section class="hero-home bg-cover bg-center" style="background: url(<?php echo base_url('assets/img/home-banner.jpg)')?>">
      <div class="container index-forward py-5 mb-5">
        <div class="row text-white">
          <div class="col-lg-8">
            <h1 class="text-uppercase mb-0 text-shadow">Sistem Pakar Ginekologi</h1>
            <p class="h5 my-4 text-shadow">Provide best quality healthcare for you</p>
            <p>Sistem informasi yang berisi pengetahuan seorang pakar obstetri dan ginekologi sehingga dapat digunakan untuk konsultasi. Sistem pakar dapat membantu seorang pakar, bukan menggantikan.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Info Section-->
    <section class="info p-0 bg-light">
      <div class="container bg-white">
        <div class="row py-5 border-top border-md border-primary">
          <div class="col-lg-12 border-right mb-4 mb-lg-0">
            <div class="px-4">
              <p class="text-primary mb-0 font-weight-normal h5">Ginekologi</p>
              <p class="text-muted mb-0 text-small">Ginekologi (secara harfiah berarti "ilmu mengenai wanita") adalah cabang ilmu kedokteran yang khusus mempelajari penyakit-penyakit sistem reproduksi wanita (rahim, vagina dan ovarium). Pada masa modern ini, hampir semua ginekolog juga merupakan ahli obstetrik.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section-->
    <section class="about bg-light pt-0">
      <div class="container text-center">
        <h2 class="text-uppercase lined lined-center">Selamat Datang di <span class="text-primary">Sistem Pakar </span>Ginekologi</h2>
        <p class="text-muted">Nulla tristique ipsum in quam. Integer ac elit. Duis turpis faucibus non</p>
        <div class="row pt-5">
          <div class="col-lg-4 mb-5 mb-lg-0"><i class="fas fa-stethoscope fa-3x text-primary mb-3"></i>
            <h2 class="h5">Informasi Terkait Penyakit Ginekologi</h2>
            <p class="text-muted px-lg-3 mb-0">Sistem pakar ini menyajikan penjelasan tentang 4 penyakit ginekologi.</p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0"><i class="fas fa-microscope fa-3x text-primary mb-3"></i>
            <h2 class="h5">Langkah Awal</h2>
            <p class="text-muted px-lg-3 mb-0">Sistem pakar ini memberikan informasi terkait solusi awal yang harus dilakukan oleh pasien</p>
          </div>
          <div class="col-lg-4"><i class="fas fa-syringe fa-3x text-primary mb-3"></i>
            <h2 class="h5">24/7 Konsultasi Keluhan</h2>
            <p class="text-muted px-lg-3 mb-0">Sistem pakar ini bisa diakses 24 jam untuk melakukan konsultasi perihal penyakit ginekologi</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section-->
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
          <p class="mb-0 text-muted">&copy; 2020, Sistem Pakar Ginekologi</a>.</p>
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