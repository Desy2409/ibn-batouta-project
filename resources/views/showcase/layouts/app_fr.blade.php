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
    {{-- <link href="{{ asset('assets/showcase/vendor/aos/aos.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/customs/css/ionicons.min.css') }}" rel="stylesheet">
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

    @include('showcase.components.header_fr')

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/showcase/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2>Tous ensemble contre le COVID-19</h2>
                                <p>Depuis quelques années, l’humanité toute entière est confrontée à sa plus grande crise sanitaire de l’histoire liée à la SARS-Cov2. A l’instar des autres pays, le Gouvernement du Bénin a pris des mesures auxquelles toutes nous souscrivons pour endiguer le fléau tout en assurant la continuité pédagogique.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto">Démarrer</a> --}}
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2>Nos résultats à l'examen national de Licence</h2>
                                <p>L’Institut Africain IBN BATOUTA, premier établissement arabophone d'enseignement supérieur et de la recherche scientifique et des formations professionnelles, a présenté pour la première fois dans l'histoire du Bénin ses étudiants (33) aux examens nationaux de Licence Professionnelle session de Septembre 2021. Taux d’admission : 100%...</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto">Démarrer</a> --}}
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2>Nos filières de formation</h2>
                                <p>Nous préparons pour la licence et bientôt pour le Master en [1] lettres et littérature, [2] formations techniques en science de l'éducation et [3] les études islamiques. Trois langues d'enseignement sont autorisées : le français, l'anglais et l'arabe. Parallèlement, nous proposons un parcours pour le Bac international, des programmes de mise à niveau...et des activités coraniques.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto">Démarrer</a> --}}
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2>Les nouveautés de la rentrée 2021-2022</h2>
                                <p>Au titre des activités académiques ou pédagogiques de la nouvelle année 2021-2022, en dehors de nos parcours habituelles nous mettons un accent particulier sur le renforcement des cours à distance avec des parcours tutorés à partir de notre plateforme de cours à distance http://elearning.ibnbatouta-edu.net accessible pour les téléphones et ordinateurs portables. L'appli est aussi disponible pour Android et iOS.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto">Démarrer</a> --}}
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2>Journée Mondiale de la langue Arabe</h2>
                                <p>A l’occasion de la Journée Mondiale de la Langue Arabe célébrée chaque 18 Décembre 2021, l’Institut Africain IBN BATOUTA souhaite ainsi associer l’apprentissage de la langue arabe à l’art et au plaisir à travers l’implication
                                    des étudiants dans la préparation d’expositions, de présentations et de spectacles autour de la langue arabe classique et moderne.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto">Démarrer</a> --}}
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
                        <i class="ion-ios-bookmarks-outline"></i>
                        <h4 class="title"><a href="">Catalogue de formation</a></h4>
                        <p class="description">En dehors de nos parcours de formation de la licence, du Master et du Doctorat (à venir) nous vous offrons plusieurs autres formations à la carte.</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="ion-ios-stopwatch-outline"></i>
                        <h4 class="title"><a href="">Respect de nos engagements</a></h4>
                        <p class="description">Sans discontinuités, nos apprenants, encadrés par une équipe de professionnels terminent leur cursus dans le délai imparti contractualisé.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="ion-ios-heart-outline"></i>
                        <h4 class="title"><a href="">Amour de la langue Arabe</a></h4>
                        <p class="description">Comment ne pas pas aimer cette merveilleuse langue arabe qui nous a tout donné. Voilà pourquoi nous lui dédions chez nous des activités...</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        @include('showcase.components.sections.about_us_fr')
        @include('showcase.components.sections.opportunities_fr')
        {{-- @include('showcase.components.sections.portfolio') --}}

        @include('showcase.components.sections.training_fr')
        @include('showcase.components.sections.teams_fr')
        @include('showcase.components.sections.contact_us_fr')
    </main><!-- End #main -->

    @include('showcase.components.footer_fr')


    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>
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
