<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interview Kerja</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Go,<span>Work!</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          @if (Auth::check())
    @if (Auth::user()->role === 'admin')
    <li><a href="{{route ('data')}}" class="login-btn">Data</a></li>
    @elseif (Auth::user()->role == 'petugas')
    <li><a href="{{route ('data_petugas')}}" class="login-btn">Data</a></li>
    @endif
    @else
  <li><a href="{{route('login')}}" class="login-btn">Login</a></li>
    @endif
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>Fe's Company</span></h2>
          <p>West Java• Since February 1, 2019• Featured • 24 Workers</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="https://youtu.be/Hu8U-vzkZz8" target="blank" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                <strong>What are We Doing</strong>
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>What manner of thing was upon me i didnot know, but that it was large and heavy and many-legged i cloud feel</li>
                <li><i class="bi bi-check-circle-fill"></i> My Hands were at its throat before the fangs had a  chance to bury themselves in my neck, and slowly</li>
                <li><i class="bi bi-check-circle-fill"></i>i forced the hairy face from me and closed my fingers, vise-like, upon its windpipe</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://youtu.be/wVmZD4pZ9PE" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Comperate</strong></p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Workers</strong></p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

      <!-- ======= Hero Section ======= -->
  <!-- <section>
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class=" mt-25">
          <div class="col-xl-12 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <h4 class="title"><a href="" class="stretched-link">Login</a></h4>
              <p>Login to see your status with the email you registered on the job application</p>

          </div>End Icon Box -->
        <!-- </div>
      </div>
    </div>

    </div>
  </section>  -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Send Your Apllication</h2>

        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>West Java• Since February 1, 2019• Featured • 24 Workers</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>fecompany@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+628129075212</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
          <!-- @if (Session::get('success'))
            <div style="width:100%; background:green; padding:10px">
        {{ Session::get('success')}}
        </div>
        @endif -->
            <form action="{{route ('store')}}" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="">Full Name</label>
                  <input type="text" name="nama" class="form-control" id="" placeholder="Your Name">
                  <br>
                  @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email" id="" placeholder="Your Email">
                  <br>
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Age</label>
                  <input type="number" class="form-control" name="age" id="" placeholder="Your Age">
                  <br>
                  @error('age')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Phone Number</label>
                  <input type="number" class="form-control" name="phone_number" id="" placeholder="Your Phone Number">
                  <br>
                  @error('phone_number')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Last Education</label><br>
                  <select name="last_education" id="" class="col-md-12 form-group mt-3 mt-md-0 form-control" >
                <option selected hidden disabled>Select Last Education</option>
                <option value="SMA"> SMA</option>
                <option value="SMK"> SMK</option>
                <option value="Universitas"> Universitas</option>
                </select>
                <br>
                  @error('last_education')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror   
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="">Educational Institutions </label>
                  <input type="text" class="form-control" name="education_name" id="" placeholder="Name of institutions">
                  <br>
                  @error('education_name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                <label for="">CV</label>
                <input type="file" class="form-control" name="cv_file" id="subject" placeholder="CV">
                <br>
                  @error('cv_file')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
              </div>
              <br>
              <div class="text-center">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Go, Work!</span>
          </a>
          <p><strong>cpmpany@fes.com</strong></p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
          <p>
            FAQ<br>
            Reporting<br>
            Block Storage <br>
            Tools & Intergrations <br>
            API <br>
            Pricing <br>
          </p>

        </div>

      </div>
    </div>



    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Lingga</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>