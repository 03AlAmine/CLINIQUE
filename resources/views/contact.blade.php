
@extends('base')

@section('content')


        <!-- /.Header -->

        <!-- =========================
            Google Map
    =========================  -->
    <section class="google-map py-0">
        <iframe frameborder="0" height="500" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.935227792768!2d-1.9126362852835679!3d34.65633869310145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787b0deb186177%3A0xcfb41c8632a40c50!2sCHU%20Mohamed%20VI%20oujda!5e0!3m2!1sfr!2sma!4v1650669089493!5m2!1sfr!2sma"></iframe>
    </section>
    <!-- /.GoogleMap -->

    <!-- ==========================
    contact layout 1
=========================== -->
    <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="contact-panel__form" method="post" action="connectAll.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">Comment pourrions nous vous aider ?</h4>
                                    <p class="contact-panel__desc mb-30">N'hésitez pas à nous contacter pour toute demande générale ou médicale. Nos médecins recevront ou retourneront tous les appels urgents.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Nom & Prenom" id="contact-name" name="contact-name" required>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Numéro" id="contact-phone" name="contact-phone" required>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Sujet" id="contact-sujet" name="contact-sujet" required>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="icon-alert form-group-icon"></i>
                                        <textarea class="form-control" placeholder="Message" id="contact-message" name="contact-message"></textarea>
                                    </div>
                                    <!-- <input type="submit" name="send" value="Envoyer le message"/> -->
                                    <input type="submit" name="send" value="Envoyer le message" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10" />

                                    <div class="contact-result"></div>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <div class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                            <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                            <div>
                                <h4 class="contact-panel__title color-white">Contacts rapides</h4>
                                <p class="contact-panel__desc font-weight-bold color-white mb-30">N'hésitez pas à contacter notre personnel amical pour toute demande médicale.
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Ligne d'urgence : 0536629878</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Lieu: Oujda - MAROC</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html">Lun - Ven : 8:00 am - 7:00 pm</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn__white btn__rounded btn__outlined">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.contact layout 1 -->

    <!-- =========================
  Testimonials layout 1
  =========================  -->
    <section class="testimonials-layout1 pt-130 pb-80">
        <div class="container">
            <div class="testimonials-wrapper">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
                        <div class="heading-layout2">
                            <h3 class="heading__title">Paroles de patients !</h3>
                        </div>
                        <!-- /.heading -->
                    </div>
                    <!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="slider-nav mb-60">
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                                </div>
                                <!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Omar Maaraf</h4>
                                </div>
                            </div>
                            <!-- /.testimonial-meta -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                </div>
                                <!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Slimani Mohammed</h4>
                                </div>
                            </div>
                            <!-- /.testimonial-meta -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thmb">
                                    <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                                </div>
                                <!-- /.testimonial-thumb -->
                                <div>
                                    <h4 class="testimonial__meta-title">Mourabiti Youssef</h4>
                                </div>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /.slider-nav -->
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="slider-with-navs">
                            <!-- Testimonial #1 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Je tiens à vous faire part de ma satisfaction lors de mon hospitalisation du 13 au 20 Septembre 2021 au 4e étage en médecine interne. C’est le docteur Faraj Mohamed qui m’a suivie et je suis pleinement satisfaite.
                                    Veuillez agréer Monsieur, mes respectueuses salutations.”
                                </h3>
                            </div>
                            <!-- /. testimonial-item -->
                            <!-- Testimonial #2 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Je viens de sortir de 8 jours d’hospitalisation dans votre hôpital dans le service médecine interne et maladies infectieuses M21 4ème étage site Kléber. Je tiens à vous dire et à remercier votre service pour la qualité
                                    de l’accueil, des soins notamment le Docteur Axelle DE RAIGNIAC, de l’humanité et de l’écoute du personnel médical et du personnel des différents services.”
                                </h3>
                            </div>
                            <!-- /. testimonial-item -->
                            <!-- Testimonial #3 -->
                            <div class="testimonial-item">
                                <h3 class="testimonial__title">“Merci à tous (de jour comme de nuit) de m’avoir conduit avec dévouement et compétence vers la guérison de l’agression de la forte impaction qui menaçait sérieusement ma santé.”
                                </h3>
                            </div>
                            <!-- /. testimonial-item -->
                        </div>
                        <!-- /.slick-carousel -->
                    </div>
                    <!-- /.col-lg-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.testimonials-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.testimonials layout 1 -->

    <!-- ========================
 gallery
=========================== -->
    <section class="gallery pt-0 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                        <a class="popup-gallery-item" href="assets/images/gallery/9.jpg">
                            <img src="assets/images/gallery/9.jpg" alt="gallery img">
                        </a>
                        <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                            <img src="assets/images/gallery/2.jpg" alt="gallery img">
                        </a>
                        <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                            <img src="assets/images/gallery/3.jpg" alt="gallery img">
                        </a>
                        <a class="popup-gallery-item" href="assets/images/gallery/10.jpg">
                            <img src="assets/images/gallery/10.jpg" alt="gallery img">
                        </a>
                        <a class="popup-gallery-item" href="assets/images/gallery/5.jpg">
                            <img src="assets/images/gallery/5.jpg" alt="gallery img">
                        </a>
                        <a class="popup-gallery-item" href="assets/images/gallery/6.jpg">
                            <img src="assets/images/gallery/6.jpg" alt="gallery img">
                        </a>
                    </div>
                    <!-- /.gallery-images-wrapper -->
                </div>
                <!-- /.col-xl-5 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.gallery 2 -->

@endsection

