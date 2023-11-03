<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>TitikMakan</title>
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
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="reservasi.php" class="nav-item nav-link">Reservasi</a>
              <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
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
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h3 class="display-8 text-white animated slideInLeft">Selamat Datang 
                  <?php if(!isset($_SESSION["guest"])){
                    echo("Guest");
                  }
                          else{
                        echo($_SESSION['guest']);
                          }
                        ?> </h3>
                <h1 class="display-3 text-white animated slideInLeft">
                  Solusi<br /> Untuk Makan
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                  Kami menciptakan dan menghidangkan Makanan enak yang autentik dan memiliki cita rasa yang khas dan unik
                </p>
                <a
                  href=""
                  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                  >Hubungi kami</a
                >
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/nasgor.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Service Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-receipt text-primary mb-4"></i>
                  <h5>Resep Autentik</h5>
                  <p>
                    Kami menciptakan komposisi serta formula racikan resep nasi goreng terbaik dan berkualitas
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                  <h5>Kualitas Makanan Terjamin</h5>
                  <p>
                    Makanan kami memiliki mutu dan rasa yang terjamin kualitasnya
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                  <h5>Mudah dipesan</h5>
                  <p>
                    Makanan kami dapat dipesan dengan mudah melalui platform delivery order kesayangan anda
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="service-item rounded pt-3">
                <div class="p-4">
                  <i class="fa fa-3x fa-money-bill text-primary mb-4"></i>
                  <h5>Modal terjangkau</h5>
                  <p>
                    Kami menawarkan paket kemitraan yang dapat disesuaikan dengan budget anda
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Service End -->

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
                Titik Makan merupakan tempat makan yang menjual berbagai varian Makanan kekinian yang unik dan memiliki standar rasa yang diatas rata rata 
              </p>
              <p class="mb-4">
                Setiap menu yang kami hadirkan merupakan inovasi yang selalu berkembang untuk memanjakan serta memenuhi keinginan konsumen 
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

      <!-- Menu Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
          </div>
          <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
            >
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                >
                  <i class="fa fa-bowl-rice fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Titik</small>
                    <h6 class="mt-n1 mb-0">Makan</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                  <i class="fa fa-bowl-food fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Titik</small>
                    <h6 class="mt-n1 mb-0">Mie & Pasta</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-mug-hot fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Titik</small>
                    <h6 class="mt-n1 mb-0">Minum</h6>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Goreng Katsu.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasgor Katsu</span>
                          <span class="text-primary">22K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Goreng Oriental.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasgor Orieantal</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Katsu Geprek.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasi Katsu Geprek</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Ayam Mercon.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasi Ayam Mercon</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Katsu Sambal Matah.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasi Katsu Matah</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Nasi Kulit Cabe Garam.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Nasi Kulit Cabe Garam</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Ricebowl Chicken Teriyaki.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Chicken Teriyaki</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Ricebowl Spicy Chicken Karage.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Spicy Karage</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Spagetti Aglio Olio Chicken.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Spagetti Aglio Olio Chicken</span>
                          <span class="text-primary">15K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Spagetti Bolognese.png"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Spagetti Bolognese</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Spagetti Brulle.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Spagetti Brulle</span>
                          <span class="text-primary">$115</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Spagetti Carbonara.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Spagetti Carbonara</span>
                          <span class="text-primary">20K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Indomie Polos.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Indomie Polos</span>
                          <span class="text-primary">10K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Indomie Telur.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Indomie Telur</span>
                          <span class="text-primary">15K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Indomie Telur Bakso.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Indomie Telur Bakso</span>
                          <span class="text-primary">17K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Indomie Ayam Mercon.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Indomie Ayam Mercon</span>
                          <span class="text-primary">17K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Orange Mojito.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Mojito</span>
                          <span class="text-primary">20K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Strawberry Tea.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Semilir Tea</span>
                          <span class="text-primary">15K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kopi Susu Gula Aren.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Cofee</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Boba Brown Sugar.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Boba</span>
                          <span class="text-primary">15K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Holyshake Milo.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Holyshake</span>
                          <span class="text-primary">25K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Choco Hazelnut.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Choco Series</span>
                          <span class="text-primary">15K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Strawberry Mojito.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Jus</span>
                          <span class="text-primary">17K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Strawberry Yakult.jpg"
                        alt=""
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Yakultgazm</span>
                          <span class="text-primary">18K</span>
                        </h5>
                        <small class="fst-italic"
                          >Ipsum ipsum clita erat amet dolor justo diam</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->

      <!-- Reservation Start -->
      <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="video">
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/embed/3q9fmcVSGL4"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
            </div>
          </div>
          <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                Online Service
              </h5>
              <h1 class="text-white mb-4">Bisa di pesan di</h1>
              <div class="service_section_2">
                     <div class="row">
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="img/gofood.png"></div>
                           </div>
                           <h4 class="breakfast_text">GoFood</h4>
                           <div class="seemore_bt"><a href="https://gofood.link/a/zVfNGuy">Order Now</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="img/grabfood.png"></div>
                           </div>
                           <h4 class="breakfast_text">GrabFood</h4>
                           <div class="seemore_bt"><a href="https://food.grab.com/id/id/restaurant/titik-makan-pabelan-delivery/6-CZKZBBAXT7MFE6?fbclid=PAAaZb4zYU2kiPt7lux1P0X5tMCG9S9hSezB1qba8IQJDDniCnzmzBTV4P6b8">Order Now</a></div>
                        </div>
                        <div class="col">
                           <div class="service_box">
                              <div class="breakfast_img"><img src="img/shopee.png"></div>
                           </div>
                           <h4 class="breakfast_text">ShopeeFood</h4>
                           <div class="seemore_bt"><a href="https://shopee.co.id/universal-link/now-food/shop/835259">Order Now</a></div>
                        </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="videoModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content rounded-0">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <!-- 16:9 aspect ratio -->
              <div class="ratio ratio-16x9">
                <iframe
                  class="embed-responsive-item"
                  src=""
                  id="video"
                  allowfullscreen
                  allowscriptaccess="always"
                  allow="autoplay"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Reservation Start -->

      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="text-center">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Testimonial
            </h5>
            <h1 class="mb-5">Apa kata mereka!!!</h1>
          </div>
          <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-8bf460d7-8656-4492-8d27-09213daee823"></div>
      <!-- Testimonial End -->

      <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Hubungi Kami</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                                <p>monomine.mammie@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Whatsapp</h5>
                                <p></i>+6285880465758</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Instagram</h5>
                                <p>Titik makan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.159663551264!2d110.77479157480187!3d-7.557563774628389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15c8ed2418e1%3A0x22f9e73fe49cac02!2sTitik%20Makan%20by%20Minomine!5e0!3m2!1sen!2sid!4v1683877775034!5m2!1sen!2sid"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
