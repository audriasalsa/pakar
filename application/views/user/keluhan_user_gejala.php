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
    <section class="appointment">
      <form action="<?php echo base_url() ?>index.php/KeluhanUserGejala/simpan/" method="post">
      <div class="container text-center">
        <!-- <input type="hidden" name="id_pasien" value="<?php echo $variable->id; ?>"> -->
        
        <h2 class="lined lined-center">Gejala <span class="text-primary">Pasien</span></h2>
        <p class="text-muted mb-5">Isi dengan data yang sebenarnya</p>
        <div class="container">  
          <input type="hidden" id="id_pasien" name="id_pasien" value="<?php echo $this->uri->segment(2);?>">
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda merasakan nyeri pada punggung?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G1" value="10"> Ya
              <input type="radio" name="G1" value="10"> Terkadang
              <input type="radio" name="G1" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda merasakan nyeri saat menstruasi?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G2" value="10"> Ya
              <input type="radio" name="G2" value="10"> Terkadang
              <input type="radio" name="G2" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah menstruasi anda tidak teratur?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G3" value="10"> Ya
              <input type="radio" name="G3" value="10"> Terkadang
              <input type="radio" name="G3" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami pendarahan yang berlebihan pada saat menstruasi?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G4" value="10"> Ya
              <input type="radio" name="G4" value="10"> Terkadang
              <input type="radio" name="G4" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda merasakan sakit saat berhubungan seksual?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G5" value="10"> Ya
              <input type="radio" name="G5" value="10"> Terkadang
              <input type="radio" name="G5" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda merasakan nyeri saat buang air besar dan saat buang air kecil?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G6" value="10"> Ya
              <input type="radio" name="G6" value="10"> Terkadang
              <input type="radio" name="G6" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah terdapat darah pada urin atau feses anda?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G7" value="10"> Ya
              <input type="radio" name="G7" value="10"> Terkadang
              <input type="radio" name="G7" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami susah hamil?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G8" value="10"> Ya
              <input type="radio" name="G8" value="10"> Terkadang
              <input type="radio" name="G8" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami kembung pada perut?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G9" value="10"> Ya
              <input type="radio" name="G9" value="10"> Terkadang
              <input type="radio" name="G9" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami diare?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G10" value="10"> Ya
              <input type="radio" name="G10" value="10"> Terkadang
              <input type="radio" name="G10" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami sembelit?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G11" value="10"> Ya
              <input type="radio" name="G11" value="10"> Terkadang
              <input type="radio" name="G11" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami mual?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G12" value="10"> Ya
              <input type="radio" name="G12" value="10"> Terkadang
              <input type="radio" name="G12" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami pendarahan diluar jadwal menstruasi?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G13" value="10"> Ya
              <input type="radio" name="G13" value="10"> Terkadang
              <input type="radio" name="G13" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda menemukan pertumbuhan rambut tidak normal pada tubuh anda?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G14" value="10"> Ya
              <input type="radio" name="G14" value="10"> Terkadang
              <input type="radio" name="G14" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami kerontokan rambut?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G15" value="10"> Ya
              <input type="radio" name="G15" value="10"> Terkadang
              <input type="radio" name="G15" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah anda mengalami kelebihan berat badan atau obesitas?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G16" value="10"> Ya
              <input type="radio" name="G16" value="10"> Terkadang
              <input type="radio" name="G16" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <label>Apakah terdapat munculnya jerawat?</label>
            </div>
            <div class="form-group col-sm-6 mb-0 mb-2 mb-sm-0">
              <input type="radio" name="G17" value="10"> Ya
              <input type="radio" name="G17" value="10"> Terkadang
              <input type="radio" name="G17" value="10"> Tidak
            </div>
          </div>
          <hr />
          <div class="form-group col-lg-12">
            <button class="btn btn-primary btn-block" type="submit">Submit</button>
          </div>
        </div>
      </div>
      </form>
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