<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets_land/img/favicon.png" rel="icon">
  <link href="public/assets_land/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets_land/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets_land/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets_land/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets_land/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets_land/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets_land/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/assets_land/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.11.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

     <a href="{{ route('landingpage') }}" class="logo d-flex align-items-center">
      <img src="public/img/logo_white.png" alt=""><span>

       <h5> <b>BAK INDONESIA</b></h5>
     </span>
   </a>

   <nav id="navbar" class="navbar">
    <ul>

      <!-- <li><a class="getstarted scrollto" href="#about"><i class="bi bi-home"></i> Kembali ke Beranda</a></li> -->
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>
</header><!-- End Header -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('landingpage') }}">Beranda</a></li>
        <li>{{$nama_jasa->nama_jasa}}</li>
      </ol>
      <h2>{{$nama_jasa->nama_jasa}}</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-12 entries">

          <article class="entry">

            <div class="entry-img">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                @foreach($detail_jasa as $data)
                <div class="carousel-inner">
                  @if($data->foto_jasa_1 != null)
                  <div class="carousel-item active">
                    <img src="{{asset('public/uploads/foto_jasa_1/'.$data->foto_jasa_1)}}" class="d-block w-100" alt="...">
                  </div>
                  @endif


                  @if($data->foto_jasa_2 != null)
                  <div class="carousel-item ">
                    <img src="{{asset('public/uploads/foto_jasa_2/'.$data->foto_jasa_2)}}" class="d-block w-100" alt="...">
                  </div>
                  @endif


                  @if($data->foto_jasa_3 != null)
                  <div class="carousel-item ">
                    <img src="{{asset('public/uploads/foto_jasa_3/'.$data->foto_jasa_3)}}" class="d-block w-100" alt="...">
                  </div>
                  @endif


                  @if($data->foto_jasa_4 != null)
                  <div class="carousel-item ">
                    <img src="{{asset('public/uploads/foto_jasa_4/'.$data->foto_jasa_4)}}" class="d-block w-100" alt="...">
                  </div>
                  @endif


                  @if($data->foto_jasa_5 != null)
                  <div class="carousel-item ">
                    <img src="{{asset('public/uploads/foto_jasa_5/'.$data->foto_jasa_5)}}" class="d-block w-100" alt="...">
                  </div>
                  @endif

                
                </div>
                @endforeach
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">{{$nama_jasa->nama_jasa}}</a>
            </h2>

            <!-- <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div> -->

            <div class="entry-content">
              @foreach($detail_jasa as $des)
              <p>
                {{$des->deskripsi}}
              </p><br>
              @endforeach
              <div class="text-right" align="right">
                <a href="https://wa.me/6285156517088?text=Hallo%20admin%20Superbak,%20Saya%20ingin%20konsultasi%20layanan%20jasa%20di%20Superbak." target="_blank" rel="noopener noreferrer"><button class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i><i></i> Hubungi kami</button></a>
              </div>
            </div>

          </article><!-- End blog entry -->



        </div><!-- End blog entries list -->



      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="{{ route('landingpage') }}" class="logo d-flex align-items-center">
            <img src="public/img/logo_white.png" alt=""><span>

             <h5> <b>BAK INDONESIA</b></h5>
           </span>
         </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

       

        <div class="col-lg-2 col-6 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Konveksi</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pelayanan Rental Mobil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Digital Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Build Mobile Apps & Website</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Foto & Videografi</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Kontak Kami</h4>
          <p>
            <strong>alamat: </strong>{{$kontak->alamat}}<br><br>
            <strong>Telepon:</strong> {{$kontak->no_telp}}<br>
            <strong>Email:</strong> {{$kontak->email}}<br>
          </p>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>BAK INDONESIA</span></strong>. 2022
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="public/assets_land/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="public/assets_land/vendor/aos/aos.js"></script>
<script src="public/assets_land/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/assets_land/vendor/glightbox/js/glightbox.min.js"></script>
<script src="public/assets_land/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="public/assets_land/vendor/swiper/swiper-bundle.min.js"></script>
<script src="public/assets_land/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="public/assets_land/js/main.js"></script>

</body>

</html>