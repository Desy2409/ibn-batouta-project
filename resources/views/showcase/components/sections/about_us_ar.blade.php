<!-- ======= About Us Section ======= -->
{{-- @section('page-title',"Accueil") --}}
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>عن معهد ابن بطوطة الأفريقي</h3>
            <p>{{ $about->stopped }}</p>
        </header>

        <div class="row about-cols">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('assets/showcase/img/about-mission.jpg') }}" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    </div>
                    <h2 class="title"><a href="#">مهمتنا</a></h2>
                    <p>
                        {{ $about->mission }}
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('assets/showcase/img/about-plan.jpg') }}" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    </div>
                    <h2 class="title"><a href="#">خطتنا</a></h2>
                    <p>
                        {{ $about->plan }}
                    </p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="about-col">
                    <div class="img">
                        <img src="{{ asset('assets/showcase/img/about-vision.jpg') }}" alt="" class="img-fluid">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    </div>
                    <h2 class="title"><a href="#">رؤيتنا</a></h2>
                    <p>
                        {{ $about->vision }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Section -->
