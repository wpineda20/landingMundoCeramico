<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mundo Céramico</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/btnScrollToTop.js') }}" defer></script>
    <script src="{{ mix('js/scrollreveal.min.js') }}" defer></script>
    <script src="{{ mix('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ ('img/layout-wtf.svg') }}">
</head>

<body>
    <div id="app">
        <div class="banner header">
            <nav class="navbar navbar-expand-md navbar-light bg-header" style="z-index: 1000">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="logos/logo_blanco_rombo_rojo.png" alt="logo mundo ceramico" class="logo-bran-size"
                            width="170" height="70">
                    </a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        {{-- <span class="navbar-toggler-icon"></span> --}}
                        <i class="bi bi-grid-fill text-white fs-1"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#news">Novedades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#services">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#categories">Categorías</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#contact">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="header-items">
                    {{-- <div class="header-icons">
                        <a href="https://www.instagram.com/naturalstonessv/" target="_blank">
                            <img src="/img/instagram.svg" class="h-icon" alt="header-icons">
                        </a>
                        <a href="https://www.facebook.com/naturalstones.es" target="_blank">
                            <img src="/img/facebook.svg" class="h-icon" alt="header-icons">
                        </a>
                    </div> --}}
                    <div class="header-text">
                        <h1 class="h-title">MUNDO CÉRAMICO</h1>
                        <p class="h-subtitle">Líderes en pisos en El Salvador, <br> con más de 30 años de experiencia.
                        </p>
                    </div>
                    <div class="header-image">
                        <img src="img/cabinet.jpg" alt="header-img" class="header-img">
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Main -->
        <main class="main">

            <!-- Start Scroll To Top Button -->
            <button class="btnScrollToTop" onclick="scrollToTop();">
                <i class="bi bi-arrow-up"></i>
            </button>
            <!-- Scroll To Top Button End -->

            <!-- Start WhatsApp Button -->
            {{-- <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=50372842854" target="_blank"
                title='Escribemos a nuestro WhatsApp!'>
                <i class="bi bi-whatsapp"></i>
            </a> --}}
            <!-- WhatsApp Button End -->

            <!-- Start Summer Sale Section -->
            <section class="summer-sale-section">
                <div class="summer-sale container">
                    <h1 class="summer-sale-title" id="news">
                        NOVEDADES
                    </h1>
                    <p class="summer-sale-subtitle">
                        15 % de descuento válido 20 y 26 de Enero. <br>
                        Encuentra el material ideal para tus proyectos.
                    </p>
                </div>
                <div class="container summer-reveal pb-5">
                    <div class="row row-cols-1 row-cols-md-3 g-2 pt-4">
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/sink.jpg" class="card-img-top zoom" alt="sink">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/kitchen.jpg" class="card-img-top zoom" alt="kitchen">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="img/sink.jpg" class="card-img-top zoom" alt="sink">
                                <div class="card-body">
                                    <p class="card-text-bold">Praesent dictum amet <br>
                                        <span class="card-text-regular">est lacus accumsan vel lacus ac.</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container shop-banner">
                    <div class="shop-banner-item">
                        <p class="text-white fs-1 fw-bold">Dictum Amet Praesent Lacus,<span class="fw-normal"> Est Lsac
                                Loremtes</span>
                        </p>

                        <p class="shop-banner-p">Officiis tenetur delectus nisi ipsum, nesciunt
                            tempore provident?</p>
                    </div>
                    <div class="shop-banner-item">
                        <a href="#" target="_blank" class="btn-shop">TIENDA</a>
                    </div>
                </div>
            </section>
            <!-- Summer Sale Section End -->

            <!-- Start Services section -->
            <section class="services-section">
                <div class="container">
                    <h1 class="services-title text-center" id="services">
                        SERVICIOS
                    </h1>
                </div>
                <div class="container service-reveal">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card-services zoom" style="width: 18rem;">
                                <div class="card-services-content">
                                    <div class="card-services-icon">
                                        <img src="/img/truck.svg"
                                            style="filter: invert(11%) sepia(89%) saturate(5082%) hue-rotate(348deg) brightness(95%) contrast(122%);"
                                            class="icon-services" alt="icon-services">
                                    </div>
                                    <div class="card-services-info">
                                        <p class="mb-0">Lorem ipsum dolor stuiet tea sit amet, </p><span
                                            class="text-primary-red">consectetur adipisicing elit.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-services zoom" style="width: 18rem;">
                                <div class="card-services-content">
                                    <div class="card-services-icon">
                                        <img src="/img/currency-dollar.svg"
                                            style="filter: invert(11%) sepia(89%) saturate(5082%) hue-rotate(348deg) brightness(95%) contrast(122%);"
                                            class="icon-services" alt="icon-services">
                                    </div>
                                    <div class="card-services-info">
                                        <p class="mb-0"><span class="text-primary-red">Laborum quos,</span> molestias
                                            iste suscipit soluta <span class="text-primary-red">fugiat</span> in dolorum
                                            reprehenderit <span class="text-primary-red">voluptatum error?</span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-services zoom" style="width: 18rem;">
                                <div class="card-services-content">
                                    <div class="card-services-icon">
                                        <img src="/img/check-circle.svg"
                                            style="filter: invert(11%) sepia(89%) saturate(5082%) hue-rotate(348deg) brightness(95%) contrast(122%);"
                                            class="icon-services" alt="icon-services">
                                    </div>

                                    <div class="card-services-info">
                                        <p class="mb-0">Quia architecto <span class="text-primary-red">qui
                                                dignissimos</span> , consequatur quod facilis
                                            veritatis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services section End -->


            <!-- Start Recommendations Section -->
            {{-- <section class="recommendations">
                <div class="container">
                    <h1 class="recommendations-title">
                        CATEGORÍAS
                    </h1>
                </div>
                <div class="container recommendations-reveal">
                    <div class="row row-cols-1 row-cols-md-3 g-5 pb-5">
                        <div class="col mx-auto">
                            <div class="card-rem h-100">
                                <img src="img/marmol-crema-marfil.jpg" class="card-img-top-rem img-fluid"
                                    alt="marmol-cream-marfil">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Marmol Crema Marfil</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/cart.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/stopwatch.svg" class="icon-card-rem" alt="Card-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-rem h-100">
                                <img src="img/cuarzo-negro-diamante.jpg" class="card-img-top-rem img-fluid"
                                    alt="cuarzo-negro-diamente">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Cuarzo Negro Diamante</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/stopwatch.svg" class="icon-card-rem" alt="Card-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-rem h-100">
                                <img src="img/travertino-andes-gold-brillado.jpg" class="card-img-top-rem img-fluid"
                                    alt="travertino-andes-gold">
                                <div class="card-body">
                                    <p class="card-text-bold-rem">Travertino Andes Gold</p>
                                    <p class="card-text-regular-rem">Lorem ipsum dolor sit amet,
                                        consec adipiscing elit.</p>
                                    <div class="card-items-rem">
                                        <a href="#" class="btn-card-rem">Recomendación: </a>
                                        <img src="/img/tree.svg" class="icon-card-rem" alt="Card-img">
                                        <img src="/img/cart.svg" class="icon-card-rem" alt="Card-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- Recommendations Section End -->


            <!-- Start Slider Section -->
            <section class="carousels">
                <div class="container">
                    <h1 class="recommendations-title">
                        CATEGORÍAS
                    </h1>
                </div>
                <div class="row pb-5">
                    <!-- Slider One -->
                    <div class="col-md-4 no-padding-slider">
                        <div class="slider-header">
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-indicators">

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                                    <img src="/img/chevron-left.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>

                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <img src="/img/chevron-right.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/cuarzo-diamond-red.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-blanco-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-amarillo-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>


                        </div>
                        <div class="slider-data">
                            <p class="slider-text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                            <div class="slider-item">
                                <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                                <p class="slider-item-text">Sit amet elit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Two -->
                    <div class="col-md-4 no-padding-slider">
                        <div class="slider-header">
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div id="carouselExampleIndicatorsTwo" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="prev">
                                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                                    <img src="/img/chevron-left.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button type="button" data-bs-target="#carouselExampleIndicatorsTwo"
                                    data-bs-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicatorsTwo"
                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicatorsTwo"
                                    data-bs-slide-to="2" aria-label="Slide 3"></button>

                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicatorsTwo" data-bs-slide="next">
                                    <img src="/img/chevron-right.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/cuarzo-blanco-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-diamond-red.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-amarillo-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>


                        </div>
                        <div class="slider-data">
                            <p class="slider-text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                            <div class="slider-item">
                                <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                                <p class="slider-item-text">Sit amet elit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Three -->
                    <div class="col-md-4 no-padding-slider">
                        <div class="slider-header">
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div id="carouselExampleIndicatorsThree" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide="prev">
                                    {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
                                    <img src="/img/chevron-left.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button type="button" data-bs-target="#carouselExampleIndicatorsThree"
                                    data-bs-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicatorsThree"
                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicatorsThree"
                                    data-bs-slide-to="2" aria-label="Slide 3"></button>

                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicatorsThree" data-bs-slide="next">
                                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                                    <img src="/img/chevron-right.svg" class="slider-chevron" alt="slider-chevron"
                                        aria-hidden="true">
                                    <span class="visually-hidden">Next</span>
                                </button>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/cuarzo-amarillo-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-blanco-diamante.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/cuarzo-diamond-red.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>


                        </div>
                        <div class="slider-data">
                            <p class="slider-text-regular">Lorem ipsum dolor sit amet, <br> consectetur adipiscing
                                elit.</p>
                            <div class="slider-item">
                                <img src="/img/arrows-fullscreen.svg" class="icon-services" alt="icon-services">
                                <p class="slider-item-text">Sit amet elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Slider Section End -->

        </main>
        <!-- Main End -->

        <!-- Start Footer -->
        <footer class="footer bg-footer">
            <div class="container">
                <div class=" pt-5 pb-5 ">
                    <div class="footer-items">
                        <div class="footer-content">
                            <p class="text-bold-footer">Autopista Sur, Reparto Los Héroes, Boulevard Los Próceres Nº1-A.
                                <br>
                                San Salvador, El Salvador
                            </p>
                            <p class="text-regular-footer">+ 503 2254 5999</p>
                            <p class="text-regular-footer">servicioalcliente@mundo-ceramico.com</p>
                        </div>
                        <div class="footer-content">
                            <p class="text-regular-footer">Facebook</p>
                            <p class="text-regular-footer mb-5">Instragram</p>
                            <p class="text-regular-footer">&copy; 2022 Mundo Céramico. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {{--
        <example-component /> --}}
        <!-- Footer End -->

    </div>
</body>

</html>