<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Restawrant — Harga Kaki Lima Rasa Kaki Lima!</title>

    <meta name="title" content="Restawrant — Harga Kaki Lima Rasa Kaki Lima!">
    <meta name="description" content="  Restawrant adalah restoran yang menyediakan berbagai macam kategori makanan mulai dari minuman,
                        dessert dan lain lain dengan harga kaki lima namun rasanya bintang lima. Outlet kita selalu
                        rame, jadi jangan lupa reservasi ya!">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/4d516d4246.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
</head>

<body>

    <!-- ------------------------ Mobile Header Section ------------------------ -->

    <nav class="navbar navbar-light bg-white d-block d-sm-block d-md-block d-lg-none py-3 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">🍣 Restawrant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">
                        🍣 Restawrant
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="margin-top: -24px">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <hr />
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri Outlet</a>
                        </li>
                    </ul>
                    <hr />
                    <div class="d-grid gap-2">
                        <a class="btn btn-warning text-white" href="{{ route('reservations.step.one') }}"> Buat
                            Reservasi</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ------------------------ Double Header Section ------------------------ -->

    <nav class="py-1 bg-white border-bottom d-none d-sm-none d-md-none d-lg-block text-grey">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark text-grey px-2 active" aria-current="page">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark text-grey px-2">Tentang Kami</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark text-grey px-2">Kategori</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark text-grey px-2">Menu</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark text-grey px-2">Galeri Outlet</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2">Nomor Telepon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2">|</a>
                </li>
                <li class="nav-item">
                    <a href="https://scientistrebellion.com/donate/" class="nav-link link-dark text-grey px-2"
                        target="_blank">
                        +6285156162840</a>
                </li>
                <li class="nav-item">
                    <a href="https://climateadproject.org/donate/" target="_blank"
                        class="nav-link link-dark text-grey px-2">+6285156162841</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="py-3 mb-4 border-bottom d-none d-sm-none d-md-none d-lg-block bg-white sticky-top">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-3 fw-bold">🍣 Restawrant</span>
            </a>
            <button class="btn btn-warning text-white me-2 px-5 fw-500"
                onclick="location.href='http://127.0.0.1:8000/reservation/step-one'" type="button">Buat
                Reservasi</button>
        </div>
    </header>

    <main>
        <section class="splide my-4" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ url('images/splide/hero-slide-1.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ url('images/splide/hero-slide-2.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ url('images/splide/hero-slide-3.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ url('images/splide/hero-slide-4.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </li>
                </ul>
            </div>
        </section>

        <section class="logo-list">
            <div class="container py-2">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/1.png') }}" class="img-fluid"
                                alt="Bluehost logo" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/2.png') }}" class="img-fluid"
                                alt="Hostgator logo" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/3.png') }}" class="img-fluid"
                                alt="Green Geeks logo" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/4.png') }}" class="img-fluid"
                                alt="WordPress logo" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/5.png') }}" class="img-fluid"
                                alt="DreamHost logo" /></a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#"><img src="{{ url('images/logo/6.png') }}" class="img-fluid"
                                alt="Hostinger logo" /></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-7 mb-4 mb-lg-0">
                        <img src="{{ url('images/landing-page/core-features.jpg') }}"
                            class="img-fluid shadow-images" />
                    </div>
                    <div
                        class="
                    col-12 col-md-12 col-lg-4
                    ms-auto
                    text-center text-md-start text-lg-start
                    my-auto
                  ">
                        <p class="mb-0 fw-bold text-warning">FITUR RESERVASI</p>
                        <h2 class="fw-bold">Gak usah ribet nanyain menu dan booking tempat!</h2>
                        <div class="row mt-4">
                            <div class="col-3 col-md-2 col-lg-3 mx-auto">
                                <div class="p-1 bg-warning rounded-logo">
                                    <img src="{{ url('images/landing-page/10-Buyer.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                                <h5 class="mb-1 fw-semibold">Isi Data Diri Kamu</h5>
                                <small>Nama, nomor telepon dan email yang bisa kami hubungi</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3 col-md-2 col-lg-3 mx-auto">
                                <div class="p-1 bg-warning rounded-logo">
                                    <img src="{{ url('images/landing-page/3-FL.png') }}" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                                <h5 class="mb-1 fw-semibold">Pilih Menu & Meja</h5>
                                <small>Pilih tempat meja dan tentukan tanggal serta jam juga menu nya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-margin">
            <div class="container">
                <div class="text-center">
                    <small class="text-orange text-uppercase">Kategori Makanan Yang Tersedia di Restawrant</small>
                    <h1 class="fw-bold">Kategori Makanan & Minuman</h1>
                    <p class="fw-500">Udah milih mau pesen apa?</p>
                </div>
                <div class="row g-3">
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/graphicDesign.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Animasi & Video</h5>
                                <p class="card-text">
                                    Pembuatan animasi termasuk editing video dan audio
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/bisnis.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Bisnis</h5>
                                <p class="card-text">
                                    Konsultasi strategi bisnis oleh para ahli bisnis di Indonesia
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/digitalMarketing.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Digital Marketing</h5>
                                <p class="card-text">
                                    Strategi pemasaran bisnis digital [Google Ads dan SEO]
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/gayaHidup.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Gaya Hidup</h5>
                                <p class="card-text">
                                    Jasa untuk memenuhi segala macam gaya hidup anda
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/musikAudio.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Musik & Audio</h5>
                                <p class="card-text">
                                    Jasa produksi musik dan editing audio untuk berbagai keperluan
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/programming.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Programming</h5>
                                <p class="card-text">
                                    Jasa pemrograman pembuatan website atau aplikasi
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/penulisanPenerjemahan.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Penulisan</h5>
                                <p class="card-text">
                                    Konten & Terjemahan dari berbagai bahasa
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-in-home bg-warning text-white text-center">
                            <div class="card-body">
                                <img src="images/graphicDesign.png" class="img-fluid mb-3" width="72" />
                                <h5 class="card-title">Graphic Design</h5>
                                <p class="card-text">
                                    Pembuatan desain untuk berbagai keperluan anda
                                </p>
                                <a href="#" class="btn btn-orange ">Cari Pekerja &nbsp;
                                    <small class="arrow-category-button">→</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-margin">
            <div class="container">
                <div class="row">
                    <div
                        class="
                    order-2 order-md-1
                    col-12 col-md-12 col-lg-4
                    me-auto
                    text-center text-md-start text-lg-start
                    my-auto
                  ">
                        <p class="mb-0">Antar ke seluruh Indonesia</p>
                        <h2 class="fw-bold">Cocok buat kalian generasi mageran rebahan</h2>
                        <div class="row mt-4">
                            <div class="col-3 col-md-2 col-lg-3 mx-auto">
                                <div class="p-1 bg-warning rounded-logo">
                                    <img src="{{ url('images/landing-page/car.png') }}" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                                <h5 class="mb-1">Pilih Menu</h5>
                                <small>Get your blood tests delivered at let home collect sample
                                    from the victory of the managments your blood tests.</small>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3 col-md-2 col-lg-3 mx-auto">
                                <div class="p-1 bg-warning rounded-logo">
                                    <img src="{{ url('images/landing-page/jadi.png') }}" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                                <h5 class="mb-1">Tungguin deh!</h5>
                                <small>Get your blood tests delivered at let home collect sample
                                    from the victory of the managments your blood tests.</small>
                            </div>
                        </div>
                    </div>
                    <div
                        class="
                    order-1 order-md-2
                    col-12 col-md-12 col-lg-7
                    mb-4
                    mt-lg-0
                    mb-lg-0
                    overlay-container
                  ">
                        <img src="{{ url('images/landing-page/video.png') }}"
                            class="img-fluid shadow-images img-video" />
                        <!-- The overlay area -->
                        <div class="container__overlay">
                            <!-- The player button -->
                            <a target="_blank" href="https://www.instagram.com/p/CGZsbfvH9lC/">
                                <i class="fas fa-play-circle text-white play-button"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-margin">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="swiper-container testimonial-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-in-home bg-warning text-white">
                                        <div class="card-body">
                                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                            <h5 class="card-title lh-lg fw-bold">
                                                Modern look & trending design
                                            </h5>
                                            <p class="card-text mb-4">
                                                Get working experience to work with this amazing team &
                                                in future want to work together for bright future
                                                projects and also make deposit to freelancer
                                            </p>
                                            <hr />
                                            <div class="row">
                                                <div class="col-2 col-md-2 my-auto">
                                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                        class="img-fluid rounded" />
                                                </div>
                                                <div class="col-10 col-md-10 my-auto">
                                                    <p class="mb-0 fw-bold">
                                                        Syauqizaidan Khairan Khalaf
                                                    </p>
                                                    <small>Tukang tidur, 18 tahun</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-in-home bg-warning text-white">
                                        <div class="card-body">
                                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                            <h5 class="card-title lh-lg fw-bold">
                                                Modern look & trending design
                                            </h5>
                                            <p class="card-text mb-4">
                                                Get working experience to work with this amazing team &
                                                in future want to work together for bright future
                                                projects and also make deposit to freelancer
                                            </p>
                                            <hr />
                                            <div class="row">
                                                <div class="col-2 col-md-2 my-auto">
                                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                        class="img-fluid rounded" />
                                                </div>
                                                <div class="col-10 col-md-10 my-auto">
                                                    <p class="mb-0 fw-bold">
                                                        Syauqizaidan Khairan Khalaf
                                                    </p>
                                                    <small>Tukang tidur, 18 tahun</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-in-home bg-warning text-white">
                                        <div class="card-body">
                                            <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                            <h5 class="card-title lh-lg fw-bold">
                                                Modern look & trending design
                                            </h5>
                                            <p class="card-text mb-4">
                                                Get working experience to work with this amazing team &
                                                in future want to work together for bright future
                                                projects and also make deposit to freelancer
                                            </p>
                                            <hr />
                                            <div class="row">
                                                <div class="col-2 col-md-2 my-auto">
                                                    <img src="https://www.sibberhuuske.nl/wp-content/uploads/2016/10/default-avatar.png"
                                                        class="img-fluid rounded" />
                                                </div>
                                                <div class="col-10 col-md-10 my-auto">
                                                    <p class="mb-0 fw-bold">
                                                        Syauqizaidan Khairan Khalaf
                                                    </p>
                                                    <small>Tukang tidur, 18 tahun</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="margin-bottom: 56px">
            <div class="container">
                <div class="row rounded mx-auto " style="background-color: #fcca29">
                    <div class="col-md-7 my-auto text-white px-5 py-5">
                        <h2 class="fw-bold text-white">Jangan lewatkan promo dari kami</h2>
                        <p>
                            Pastikan kalian follow instagram dan twitter kami untuk informasi terkait promo, event, menu
                            baru atau giveaway bagi kalian para restawvers di seluruh Indonesia!
                        </p>
                        <a href='https://discord.gg/gotterhavn' target="_blank"
                            class="btn btn-outline-light mt-2 px-4 py-2" style="font-weight:500;">Follow Instagram
                            ⇾</a>
                    </div>
                    <div class="col-md-4 background-cta ms-auto">
                    </div>
                </div>
            </div>
        </section>


        {{ $slot }}
    </main>

    <!-- --------------------------- Footer Section ---------------------------- -->

    <footer class="py-5">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 border-end">
                    <h4 class="fw-bold">🍣 Restawrant — Harga kaki lima rasa bintang lima!</h4>
                    <p class="">
                        Restawrant adalah restoran yang menyediakan berbagai macam kategori makanan mulai dari minuman,
                        dessert dan lain lain dengan harga kaki lima namun rasanya bintang lima. Outlet kita selalu
                        rame, jadi jangan lupa reservasi ya!
                    </p>
                    <small class="d-block mb-3">
                        &copy; 2022 Syauqizaidan — Made with laravel 9.4.1 and bootstrap 5.2.0
                    </small>
                </div>

                <div class="col-6 col-md ms-0 ms-md-4">
                    <h4 class="fw-bold mb-3">Navigasi Cepat</h4>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6901">
                                Beranda
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6905">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6904">
                                Kategori
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6902">
                                Menu
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6903">
                                Galeri Outlet
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h4 class="fw-bold mb-3">Sosial Media</h4>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="#">
                                <i class="fab fa-whatsapp"></i> &nbsp; Whatsapp
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none"
                                href="https://www.instagram.com/tokojob.official/" target="_blank">
                                <i class="fab fa-instagram"></i> &nbsp; Instagram
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="https://twitter.com/tokojob"
                                target="_blank">
                                <i class="fab fa-twitter"></i> &nbsp;Twitter
                            </a>
                        </li>
                        <li class="mb-5 mb-md-1">
                            <a class="link-light text-decoration-none" href="https://www.facebook.com/TokoJob/"
                                target="_blank">
                                <i class="fab fa-facebook-square"></i> &nbsp; Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                type: 'loop',
                padding: '80px',
                gap: '24px',
                autoplay: true,
                arrows: false,
                breakpoints: {
                    576: {
                        type: 'loop',
                        perPage: 1,
                        gap: '8px',
                        padding: '8px',
                    },
                }
            });
            splide.mount();
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".payment-swiper", {
            slidesPerView: 1,
            spaceBetween: 12,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 12,
                },
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".testimonial-swiper", {
            slidesPerView: 1,
            spaceBetween: 12,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2.2,
                    spaceBetween: 12,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
            },
        });
    </script>

</body>

</html>
