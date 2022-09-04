<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral Technology | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="shortcut icon" href="img/integral-putih.png">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo-integral.png" alt="" width="100" height="65">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('#home') ? 'active' : '' }}" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('#about') ? 'active' : '' }}" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('#integral') ? 'active' : '' }}" href="#integral">Integral</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('#contact') ? 'active' : '' }}" href="#contact">Kontak</a>
                    </li>

                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-warning text-dark" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/dashboard"><i class="bi bi-house-fill"></i>
                                     Dashboard</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="get">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                         Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($active === "login") ? 'active' : '' }} btn btn-dark btn-login text-primary" href="/login"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- TUTUP NAVBAR -->

    <!-- HOME -->
    <section id="home" class="bg-primary hero-area section-padding">
        <div class="container py-5">
            <div class="row py-3 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <img src="/img/home.png" alt="" width="75%" height="100%" class="logo-home">
                </div>
                <div class="col-lg-5 hero-text">
                    <h1 class="head-title text-light fw-bold mb-5">Integral Technology</h2>
                        <p class="text-light fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et ex hic
                            aperiam asperiores maiores dolore eveniet eligendi in reiciendis unde consequatur est
                            officiis, ipsa odit qui cumque necessitatibus laboriosam iste.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="waves">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,160L80,144C160,128,320,96,480,101.3C640,107,800,149,960,170.7C1120,192,1280,192,1360,192L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </div>

    <!-- TUTUP HOME -->

    <!-- ABOUT -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <h1 class="head-tittle text-dark mb-4 fw-bold">Apa itu Integral Technology?</h1>
                    <p class="fs-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi at
                        dolorum, laboriosam aliquid, perspiciatis in tempora quis nulla architecto eveniet doloribus
                        corporis incidunt vitae? Soluta, animi provident officia pariatur sequi illo error accusantium
                        hic magnam ipsa sit, id doloremque? Vero, omnis possimus tenetur laborum ratione dicta explicabo
                        aspernatur consequuntur eaque.</p>
                </div>
                <div class="col-lg-5 ">
                    <img src="/img/about.png" alt="" width="100%" height="100%" class="logo-about m-img">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,128L80,122.7C160,117,320,107,480,122.7C640,139,800,181,960,181.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- TUTUP ABOUT -->

    <!-- INTEGRAL -->
    <section id="integral" class="bg-primary section-padding">
        <h1 class="fw-bold text-light text-center mb-5">Layanan Integral</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="shadow card h-100 text-center p-3">
                        <img src="/img/cc.png" class="card-img-top" alt="..." style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title fs-5"><span style="color: #18a3b8;">Integral</span> E-Service</h5>
                            <p class="card-text fw-light">Memproses layanan administrasi penyelenggaraan pelatihan mulai
                                dari registrasi sampai dangan sertifikasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="shadow card h-100 text-center p-3">
                        <img src="/img/ee.png" class="card-img-top" alt="..." style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title"><span style="color: #18a3b8;">Integral</span> Publikasi</h5>
                            <p class="card-text fw-light">Mempublikasikan informasi terkait kegiatan BPSDM, serta
                                infomasi lainnya yang berhubungan dengan pengembangan SDM skala Nasional dan
                                Internasional secara elektronik dan media cetak.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="shadow card h-100 text-center p-3">
                        <img src="/img/bb.png" class="card-img-top" alt="..." style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title"><span style="color: #18a3b8;">Integral</span> Big Data</h5>
                            <p class="card-text fw-light">Menghimpun data keseluruhan aktifitas yang ada di BPSDM.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="shadow card h-100 text-center p-3">
                        <img src="/img/aa.png" class="card-img-top" alt="..." style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title"><span style="color: #18a3b8;">Integral</span> Aplikasi</h5>
                            <p class="card-text fw-light">Mengelola, memfasilitasi dan menerapkan aplikasi-aplikasi
                                untuk mendukung proses learning secara mudah, lancar dan tersampaikan dengan baik.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="shadow card h-100 text-center p-3">
                        <img src="/img/dd.png" class="card-img-top" alt="..." style="display:block; margin:auto;">
                        <div class="card-body">
                            <h5 class="card-title"><span style="color: #18a3b8;">Integral</span> Multimedia</h5>
                            <p class="card-text fw-light">Mendokumentasian setiap kegiatan BPSDM, E - Sertifikat,
                                pembuatan video bahan ajar Widyaiswara, serta pembuatan konten publikasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1"
            d="M0,32L80,74.7C160,117,320,203,480,202.7C640,203,800,117,960,101.3C1120,85,1280,139,1360,165.3L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    <!-- TUTUP ITEGRAL

    <-- CONTACT -->
    <section id="contact" class="section-padding">
        <div class="container text-center">
            <h1 class="head-tittle pb-5 fw-bold">Kontak</h1>
            <div class="row">
                <div class="col-lg-4">
                    <i class="fa-solid fa-location-dot size-icon"></i>
                    <p class="fs-5 fw-bold text-primary">Address</p>
                    <p>
                        Jl. Kolonel Masturi No.11, KM 3,5 <br>
                        Cipageran, Cimahi Utara, <br>
                        Kota Cimahi, Jawa Barat <br>
                        40511
                    </p>
                </div>

                <div class="col-lg-4">
                    <i class="fa-solid fa-phone size-icon"></i>
                    <br>
                    <p class="fs-5 fw-bold text-primary">Phone</p>
                    <p>+62 813-8283-0814</p>
                </div>

                <div class="col-lg-4">
                    <i class="fa-solid fa-envelope size-icon"></i>
                    <br>
                    <p class="fs-5 fw-bold text-primary">Email</p>
                    <p>simpanakuaja@gmail.com</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7922.727224400757!2d107.532326!3d-6.846941!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf270b66e61664fe0!2sBpsdm%20Jabar!5e0!3m2!1sid!2sid!4v1660794248251!5m2!1sid!2sid"
                        width="90%" height="95%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-12">
                    <img src="/img/location.svg" width="70%" height="90%" class="logo-about">
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP CONTACT -->

    <!-- FOOTER -->
    <footer class="text-center bg-primary p-4 mt-5">
        <span class="text-white fw-bold">&copy TIM UNPAS, 2022.</span>
    </footer>
    <!-- AKHIR FOOTER -->


    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/848026e0b0.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            // Add scrollspy to <body>
            $('body').scrollspy({
                target: ".navbar",
                offset: 50
            });

            // Add smooth scrolling on all links inside the navbar
            $("#myNavbar a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

    </script>
    <!-- TUTUP SCRIPT -->
</body>

</html>
