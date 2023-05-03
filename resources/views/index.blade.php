<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mundo Cerámico</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ ('img/layout-wtf.svg') }}">
</head>

<body>
    <!-- App -->
    <div id="app">
        <!-- Header -->
        <div class="banner header">
            <!-- Header Navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-header" style="z-index: 1000">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        {{-- <ul class="navbar-nav me-auto">

                        </ul> --}}

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
                            {{-- <li class="nav-item">
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    <img src="logos/logo_blanco_rombo_rojo.png" style="opacity: 1" class=""
                                        alt="logo mundo ceramico" class="" width="75" height="35">
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#categories">Categorías</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#about">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#services">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-titles" href="#contact">Contacto</a>
                            </li>
                        </ul>
                        <!-- /.Right Side Of Navbar -->
                    </div>
                </div>
            </nav>
            <!-- /.Header Navbar -->

            <!-- Header Content -->
            <div class="container">
                <div class="header-items">
                    <!-- Header Titles -->
                    <div class="header-text">
                        <h1 class="h-title"><span class="text-primary-red">MUNDO</span> CERÁMICO</h1>
                        <h2 class="h-subtitle">Lorem ipsum dolor sit amet elit. <br> sit amet
                            consectetur adipisicing consectetur.
                        </h2>
                        <div class="d-flex">
                            <a href="#categories" class="btn-header mx-auto">Explorar Más <i
                                    class="bi bi-chevron-right fs-5"></i></a>
                        </div>
                    </div>
                    <!-- /.Header Titles -->
                </div>
                <div class="header-logo">
                    <a class="" href="{{ url('/') }}">
                        <img src="logos/logo_azul_negro_rombo_rojo.png" style="opacity: 1" class=""
                            alt="logo mundo ceramico" class="" width="190" height="100">
                    </a>
                </div>
            </div>
            <!-- /.Header Content -->
        </div>
        <!-- /.Header -->

        <!-- Main -->
        <main class="main">
            <!-- Blocks Section -->
            <section class="blocks-section" id="categories">
                <!-- Module -->
                <div class="module-content-d">
                    <h2 class="module-title">Piso</h2>
                    <p class="module-text text-white mb-1">
                        Lorem ipsum amet consectetur elit <br> amet adipisicing
                    </p>
                </div>
                <!-- /.Module -->

                <!-- Module -->
                <div class="module-content-b">
                    <h2 class="module-title text-primary-blue">Madera</h2>
                    <p class="module-text text-primary-blue mb-1">
                        Lorem ipsum dolor sit, onsectetur adipisicing elit <br>
                        onsectetur adipisicing elit
                    </p>
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-c">
                    <h2 class="module-title text-primary-blue">Porcelanato</h2>
                    <p class="module-text mb-0">
                        Consectetur adipisicing elit
                    </p>
                    {{-- <p class="text-muted mb-0" style="font-size: 24px">amet consectetur adipisicing elit</p> --}}
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-a">
                    <h2 class="module-title">Azulejo</h2>
                    <p class="module-text">
                        Lorem ipsum dolor sit <br>amet consectetur adipisicing elit
                    </p>
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-e">
                    <h2 class="module-title">Mosaico</h2>
                    <p class="module-text">
                        Lorem ipsum dolor sit <br>amet consectetur adipisicing elit
                    </p>
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-f">
                    <h2 class="module-title">Granito</h2>
                    <p class="module-text mb-0">
                        Lorem ipsum dolor sit
                    </p>
                    {{-- <p class="text-black" style="font-size: 24px">amet consectetur adipisicing elit</p> --}}
                </div>
                <!-- /.Module -->
            </section>
            <!-- /.Blocks Section -->

            <!-- Sale Banner -->
            <div class="shop-banner">
                <div class="shop-banner-item">
                    <p class="shop-banner-title">Dictum Amet Praesent Lacus,<span class="fw-normal"> Est Lsac
                            Loremtes</span>
                    </p>

                    <p class="shop-banner-subtitle">Officiis tenetur delectus nisi ipsum, nesciunt
                        tempore provident?</p>
                    <a href="#" target="_blank" class="btn-shop">TIENDA</a>
                </div>
            </div>
            <!-- /.Sale Banner -->

            <!-- About section -->
            <section class="about-section" id="about">
                <!-- About Titles -->
                <div class="about-content">
                    <div class="about-img">
                        <img src="/img/img-hero.png" class="about-image" alt="servicios mundo ceramico">
                    </div>
                    <div class="about-text">
                        <h3 class="about-title">ACERCA DE NOSOTROS</h3>
                        <h1 class="about-subtitle">
                            Ut Provide Act <br>
                            Nunc Elit Phasellus
                        </h1>
                        <p class="about-p mb-0">
                            Lorem ipsum convallis enim nulla, ac euismod nunc<br>
                            Ut commodo suscipit elit ac pulvinar.
                            Lorem ipsum convallis enim nulla, <br>
                            ac euismod nunc ullamcorper
                            Ut commodo suscipit elit ac pulvinar.
                        </p>
                    </div>
                </div>
                <!-- /.About Titles -->
            </section>
            <!-- /.About section -->

            <!-- Services section -->
            <section class="services-section" id="services">
                <!-- Services Titles -->
                <div class="services-content">
                    <div class="services-text">
                        <h3 class="services-title">SERVICIOS</h3>
                        <h1 class="services-subtitle">
                            Ut Provide Act <br>
                            Nunc Elit Phasellus
                        </h1>
                        <p class="services-p mb-0">
                            Lorem ipsum convallis enim nulla, ac euismod nunc<br>
                            Ut commodo suscipit elit ac pulvinar.
                            Lorem ipsum convallis enim nulla, <br>
                            ac euismod nunc ullamcorper
                            Ut commodo suscipit elit ac pulvinar.
                        </p>
                    </div>
                    <div class="services-img">
                        <img src="/test/img-6.jpg" class="services-image" alt="servicios mundo ceramico">
                    </div>
                </div>
                <!-- /.Services Titles -->
            </section>
            <!-- /.Services section -->

            <!-- Contact Us Section -->
            <!-- Services Cards -->
            <div class="contact-section" id="contact">
                <div class="service-reveal">
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        <div class="col mt-1">
                            <div class="card-contact zoom" style="width: 18rem;">
                                <div class="card-contact-content">
                                    <div class="card-contact-icon">
                                        <img src="/logos/map-marker-alt-solid.svg"
                                            style="filter: invert(5%) sepia(31%) saturate(6815%) hue-rotate(209deg) brightness(90%) contrast(104%);"
                                            class="icon-contact" alt="icon-contact">
                                    </div>
                                    <div class="card-contact-info">
                                        <h4 class="card-contact-subtitle">Ubicación</h4>
                                        <p class=" text-center">Mundo Cerámico, Boulevar los proceres, 1-A, San
                                            Salvador</p>
                                        <div class="text-center">
                                            <a href="https://ul.waze.com/ul?ll=13.68323591%2C-89.22569990&navigate=yes&zoom=17&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location"
                                                target="_blank" class="btn-waze">WAZE <img
                                                    src="logos/icon-waze-download.png" alt="waze button"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-1">
                            <div class="card-contact zoom" style="width: 18rem;">
                                <div class="card-contact-content">
                                    <div class="card-contact-icon">
                                        <img src="/logos/paper-plane-regular.svg"
                                            style="filter: invert(5%) sepia(31%) saturate(6815%) hue-rotate(209deg) brightness(90%) contrast(104%);"
                                            class="icon-contact" alt="icon-contact">
                                    </div>
                                    <div class="card-contact-info">
                                        <h4 class="card-contact-subtitle">Contáctanos</h4>
                                        <p class="text-center mb-0">mundoceramico@yahoo.com</p>
                                        <p class="text-center mb-0">+503 2254 5999</p>
                                        <p class="text-center mb-0">+503 7700 1782</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-1">
                            <div class="card-contact zoom" style="width: 18rem;">
                                <div class="card-contact-content">
                                    <div class="card-contact-icon">
                                        <img src="/logos/calendar-alt-regular.svg"
                                            style="filter: invert(5%) sepia(31%) saturate(6815%) hue-rotate(209deg) brightness(90%) contrast(104%);"
                                            class="icon-contact" alt="icon-contact">
                                    </div>

                                    <div class="card-contact-info">
                                        <h4 class="card-contact-subtitle">Horarios</h4>
                                        <p class="text-center mb-2"> 8:00 am - 6:00 pm <br>
                                            Lunes - Viernes
                                        </p>
                                        <p class="text-center mb-0"> 8:00 am - 2:00 pm <br>
                                            Sabado
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- /.Main -->

        <!-- Footer -->
        <footer class="footer bg-footer">
            <div class="container">
                <div class="footer-items">
                    <div class="footer-content">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="logos/logo_blanco_rombo_rojo.png" class="mb-2" alt="logo mundo ceramico" class=""
                                width="180" height="80">
                        </a>
                    </div>
                    <div class="footer-content">
                        <p class="text-regular-footer mb-0">&copy; @php $currentYear = date('Y') @endphp
                            {{$currentYear}} Mundo
                            Cerámico.
                            Todos los derechos reservados.
                        </p>
                    </div>
                    <div class="footer-content">
                        <div class="footer-social-icons">
                            <span>
                                <a href="https://www.facebook.com/MundoCeramicoESA?locale=es_LA" target="_blank">
                                    <img src="logos/facebook-f.svg" alt="facebook munco ceramico" class="social-icon">
                                </a>
                            </span>
                            <span>
                                <a href="https://www.instagram.com/mundoceramicosv/?hl=es" target="_blank">
                                    <img src="logos/instagram.svg" alt="instagram mundo ceramico" class="social-icon">
                                </a>
                            </span>
                            <span>
                                <a href="https://api.whatsapp.com/send?phone=50377001782" target="_blank">
                                    <img src="logos/whatsapp.svg" alt="pinterest mundo ceramico" class="social-icon">
                                </a>
                            </span>
                            <span>
                                <a href="https://www.pinterest.com/mundo_ceramico/mundo-ceramico-el-salvador/"
                                    target="_blank">
                                    <img src="logos/pinterest-p.svg" alt="pinterest mundo ceramico" class="social-icon">
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.Footer -->
    </div>
    <!-- /.App -->
</body>

</html>