<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $data['title'] }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly - v4.10.0
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/login" class="logo">Pengaduan Masyarakat</a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="nav-link scrollto active fs-4 " href="#hero">Home</a>
          </li>

          <li>
            <a href="/aspirasi" class="nav-link fs-4 " href="#hero">Form Aspirasi</a>
          </li>
          <a href="" class='sidebar-link fs-4 ' data-bs-toggle="modal" data-bs-target="#LoginForm">
            <i class='bx bx-lock fs-2 '></i>
          </a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <div class="modal fade text-left" id="LoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel33">Login Form</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="/authenticate" method="POST">
          @csrf
          <div class="modal-body">
            <label>Username: </label>
            <div class="form-group">
              <input type="text" placeholder="Masukkan Username" name="username" class="form-control">
            </div>
            <label>Password: </label>
            <div class="form-group">
              <input type="password" placeholder="Masukkan Password" name="password" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit
              <i class="bx bx-check d-block d-sm-none"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="modal fade text-left" id="checkaspirasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel33">Check Aspirasi Anda</h4>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
          </button>
        </div>
        <form action="" method="get">
          <div class="modal-body">
            <label>Nomor Pengaduan: </label>
            <div class="form-group">
              <input type="text" placeholder="Masukan Nomor Pengaduan" name="search" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="close" class="btn btn-light-secondary" data-bs-dismiss="modal">
              <i class="bx bx-x d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
              <i class="bx bx-check d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Submit</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Website Pengaduan Masyarakat</h1>
          <h2 class="fs-5">Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan. Penanganan pengaduan masyarakat adalah proses kegiatan yang meliputi penerimaan, pencatatan, penelaahan, tindak lanjut penyaluran tindaklanjut, pengarsipan, pemantauan dan pelaporan. Pengadu adalah seluruh pihak baik warganegara maupun penduduk baik orang perorangan, kelompok maupun badan hukum yang menyampaikan pengaduan kepada Pengelola pengaduan pelayanan publik. </h2>
          <div><a href="#about" class="btn-get-started scrollto">Lihat Selengkapnya </a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <section id="SearchData" class="SearchData">
      <div class="container">

        <div class="row ">
          <div class="col-12 ">
            <div class="card card-full  ">
              <div class="card-header btn-get-started">
                Cari Data Aspirasi Kamu
              </div>
              <div class="card-body ">
                <div class="">
                  <form class="col-6 d-flex mx-auto" method="get" action="">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Cari Data Berdasarkan Id Pelaporan" name="search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <span class="input-group-text btn btn-primary" id="basic-addon2"><i class="bi bi-search"></i></span>
                    </div>
                  </form>
                  @if (request('search') == null)
                    <center><p></p></center>
                  @else
                  @foreach ($data['pengaduan'] as $p)
                  <div class="col-6 d-flex mx-auto">
                    <div class="search-body">
                      <label>Id Pelaporan: </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->id_pelaporan }}" class="form-control">
                      </div>
                      <label>Nik: </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->nik }}" class="form-control">
                      </div>
                      <label>Kategori: </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->category->kategori }}" class="form-control">
                      </div>
                      <label>Bukti : </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->bukti }}" class="form-control">
                      </div>
                      <label>Lokasi: </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->lokasi }}" class="form-control">
                      </div>
                      <label>Keterangan: </label>
                      <div class="form-group">
                        <input type="text" value="{{ $p->keterangan }}" class="form-control">
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row ">
          <div class="col-12 ">
            <p>History Aspirasi Berdasarkan Data Yang Sudah Mendapatkan Feedback Dari Users</p>
            <div class="card card-full  ">
              <div class="card-header btn-get-started">
                History Aspirasi
              </div>
              <div class="card-body">
                <div class="col-md-4 d-flex mx-auto gap-5">
                  @foreach ($data['getAspiration'] as $successHistory)
                  @if ($successHistory->feedback > 0)
                  <div class="card w-full">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="card-img-top">


                    <div class="card-body">
                      <div class="status ">
                        <span class="badge text-bg-success">{{ $successHistory->status  }}</span>
                      </div>
                      <h5 class="card-title">Nomor Aspirasi &nbsp;&nbsp;&nbsp;<b class="fs-4">{{ $successHistory->id_pelaporan  }}</b></h5>
                      <p class="card-text">By <span class="text-primary">{{ $successHistory->nama  }}</span> Status Telah <span class="text-primary">{{ $successHistory->status  }}</span></p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Lokasi : {{ $successHistory->lokasi  }}</li>
                      <li class="list-group-item">Keterangan : {{ $successHistory->keterangan  }}</li>
                    </ul>
                    <div class="card-body">

                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/butterfly-free-bootstrap-theme/ -->
        Designed by <a href="">Berkat</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>