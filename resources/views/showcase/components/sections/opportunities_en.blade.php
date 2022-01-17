<!-- ======= Services Section ======= -->
<section id="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
            <h3>LES OPPORTUNITES OFFERTES PAR L'INSTITUT</h3>
            <p>{!! $opportunity->opportunity_information !!}</p>
        </header>

        <div class="row">
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                {{-- <div class="icon"><i class="ion-ios-analytics-outline"></i></div> --}}
                <h4 class="title"><a href="">Bourses d'étude</a></h4>
                <p class="description">{{ $opportunity->scholarship }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">Curricula adaptés</a></h4>
                <p class="description">{{ $opportunity->adapted_curricula }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">Modalités d'enseignement</a></h4>
                <p class="description">{{ $opportunity->teaching_modality }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">Des métiers d'avenir</a></h4>
                <p class="description">{{ $opportunity->future_job }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">Centre multimedia</a></h4>
                <p class="description">{{ $opportunity->multimedia_center }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">Des partenariats de choix</a></h4>
                <p class="description">{{ $opportunity->choice_partnership }}</p>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
        <div class="container text-center">
            <h3>Rentrer académique 2021-2022 à l'IAIB</h3>
            <p>Les inscriptions pour le compte de la rentrée académiques 2021-2022 ont démarré à IAIB mais avec cette particularité qu’elle se fait cette année en deux temps, d’abord sur notre plateforme d’inscription en ligne puis finalisé à l’Institut
                à Agbokou (Porto-Novo).</p>
            <a class="cta-btn" href="#">Candidater</a>
        </div>
    </section>
    <!-- #call-to-action -->

@include('showcase.components.sections.skills_en')
@include('showcase.components.sections.facts_en')
