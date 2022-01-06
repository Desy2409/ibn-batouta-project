<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IBN BATOUTA | @yield('page-title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/showcase/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/showcase/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/showcase/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/showcase/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/showcase/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/showcase/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/showcase/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/showcase/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/showcase/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('showcase.components.header')

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/showcase/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{ __('We are professional')}}</h2>
                                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="bi bi-briefcase"></i>
                        <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        @include('showcase.components.sections.about_us')
        @include('showcase.components.sections.services')
        {{-- @include('showcase.components.sections.portfolio') --}}


        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section><!-- End Call To Action Section -->


        @include('showcase.components.sections.portfolio')
        @include('showcase.components.sections.teams')
        @include('showcase.components.sections.contact_us')
    </main><!-- End #main -->

    @include('showcase.components.footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/showcase/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/showcase/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/showcase/js/main.js') }}"></script>

</body>

</html>
