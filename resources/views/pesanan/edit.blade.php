<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Sailor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  @vite('resources/css/style.css')

  <!-- =======================================================
  * Template Name: Sailor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">
    <nav id="navbar" class="navbar">
      <ul>
        <li><img class="menu-img" src="{{Vite::asset('resources/images/logo.jpg') }}" alt=""></li>
        <li><a href="/" >Home</a></li>
        <li><a href="{{ route('login') }}">Pesan</a></li>
        
        @if (Auth::user()->is_admin==1)
        <li><a href="{{route('pesanan.index')}}">Pesanan</a></li>
        @else
        <li><a href="{{route('pesanan.histori')}}">Riwayat</a></li>
        @endif
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                      <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="{{ route('logout') }}">Logout</a></li>

                        </ul>
                        

                          
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
</header><!-- End Header -->

  <main id="main">

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
      <div class="section-title">
          <h2>Isi formulir, dan tunggu kami sampai ke tempatmu</h2>
          <p>Pesan Sekarang!</p>
      </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <img class="menu-img" src="{{Vite::asset('resources/images/laundry.jpg') }}" alt=""></li>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route ('pesanan.update', ['id' => $pesanans->pesanan_id]) }}" method="post" role="form" class="php-email-form">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{$pesanans -> nama}}" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="telepon" id="telepon" placeholder="No. Telepon" value="{{$pesanans -> telepon}}" required>
                </div>
              </div>
              <div class="form-group mt-3">
                  <select name="layanan" id="layanan" class="form-control">
                  @foreach ($layanans as $layanan)
                  <option value="{{ $layanan->id }}" {{ $pesanans->layanan_id == $layanan->id ? 'selected' : '' }}>{{$layanan->layanan }}</option>
                  @endforeach
                  </select>
                  @error('layanan')
                  <div class="text-danger"><small>{{ $message }}</small></div>
                  @enderror
              </div>
              <div class="form-group mt-3">
                <select name="status" id="status" class="form-control">
                <option value="0">proses </option>
                <option value="1">dikirim </option>
                <option value="2">selesai </option>
                </select>
                @error('status')
                <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required>{{$pesanans -> alamat}} </textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                <button type="submit" >Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sailor</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>