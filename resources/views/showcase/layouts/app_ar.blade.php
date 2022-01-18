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

    @include('showcase.components.header_ar')

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/showcase/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">جميعًا معًا ضد COVID-19</h2>
                                <p class="animate__animated animate__fadeInUp">في السنوات الأخيرة ، واجهت البشرية جمعاء أكبر أزمة صحية في التاريخ مرتبطة بـ SARS-Cov2. اتخذت حكومة بنن ، مثل البلدان الأخرى ، تدابير نؤيدها جميعا للقضاء على هذه الآفة مع ضمان الاستمرارية التعليمية.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/2.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">نتائجنا في امتحان الترخيص الوطني</h2>
                                <p class="animate__animated animate__fadeInUp">معهد ابن بطوطة الأفريقي ، أول مؤسسة ناطقة باللغة العربية للتعليم العالي والبحث العلمي والتدريب المهني ، قدم لأول مرة في تاريخ بنين طلابه (33) إلى الامتحانات الوطنية للرخصة المهنية جلسة سبتمبر 2021. معدل القبول : 100٪ ...</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">دوراتنا التدريبية</h2>
                                <p class="animate__animated animate__fadeInUp">نحن نستعد للحصول على الترخيص وقريبًا للحصول على درجة الماجستير في [1] الآداب والأدب ، [2] التدريب الفني في علوم التربية و [3] الدراسات الإسلامية. يُسمح بثلاث لغات للتدريس: الفرنسية والإنجليزية والعربية. وفي نفس الوقت نقدم دورة للبكالوريا الدولية وترقية البرامج ... والأنشطة القرآنية.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">ما الجديد للعام الدراسي 2021-2022</h2>
                                <p class="animate__animated animate__fadeInUp">كجزء من الأنشطة الأكاديمية أو التعليمية للعام الجديد 2021-2022 ، بصرف النظر عن دوراتنا المعتادة ، فإننا نركز بشكل خاص على تعزيز دورات التعلم عن بعد من خلال الدورات المدروسة من منصة التعلم عن بعد الخاصة بنا http: // elearning.ibnbatouta-edu. شبكة متاحة للهواتف وأجهزة الكمبيوتر المحمولة. التطبيق متاح أيضًا لنظامي التشغيل Android و iOS.</p>
                                {{-- <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/showcase/img/hero-carousel/5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">اليوم العالمي للغة العربية</h2>
                                <p class="animate__animated animate__fadeInUp">بمناسبة اليوم العالمي للغة العربية الذي يتم الاحتفال به في 18 ديسمبر 2021 ، يرغب معهد ابن بطوطة الأفريقي في ربط تعلم اللغة العربية بالفن والمتعة من خلال المشاركة
                                    الطلاب في إعداد المعارض والعروض التقديمية والعروض حول اللغة العربية الفصحى والحديثة.</p>
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
                        <h4 class="title"><a href="">كتالوج التدريب</a></h4>
                        <p class="description">بصرف النظر عن دورات البكالوريوس والماجستير والدكتوراه (قريبًا) ، نقدم العديد من الدورات التدريبية الانتقائية الأخرى.</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">احترام التزاماتنا</a></h4>
                        <p class="description">بدون انقطاع ، يقوم المتعلمون لدينا ، تحت إشراف فريق من المحترفين ، بإكمال مسارهم الدراسي ضمن الإطار الزمني المتفق عليه تعاقديًا.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-binoculars"></i>
                        <h4 class="title"><a href="">حب اللغة العربية</a></h4>
                        <p class="description">كيف لا نحب هذه اللغة العربية الرائعة التي أعطتنا كل شيء. لهذا نكرس له الأنشطة في المنزل ...</p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        @include('showcase.components.sections.about_us_ar')
        @include('showcase.components.sections.opportunities_ar')
        {{-- @include('showcase.components.sections.portfolio') --}}

        @include('showcase.components.sections.training_ar')
        @include('showcase.components.sections.teams_ar')
        @include('showcase.components.sections.contact_us_ar')
    </main><!-- End #main -->

    @include('showcase.components.footer_ar')


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
