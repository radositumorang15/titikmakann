<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About Titik makan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <link rel="shortcut icon" href="img/stiker titik makan.png" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="me-3"
                ><img src="img/titikmakan.png" width="70%" alt=""
              /></i>
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.php" class="nav-item nav-link ">Home</a>
              <a href="reservasi.php" class="nav-item nav-link">Reservasi</a>
              <a href="about.php" class="nav-item nav-link active">Tentang Kami</a>
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="menu.php" class="nav-item nav-link">Menu</a>
              <a href="testimonial.php" class="nav-item nav-link">Review</a>
              <a href="contact.php" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <?php
              if (isset($_SESSION['guest'])) {
                // Pengguna sudah login
                echo '<a href="logout.php" class="btn btn-primary py-2 px-4">Logout</a>';
              } else {
                // Pengguna belum login
                echo '<a href="login.php" class="btn btn-primary py-2 px-4">Login/SignUp</a>';
              }
              // Logout button clicked
              if (isset($_GET['logout'])) {
                session_destroy(); // Hapus semua data sesi
                header('Location: index.php'); // Alihkan ke halaman beranda setelah logout
                exit;
              }
            ?>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Tentang kami
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-white active"
                  aria-current="page"
                >
                  Tentang Kami
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->
      <!-- About Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="img/about-1.jpg"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="img/about-2.jpg"
                    style="margin-top: 25%"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="img/about-3.jpg"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="img/about-4.jpg"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                Tentang Kami
              </h5>
              <h1 class="mb-4">
                Welcome to
                <i class="fa fa-utensils text-primary me-2"></i>Titik Makan
              </h1>
              <p class="mb-4">
                Titik Makan merupakan tempat makan yang menjual berbagai varian
                Makanan kekinian yang unik dan memiliki standar rasa yang diatas
                rata rata
              </p>
              <p class="mb-4">
                Setiap menu yang kami hadirkan merupakan inovasi yang selalu
                berkembang untuk memanjakan serta memenuhi keinginan konsumen
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      3
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Years of</p>
                      <h6 class="text-uppercase mb-0">Experience</h6>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      5
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Rasa</p>
                      <h6 class="text-uppercase mb-0">Bintang 5</h6>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- About End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-4 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Company
              </h4>
              <a class="btn btn-link" href="">Tentang Kami</a>
              <a class="btn btn-link" href="">Hubungi kami</a>
              <a class="btn btn-link" href="">Reservation</a>
              <a class="btn btn-link" href="">Info Kemitraan</a>
            </div>
            <div class="col-lg-4 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contact
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Jl. A. Yani No.212c,
                Mendungan, Pabelan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa
                Tengah 57161
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+6285880465758
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>monomine.mammie@gmail.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-instagram"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Opening
              </h4>
              <h5 class="text-light fw-normal">Monday - Saturday</h5>
              <p>12 AM - 20 PM</p>
            </div>
            <div class="col-lg-4 col-md-6">
              <div
                class="position-relative mx-auto"
                style="max-width: 400px"
              ></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Titik Makan</a>, All
                Right Reserved.

                <a class="border-bottom" href="index.php"
                  >TitikMakan</a
                ><br /><br />
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
