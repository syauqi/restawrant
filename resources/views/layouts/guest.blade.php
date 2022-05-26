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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
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
                        <a class="btn btn-outline-success" href="{{ route('reservations.step.one') }}"> Buat
                            Reservasi</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ------------------------ Double Header Section ------------------------ -->

    <nav class="py-1 bg-light border-bottom d-none d-sm-none d-md-none d-lg-block">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark px-2 active" aria-current="page">Beranda</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark px-2">Tentang Kami</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark px-2">Kategori</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark px-2">Menu</a>
                </li>
                <li class="nav-item me-2">
                    <a href="#" class="nav-link link-dark px-2">Galeri Outlet</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link link-dark px-2">Nomor Telepon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark px-2">|</a>
                </li>
                <li class="nav-item">
                    <a href="https://scientistrebellion.com/donate/" class="nav-link link-dark px-2" target="_blank">
                        +6285156162840</a>
                </li>
                <li class="nav-item">
                    <a href="https://climateadproject.org/donate/" target="_blank"
                        class="nav-link link-dark px-2">+6285156162841</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="py-3 mb-4 border-bottom d-none d-sm-none d-md-none d-lg-block bg-white">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-3 fw-bold">🍣 Restawrant</span>
            </a>
            <button class="btn btn-outline-warning me-2 px-5"
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
        {{ $slot }}
    </main>

    <!-- --------------------------- Footer Section ---------------------------- -->

    <footer class="py-5">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 border-end">
                    <h4 class="fw-bold">🍣 Restawrant — Harga kaki lima rasa bintang lima!</h4>
                    <p class="text-white">
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

</body>

</html>
