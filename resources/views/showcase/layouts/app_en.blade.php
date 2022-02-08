<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Institut Africain IBN BATOUTA | IAIB - @yield('page-title')</title>
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

    @include('showcase.components.header_en')

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/showcase/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">All together against COVID-19</h2>
                                <p class="animate__animated animate__fadeInUp">In recent years, all of humanity has been facing its greatest health crisis in history linked to SARS-Cov2. Like other countries, the Government of Benin has taken measures to which we all subscribe to stem the scourge while ensuring educational continuity.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Our results at the national license exam</h2>
                                <p class="animate__animated animate__fadeInUp">The IBN BATOUTA African Institute, the first Arabic-speaking establishment of higher education and scientific research and professional training, presented for the first time in the history of Benin its students (33) to the national examinations of Professional License September session 2021. Admission rate: 100%...</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Our training courses</h2>
                                <p class="animate__animated animate__fadeInUp">We are preparing for the license and soon for the Master in [1] letters and literature, [2] technical training in the science of education and [3] Islamic studies. Three teaching languages are authorized: French, English and Arabic. At the same time, we offer a course for the International Baccalaureate, upgrading programs...and Koranic activities.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">What's new for the 2021-2022 school year</h2>
                                <p class="animate__animated animate__fadeInUp">As part of the academic or educational activities for the new year 2021-2022, apart from our usual courses, we are placing particular emphasis on strengthening distance learning courses with tutored courses from our distance learning platform http:// elearning.ibnbatouta-edu.net accessible for phones and laptops. The app is also available for Android and iOS.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">World Arabic Language Day</h2>
                                <p class="animate__animated animate__fadeInUp">On the occasion of the World Day of the Arabic Language celebrated every December 18, 2021, the African Institute IBN BATOUTA wishes to associate the learning of the Arabic language with art and pleasure through the involvement of students in the preparation of exhibitions, presentations and shows around the classical and modern Arabic language.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
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
                        <h4 class="title"><a href="">Training catalog</a></h4>
                        <p class="description">Apart from our Bachelor's, Master's and Doctorate training courses (coming soon), we offer several other à la carte training courses.</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Honoring our commitments</a></h4>
                        <p class="description">Without discontinuities, our learners, supervised by a team of professionals, complete their course within the contractually agreed time frame.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title"><a href="">Arabic language love</a></h4>
                        <p class="description">How not to love this wonderful Arabic language that has given us everything. That's why we dedicate activities to him at home...</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        @include('showcase.components.sections.about_us_en')
        @include('showcase.components.sections.opportunities_en')
        {{-- @include('showcase.components.sections.portfolio') --}}

        @include('showcase.components.sections.training_en')
        @include('showcase.components.sections.teams_en')
        @include('showcase.components.sections.contact_us_en')
    </main><!-- End #main -->

    @include('showcase.components.footer_en')


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
