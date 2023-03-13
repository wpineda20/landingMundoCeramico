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
    {{-- <script src="{{ mix('js/btnScrollToTop.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('js/scrollreveal.min.js') }}" defer></script> --}}
    {{-- <script src="{{ mix('js/main.js') }}" defer></script> --}}

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
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="logos/logo_blanco_rombo_rojo.png" alt="logo mundo ceramico" class="" width="170"
                            height="70">
                    </a> --}}
                    {{-- <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="bi bi-grid-fill text-white fs-1"></i>
                    </button> --}}

                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        {{-- <ul class="navbar-nav me-auto">

                        </ul> --}}

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav">
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
                        <h1 class="h-title"><span class="text-primary-red">MUNDO</span> CÉRAMICO</h1>
                        <h2 class="h-subtitle">Lorem ipsum dolor sit amet elit. <br> sit amet
                            consectetur adipisicing consectetur.
                        </h2>
                        <p class="h-paragraph">
                            Lorem ipsum dolor sit <br>amet consectetur adipisicing elit.
                        </p>
                        <div class="d-flex">
                            <a href="#categories" class="btn-header mx-auto">Explorar Más <i
                                    class="bi bi-chevron-right fs-5"></i></a>
                        </div>
                    </div>
                    <!-- /.Header Titles -->
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
                    {{-- <span class="text-black fs-5">amet consectetur adipisicing elit</span> --}}
                </div>
                <!-- /.Module -->

                <!-- Module -->
                <div class="module-content-b">
                    <h2 class="module-title">Madera</h2>
                    <p class="module-text text-black mb-1">
                        Lorem ipsum dolor sit, onsectetur adipisicing elit <br>
                        onsectetur adipisicing elit
                    </p>
                    {{-- <span class="text-text-primary-blue fs-5">amet consectetur adipisicing elit</span> --}}
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-c">
                    <h2 class="module-title">Porcelanato</h2>
                    <p class="module-text mb-1">
                        Consectetur adipisicing elit
                    </p>
                    <span class="text-muted fs-5">amet consectetur adipisicing elit</span>
                </div>
                <!-- /.Module -->
                <!-- Module -->
                <div class="module-content-a">
                    <h2 class="module-title">Azulejo</h2>
                    <p class="module-text mb-1">
                        Lorem ipsum dolor sit <br>amet consectetur adipisicing elit
                    </p>
                    {{-- <span class="text-muted fs-5">amet consectetur adipisicing elit</span> --}}
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
                    <span class="text-black fs-5">amet consectetur adipisicing elit</span>
                </div>
                <!-- /.Module -->
            </section>
            <!-- /.Blocks Section -->

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
            {{-- <div class="container" id="contact">
                <section class="contact-section">
                    <!-- Left Section -->
                    <div class="contact-left">
                        <!-- Contact Titles -->
                        <h1 class="contact-title">
                            CONTACTO
                        </h1>
                        <!-- /.Contact Titles -->

                        <!-- Contact Items -->
                        <div class="contact-content">
                            <div class="contanct-items">
                                <i class="bi bi-envelope-fill fs-3 text-primary-red"></i>
                                <p class="contact-text mb-0">
                                    servicioalcliente@mundo-ceramico.com
                                </p>
                            </div>
                            <div class="contanct-items">
                                <i class="bi bi-telephone-fill fs-3 text-primary-red"></i>
                                <p class="contact-text mb-0">
                                    +503 2254 5999
                                </p>
                            </div>
                            <div class="contanct-items">
                                <i class="bi bi-headset fs-2 text-primary-red"></i>
                                <p class="contact-text mb-0">
                                    +503 7700 1782
                                </p>
                            </div>
                            <div class="contanct-items">
                                <i class="bi bi-geo-alt-fill fs-3 text-primary-red"></i>
                                <p class="contact-text mb-0">
                                    Autopista Sur, Reparto Los Héroes, Boulevard Los Próceres Nº1-A. 503 San Salvador,
                                    El Salvador
                                </p>
                            </div>
                            <div class="contanct-items">
                                <i class="bi bi-clock-fill fs-3 text-primary-red"></i>
                                <p class="contact-text mb-0">
                                    Lunes a Viernes: 8:00 am - 18:00 pm <br>
                                    Sábado: 8:00 am - 2:00 pm <br>
                                    Domingo: CERRADO
                                </p>
                            </div>
                            <div class="contanct-items text-center">
                                <a href="https://ul.waze.com/ul?ll=13.68323591%2C-89.22569990&navigate=yes&zoom=17&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location"
                                    target="_blank" class="btn-waze">WAZE <img src="logos/icon-waze-download.png"
                                        alt="waze button"></a>
                            </div>
                        </div>
                        <!-- /.Contact Items -->
                    </div>
                    <!-- /.Left Section -->
                    <!-- Right Section -->
                    <div class="contact-right">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.577186660071!2d-89.2263677198777!3d13.683454725675746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63304aef05fb9b%3A0x49730054de7f4352!2sMundo%20Cer%C3%A1mico!5e0!3m2!1ses!2ssv!4v1675017168642!5m2!1ses!2ssv"
                            width="600" height="500" style="border:0;box-shadow: 2px 4px 12px rgb(0 0 0 / 8%);"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- /.Right Section -->
                </section>
            </div> --}}
            <!-- /.Contact Us Section -->

        </main>
        <!-- /.Main -->

        <!-- Footer -->
        <footer class="footer bg-footer">
            <div class="container">
                <div class="footer-items">
                    <div class="footer-content">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="logos/logo_blanco_rombo_rojo.png" class="mb-2" alt="logo mundo ceramico" class=""
                                width="170" height="70">
                        </a>
                    </div>
                    <div class="footer-content">
                        <p class="text-regular-footer mb-0">&copy; @php $currentYear = date('Y') @endphp
                            {{$currentYear}} Mundo
                            Céramico.
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
                                <a href="#" target="_blank">
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