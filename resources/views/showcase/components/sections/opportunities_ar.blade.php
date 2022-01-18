<!-- ======= Services Section ======= -->
<section id="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
            <h3>الفرص التي يتيحها المعهد</h3>
            <p>{!! $opportunity->opportunity_information !!}</p>
        </header>

        <div class="row">
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                {{-- <div class="icon"><i class="ion-ios-analytics-outline"></i></div> --}}
                <h4 class="title"><a href="">منحة دراسية</a></h4>
                <p class="description">{{ $opportunity->scholarship }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">مناهج معدلة</a></h4>
                <p class="description">{{ $opportunity->adapted_curricula }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                <h4 class="title"><a href="">طرق التدريس</a></h4>
                <p class="description">{{ $opportunity->teaching_modality }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-binoculars"></i></div>
                <h4 class="title"><a href="">وظائف المستقبل</a></h4>
                <p class="description">{{ $opportunity->future_job }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">مركز الوسائط المتعددة</a></h4>
                <p class="description">{{ $opportunity->multimedia_center }}</p>
            </div>
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">اختيار الشراكات</a></h4>
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
            <h3>العودة إلى العام الدراسي 2021-2022 في IAIB</h3>
            <p>بدأت عمليات التسجيل للعام الدراسي 2021-2022 في IAIB ولكن بهذه الخصوصية يتم ذلك هذا العام على مرحلتين ، أولاً على منصة التسجيل عبر الإنترنت الخاصة بنا ثم الانتهاء منها في المعهد في Agbokou (بورتو نوفو).</p>
            <a class="cta-btn" href="#">يتقدم</a>
        </div>
    </section>
    <!-- #call-to-action -->

@include('showcase.components.sections.skills_ar')
@include('showcase.components.sections.facts_ar')
