<!-- ======= Contact Section ======= -->
{{-- @section('page-title',"Contact") --}}
<section id="contact" class="section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h3>للاتصال بنا</h3>
            <p>بصرف النظر عن دعمنا عبر الإنترنت الذي يعالج مخاوفك ، يمكنك الوصول إلينا هنا أو من خلال هذه القنوات: </p>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="bi bi-geo-alt"></i>
                    <h3>تبوك</h3>
                    {{-- <address>A108 Adam Street, NY 535022, USA</address> --}}
                    <address>{{ $about->geographic_location }}</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="bi bi-phone"></i>
                    <h3>رقم التليفون</h3>
                    <p><p><a href="tel:+22962671001">+229 |9694 1349 - 6267 1001</a></p></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="bi bi-envelope"></i>
                    <h3>بريد الالكتروني</h3>
                    <p><a href="mailto:iaib@ibnbatouta-edu.net">iaib@ibnbatouta-edu.net</a></p>
                </div>
            </div>

        </div>

        <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="بريدك الالكتروني" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="رسالة" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">أرسل رسالة</button></div>
            </form>
        </div>

    </div>
</section><!-- End Contact Section -->
