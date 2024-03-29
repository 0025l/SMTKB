<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TITAN - Kelola Data Relawan</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/css/all2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="/css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/css/freelancer.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TITAN</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('indexpengelola')}}">Home</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <ul class="navbar-nav  ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
               <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <img style="margin-top: 5px;" src="/assets/user.png">
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"  style="font-family: 'Numans', sans-serif !important;">Logout</a>
            </div>
        </li>
          </ul>
        </div>
      </div>
    </nav>

    </br>
  </br>
</br>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Tambah Data Relawan</h2>
        
        </br>
</br>
</br>

</br>
        <form action="{{ route('relawan.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">NIK:</label>
                    <input type="text" class="form-control" id="id_relawan" name="id_relawan">
                </div>
                <div class="form-group">
                    <label for="nama">Name:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email"></textarea>
                </div>
                <div class="form-group">
                    <label for="nohp">Phone Number:</label>
                    <input type="text" class="form-control" id="nohp" name="nohp"></textarea>
                </div>
                <div class="form-group">
                    <label for="keahlian">Keahlian:</label>
                    <select name="keahlian" class="form-control">
                      <option>...</option>
                      <option value="Dokter">Dokter</option>
                      <option value="Epidemiologis/surveilans">Epidemiologis/surveilans</option>
                      <option value="Sanitarian">Sanitarian</option>
                      <option value="Ahli gizi masyarakat">Ahli gizi masyarakat</option>
                      <option value="Perawat">Perawat</option>
                      <option value="Apoteker/asisten apoteker">Apoteker/asisten apoteker</option>
                      <option value="Transporter">Transporter</option>
                      <option value="Staff Komunikasi">Staff Komunikasi</option>
                      <option value="Bidan">Bidan</option>
                      <option value="Ahli kesehatan masyarakat">Ahli kesehatan masyarakat</option>
                      <option value="Ahli kesehatan khusus">Ahli kesehatan khusus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Address:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="usia">Age:</label>
                    <input type="number" class="form-control" id="usia" name="usia"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Foto:</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
      </div>
    </section>

  <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Lokasi</h4>
            <p class="lead mb-0">Jalan Kaliurang KM 14.5
              <br>Yogyakarta, Indonesia
              <br> aquainforteam@gmail.com</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">IKUTI KAMI DI:</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-social text-center" href="#">
                  <img src="/assets/google-plus.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center" href="#">
                  <img src="/assets/telegram.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                 <img src="/assets/twitter.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                 <img src="/assets/instagram.png">
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-social text-center " href="#">
                  <img src="/assets/facebook (1).png">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Tentang Kami</h4>
            <p class="lead mb-0"  style="font-size: 16px !important";>AQUA adalah sebuah tim beranggotakan 4 orang yang bekerja untuk mata kuliah Pengembangan Aplikasi Berbasis Web dan Sistem dan Jaringan Komputer</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; TITAN 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    
   <!-- Bootstrap core JavaScript -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.js"></script>
    <script src="/js/jquery.magnific-popup.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="/js/jqBootstrapValidation.js"></script>


    <script src="/js/lokasi.js"></script>
    <!-- Custom scripts for this template -->
    <script src="/js/freelancer.js"></script>
  </body>

</html>
