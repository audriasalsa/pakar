<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pakar Penyakit Ginekologi</title>
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
        <div class="container d-flex align-items-center justify-content-beween"><a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/your-logo.png')?>" alt=""height="30"></a>
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
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Login/logout/') ?>">Logout </a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Banner-->
    <section class="hero bg-cover bg-top" style="background: url(<?php echo base_url('assets/img/doctor-keluhan.jpg)')?>">
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
    <section class="appointment">
      <div class="container text-center">
        <h2 class="lined lined-center">Data <span class="text-primary">Pasien</span></h2>
        <p class="text-muted mb-5">Isi dengan data yang sebenarnya</p>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <div class="card border-0 shadow-sm">
              <div class="card-body border-top border-md border-primary p-5">
                <?php echo validation_errors(); ?>
                <?php echo form_open('KeluhanUser/simpan'); ?>
                <form class="make-appointment-form" action="<?php echo base_url() ?>index.php/KeluhanUser/simpan" method="post">
                  <div class="row">
                    <div class="form-group col-lg-12 mb-4">
                      <input class="form-control" type="text" name="nama_pasien" placeholder="Nama">
                    </div>
                    <div class="form-group col-lg-12 mb-4">
                      <input class="form-control" type="text" name="umur" placeholder="Umur">
                    </div>
                    <div class="form-group col-lg-12">
                      <button class="btn btn-primary btn-block" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <h2 class="h5 lined text-white mb-4">Sistem Pakar Penyakit Ginekologi</h2>
            <p class="text-muted text-small">Provide best quality healthcare for you</p>
            <p class="text-muted text-small">Sistem informasi yang berisi pengetahuan seorang pakar obstetri dan ginekologi sehingga dapat digunakan untuk konsultasi. Sistem pakar dapat membantu seorang pakar, bukan menggantikan.</p>
          </div>
        </div>
      </div>
      <div class="copyrights">       
        <div class="container text-center py-4">
          <p class="mb-0 text-muted">&copy; 2020, Sistem Pakar Penyakit Ginekologi.</p>
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