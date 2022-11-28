<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BAK INDONESIA</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets_land/img/favicon.png" rel="icon">
  <link href="../public/img/logo_blue.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets_land/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets_land/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets_land/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets_land/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets_land/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets_land/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../public/img/logo_blue.png">
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
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
        <li><a class="nav-link scrollto" href="#services">Layanan Kami</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Portofolio</a></li>
        <li><a class="nav-link scrollto" href="#team">Team Hebat Kami</a></li>
        <!-- <li><a href="blog.html">Blog</a></li> -->
        <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li> -->
        <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
        <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">{{$beranda->header}}</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">{{$beranda->deskripsi}}</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Tentang Kami</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="public/assets_land/img/intro.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Tentang Kami</h3>
            <h2>{{$about->header}}</h2>
            <p>
              {{$about->deskripsi}}
            </p>
            <div class="text-center text-lg-start">
              <a href="#visi_misi" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center nav-link scrollto">
                <span>Visi Misi Kami</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="public/assets_land/img/team.png" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="visi_misi" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>VISI DAN MISI KAMI</p>
      </header>

      <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="public/assets_land/img/startup.png" class="img-fluid" alt="">
            <h3>VISI</h3>
            <ul>
              @foreach($visi_misi as $vis)
              @if($vis->visi != null)
              <li><p style="text-align: left;"> {{$vis->visi}}</p></li>
              @endif
              @endforeach
            </ul>
            
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="public/assets_land/img/progres.png" class="img-fluid" alt="">
            <h3>MISI</h3>
            <ul>
              @foreach($visi_misi as $mis)
              @if($mis->misi != null)
              <li><p style="text-align: left;"> {{$mis->misi}}</p></li>
              @endif
              @endforeach
            </ul>
          </div>
        </div>

        <div class="col-lg-2"></div>


      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6">
          <div class="count-box">
            <i><img src="public/assets_land/img/handshake.png" class="img-fluid" alt=""></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{$kerjasama->jumlah_kerjasama}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kerjasama Terjalin</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="count-box">
            <i><img src="public/assets_land/img/score.png" class="img-fluid" alt=""></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{$kerjasama->penilaian}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Penilaian</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="count-box">
            <i><img src="public/assets_land/img/mitra.png" class="img-fluid" alt=""></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{$kerjasama->jumlah_mitra}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mitra Bergabung</p>
            </div>
          </div>
        </div>


        

      </div>

    </div>
  </section><!-- End Counts Section -->

  

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Layannan kami</h2>
        <p>Hal apa saja yang bisa kami tawarkan ?</p>
      </header>

      <div class="row gy-4">

        @foreach($jasa as $data )
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <img src="{{asset('public/uploads/foto_jasa_1/'.$data->foto_jasa_1)}}" alt="logo" style="width: 250px; height: auto;"><br><br>
            <h3>{{$data->nama_jasa}}</h3>
            <p>{{$data->deskripsi}}</p>
            <a href="{{ route('detail_jasa',$data->id) }}" class="read-more"><span>Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            <a href="https://wa.me/6285156517088?text=Hallo%20admin%20Superbak,%20Saya%20ingin%20konsultasi%20layanan%20jasa%20di%20Superbak." target="_blank" rel="noopener noreferrer" class="read-more"><i class="bi bi-whatsapp"></i><i></i> <span>Chat</span> </a>
          </div>
        </div>
        @endforeach


      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="public/assets_land/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="public/assets_land/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="public/assets_land/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="public/assets_land/img/pricing-ultimate.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section> --><!-- End Pricing Section -->

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portofolio</h2>
          <p>Apa Saja Yang Sudah Kami Kerjakan ?</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter_konveksi">Konveksi</li>
              <li data-filter=".filter_app">Website & Mobile Apps</li>
              <li data-filter=".filter_digital">Digital Marketing</li>
              <li data-filter=".filter_digital">Pelayanan Rental Mobil</li>
              <li data-filter=".filter_digital">Foto & Videografi</li>

            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($portofolio as $porto)
          @if($porto->slug == 'Konveksi')
          <div class="col-lg-4 col-md-6 portfolio-item filter_konveksi">
            @elseif($porto->slug == 'Website & Mobile Apps')
            <div class="col-lg-4 col-md-6 portfolio-item filter_app">
              @elseif($porto->id_jasa == 'Website & Mobile Apps')
              <div class="col-lg-4 col-md-6 portfolio-item filter_digital">
                @endif
                <div class="portfolio-wrap text-center">
                  <img src="{{asset('public/uploads/portofolio_image/'.$porto->portofolio_image)}}" style="width: 250px; height: auto;" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{$porto->slug}}</h4>
                    <div class="portfolio-links">
                      <a href="{{asset('public/uploads/portofolio_image/'.$porto->portofolio_image)}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lihat"><i class="bi bi-eye"></i></a>
                      <!--   <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                    </div>
                  </div>
                </div>
              </div>
              @endforeach


          
        </div>

      </div>

    </section><!-- End Portfolio Section -->

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>TIM</h2>
          <p>Tim Hebat Kami</p>
        </header>

        <div class="row gy-4">

          @foreach($team as $t)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('public/uploads/team/'.$t->image)}}" class="img-fluid" alt="">
                <div class="social">
                  <a href="{{$t->twitter}}" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>
                  <a href="{{$t->facebook}}" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                  <a href="{{$t->instagram}}" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                  <a href="{{$t->linkedin}}" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$t->nama}}</h4>
                <span>{{$t->jabatan}}</span>
                <p>{{$t->deskripsi}}</p>
              </div>
            </div>
          </div>
          @endforeach


        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Clients</h2>
          <p>Temporibus omnis officia</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="public/assets_land/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section> -->

    <!-- End Clients Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" id="self">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>{{$kontak->alamat}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Kontak Kami</h3>
                  <p>{{$kontak->no_telp}}</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Kami</h3>
                  <p>{{$kontak->email}}</p>
                </div>
              </div>
             <!--  <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div> -->
            </div>

          </div>

          <div class="col-lg-6" >
            <div class="row gy-4">

              <div class="col-md-12">
                <input type="text" id="nama" class="form-control" onkeyup="rubahLinkHrefWA()" placeholder="Your Name" required>
              </div>

                <!-- <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div> -->

                <div class="col-md-12">
                  <textarea class="form-control" id="pesan" rows="6" onkeyup="rubahLinkHrefWA()" placeholder="Message" required></textarea>
                </div>


                <div class="col-md-12 text-center"><!-- 
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                -->
                <a id="linkWA" href="#self"  disable>
                  <button class="btn btn-primary" onclick="">Kirim Pesan</button></a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section><!-- End Contact Section -->

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
             <p>{{$about->deskripsi}}</p>
             <div class="social-links mt-3">
              <a href="{{$about->instagram}}" target="_blank" rel="noopener noreferrer" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="{{$about->facebook}}" target="_blank" rel="noopener noreferrer" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="{{$about->twitter}}" target="_blank" rel="noopener noreferrer" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="{{$about->linkedin}}" target="_blank" rel="noopener noreferrer" class="linkedin"><i class="bi bi-linkedin"></i></a>
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
              <strong>Alamat: </strong>{{$kontak->alamat}}<br><br>
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
  <script type="text/javascript">
    let name
    let message
    function rubahLinkHrefWA() {
      name = document.getElementById("nama").value;
      isiPesan = document.getElementById("pesan").value;
      message = encodeURIComponent(`Hallo admin Superbak, saya ${name} saya mau menanyakan informasi tentang ${isiPesan}`)
      hrefWA = document.getElementById("linkWA")
      if(name!=""&&isiPesan!=""){
        hrefWA.href=`https://wa.me/6285156517088?text=${message}`
        hrefWA.target="_blank"
        hrefWA.rel="noopener noreferrer"
      }else{
        hrefWA.href="#self"
        hrefWA.target=""
        hrefWA.rel=""
      }
    }
  </script>

</body>

</html>