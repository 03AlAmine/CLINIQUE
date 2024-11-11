<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <title>Rendez-Vous | Clinique Alkawtar</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div>
        <!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
    <?php include('layouts/header.html'); ?>

        <!-- /.Header -->

        <!-- ========================
       page title 
    =========================== -->
        <section class="page-title page-title-layout4 bg-overlay text-center">
            <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
                        <h1 class="pagetitle__heading">Améliorer la qualité de vie grâce à une meilleure santé.</h1>
                        <p class="pagetitle__desc">Clinique Alkawtar est présent au Maroc depuis 1990, proposant des solutions innovantes, spécialisé dans les services médicaux pour le traitement des infrastructures médicales.
                        </p>
                        <a href="appointment.html" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Trouver un docteur</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <!-- /.col-xl-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-title -->


        <!-- ======================
      Team
    ========================= -->
        <section class="team-layout2 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <h3 class="heading__title">Rencontrez nos médecins</h3>
                            <p class="heading__desc">Notre personnel administratif et de soutien possède tous des compétences interpersonnelles exceptionnelles et est formé pour vous aider dans toutes les demandes de renseignements médicaux.
                            </p>
                        </div>
                        <!-- /.heading -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- Member #1 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/pexels-photo-8326324.jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Mokhtari Abdellah</a></h5>
                                    <p class="member__job">Cardiologue</p>
                                    <p class="member__desc"> Diplômé de l'université de Bordeaux <br> DIU en échocardiographie cardiaque et vasculaire de l'université de Bordeaux <br> DIU en rythmologie et stimulation cardiaque de l'université de Bordeaux <br> Diplômé en pharmacologie
                                        <br></p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                            <!-- Member #2 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/pexels-photo-8460094.jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Salhi Ahmed</a></h5>
                                    <p class="member__job">médecin généraliste </p>

                                    <p class="member__desc">Salhi Ahmed est Un médecin généraliste et un professionnel de la santé titulaire d’un diplôme de docteur en médecine, d’un diplôme d’État de docteur en médecine. Il soigne les blessures, maladies et pathologies.</p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                            <!-- Member #3 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/pexels-photo-4031686.jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Benali Siham</a></h5>
                                    <p class="member__job">Pédiatre</p>
                                    <p class="member__desc">Siham est diplômé de la faculté de médecine et a terminé un programme de résidence de 3 ans en pédiatrie. Elle a passé des examens rigoureux par le Conseil marocain de pédiatrie.<br><br></p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                            <!-- Member #4 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/12.jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Faraj Mohamed</a></h5>
                                    <p class="member__job">Urologue</p>
                                    <p class="member__desc">Faraj Mohamed diagnostique et traite les maladies des voies urinaires chez les hommes et les femmes. Il diagnostique et traite également tout ce qui concerne l'appareil reproducteur chez les hommes.</p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                            <!-- Member #5 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/pexels-photo-6749777.jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Amal El Alami</a></h5>
                                    <p class="member__job">Laboratoire</p>
                                    <p class="member__desc">Amal El Alami joue un rôle très important dans vos soins de santé. Les personnes travaillant dans le laboratoire clinique sont chargées d'effectuer des tests qui fournissent des informations cruciales.</p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                            <!-- Member #6 -->
                            <div class="member">
                                <div class="member__img">
                                    <img src="assets/images/team/pexels-photo-6129573 (1).jpeg" alt="member img" style="height: 500px; width: 100%;">
                                </div>
                                <!-- /.member-img -->
                                <div class="member__info">
                                    <h5 class="member__name"><a href="doctors-single-doctor1.html">Noureddine Benomar Alami</a></h5>
                                    <p class="member__job"> Pathologiste </p>
                                    <p class="member__desc">Noureddine aide les patients à soigner chaque jour en fournissant à leurs médecins les informations nécessaires pour assurer des soins appropriés. Il a également des ressources précieuses pour d'autres médecins..</p>
                                    <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="doctors-single-doctor1.html" class="btn btn__secondary btn__link btn__rounded">
                                            <span>Lire la suite</span>
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                        <ul class="social-icons list-unstyled mb-0">
                                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="phone"><i class="fas fa-phone-alt"></i></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                                <!-- /.member-info -->
                            </div>
                            <!-- /.member -->
                        </div>
                        <!-- /.carousel -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.Team -->


        <!-- ========================= 
      Testimonials layout 3
      =========================  -->
        <section class="testimonials-layout3 pt-130 bg-overlay bg-overlay-secondary">
            <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
            <div class="container">
                <div class="testimonials-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="heading-layout2">
                                <h3 class="heading__title color-primary">Citations du mois</h3>
                            </div>
                            <!-- /.heading -->
                        </div>
                        <!-- /.col-lg-5 -->
                        <div class="col-sm-12 col-md-12 col-lg-7">
                            <div class="slider-with-navs">
                                <!-- Testimonial #1 -->
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">“Les livres de médecine ne parlent pas des douleurs provoquées par les gestes des médecins. Et beaucoup de médecins pensent que si c'est pour le bien des patientes, la douleur est justifiée. Aucune douleur n'est justifiée.
                                        Jamais.”
                                    </h3>
                                </div>
                                <!-- /. testimonial-item -->
                                <!-- Testimonial #2 -->
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">“C'est grâce à mon passage à l'asile que j'ai appris à lire la première lecture que les gens donnent d'eux, et une deuxième lecture qu'il faut trouver soi-même. Je crois aux médecins, bien sûr, mais moi ce sont les
                                        malades qui m'ont soignée.”
                                    </h3>
                                </div>
                                <!-- /. testimonial-item -->
                                <!-- Testimonial #3 -->
                                <div class="testimonial-item">
                                    <h3 class="testimonial__title">“Dans les discours et dans les choses, ce sont deux sortes de personnes que vos grands médecins. Entendez-les parler : les plus habiles gens du monde voyez-les faire : les plus ignorants des hommes.”
                                    </h3>
                                </div>
                                <!-- /. testimonial-item -->
                            </div>
                            <!-- /.slick-carousel -->
                            <div class="slider-nav mb-60">
                                <div class="testimonial__meta">
                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Martin Winckler</h4>
                                        <p class="testimonial__meta-desc">Le choeur des femmes</p>
                                    </div>
                                </div>
                                <!-- /.testimonial-meta -->
                                <div class="testimonial__meta">

                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Hervé Guibert</h4>
                                        <p class="testimonial__meta-desc">Zouc par zouc</p>
                                    </div>
                                </div>
                                <!-- /.testimonial-meta -->
                                <div class="testimonial__meta">

                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Molière</h4>
                                        <p class="testimonial__meta-desc">Le malade imaginaire</p>
                                    </div>
                                </div>
                                <!-- /.testimonial-meta -->
                            </div>
                            <!-- /.slider-nav -->
                        </div>
                        <!-- /.col-lg-7 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.testimonials-wrapper -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.testimonials layout 3 -->

        <!-- ==========================
        contact layout 2
    =========================== -->
        <section class="contact-layout2 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-panel d-flex flex-wrap">
                            <form class="contact-panel__form" method="post" id="contactForm" action="connectAll.php">
                                <fieldset id="first">
                                    <div class="row page slide_page">
                                        <div class="col-sm-12 field">
                                            <h4 class="contact-panel__title">Prenez un rendez-vous</h4>

                                            <p class="contact-panel__desc mb-30"> En cas d'urgente, il est recommandé de nous contacter par appel téléphonique afin que nous puissions vous aider dans les plus brefs délais.
                                            </p>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <i class="icon-news form-group-icon"></i>
                                                <input type="text" class="form-control label text_field prenom" placeholder="Prénom" id="contact-prenom" name="firstname" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <i class="icon-news form-group-icon"></i>
                                                <input type="text" class="form-control text_field nom" placeholder="nom" id="contact-nom" name="lastname" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <i class="icon-user form-group-icon"></i>
                                                <select class="form-control" name="typeRDV">
<option value="0" disabled>Type de service</option>
<option value="Consultation initiale">Consultation initiale</option>
<option value="Suivi gynécologique">Suivi gynécologique</option>
<option value="Dossier administratif">Dossier administratif</option>
<option value="Suivi de nourission">Suivi de nourission et de l'enfant(moins de 15 ans)</option>
<option value="Autre">Autre</option>
</select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <select name="sexe" id="sexe" class="sexe">
                                <option value="0" disabled default>Sexe</option>
                                <option value="Femme">Femme</option>
                                <option value="Homme">Homme</option>
                              </select>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <i class="icon-user form-group-icon"></i>
                                                <input type="text" class="form-control text_field age" placeholder="Age" id="contact-age" name="age" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group form-group-date">
                                                <i class="icon-calendar form-group-icon"></i>
                                                <input type="date" class="form-control text_field dateRDV" id="contact-date" name="dateRDV" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <div class="form-group form-group-date">
                                                <i class="icon-clock form-group-icon"></i>
                                                <input type="time" class="form-control" id="contact-time" name="HeureRDV" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-12">
                                            <button type="button" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10 next_btn1 ">
<span>Suivant</span> <i class="icon-arrow-right"></i>
</button>
                                            <div class="contact-result"></div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                </fieldset>
                                <!--
PAGE 2
-->
                                <fieldset id="second">
                                    <div class="row page second_field">
                                        <div class="col-sm-12 field">
                                            <h4 class="contact-panel__title">Prenez un rendez-vous</h4>
                                            <p class="contact-panel__desc mb-30">Veuillez nous parler de votre principale préoccupation médicale
                                            </p>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <i class="icon-news form-group-info"></i>
                                                <label for="details">Décrivez votre problème médical en 300</label>
                                                <textarea name="additional_message_2" id="details" placeholder="Détails du rendez-vous" class="details" required></textarea>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-12 field btns">
                                            <button type="button" class="btn btn__secondary btn__rounded  btn__xhight mt-10 prev_btn1">
<i class="icon-arrow-left"></i> <span>Précedent</span>                                         </button>
                                            <button type="button" class="btn btn__secondary btn__rounded  btn__xhight mt-10 next_btn2">
<span>Suivant</span> <i class="icon-arrow-right"></i>
</button>
                                            <div class="contact-result"></div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                </fieldset>
                                <!--
PAGE 3
-->

                                <fieldset id="third">
                                    <div class="row page">
                                        <div class="col-sm-12 field">
                                            <h4 class="contact-panel__title">Prenez un rendez-vous</h4>
                                            <p class="contact-panel__desc mb-30">Détails du patient</p>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <i class="icon-news form-group-info"></i>
                                                <label for="details">Avez-vous déjà reçu des soins chez clinique Alkawtar?</label>
                                                <select name="already_patient" id="already_patient">
<option value="choisir" disabled selected = "selected">Choisir</option>
<option value="Oui">
  Oui
</option>
<option value="Non">
  Non, c'est mon premier rendez-vous
</option>
</select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-12 col-lg-12 id_alkawtar">
                                            <div class="form-group form-group-date">
                                                <i class="icon-user form-group-icon"></i>
                                                <input type="text" class="form-control AlkawtarID" placeholder="ID Alkawtar" id="alkawtar-id" name="AlkawtarID">
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-12 field btns">
                                            <button type="button" class="btn btn__secondary btn__rounded  btn__xhight mt-10 prev_btn2">
<i class="icon-arrow-left"></i> <span>Précedent</span>                                       </button>
                                            <button type="button" class="btn btn__secondary btn__rounded  btn__xhight mt-10  next_btn3">
<span>Suivant</span> <i class="icon-arrow-right"></i>
</button>
                                            <div class="contact-result"></div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                </fieldset>
                                <!--
PAGE 4
-->
                                <fieldset id="fourth">
                                    <div class="row page">
                                        <div class="col-sm-12 field">
                                            <h4 class="contact-panel__title">Prenez un rendez-vous</h4>
                                            <p class="contact-panel__desc mb-30">Informations de connexion</p>
                                        </div>
                                        <div class="col-sm-4 col-md-12 col-lg-12">
                                            <div class="form-group form-group-date">
                                                <i class="icon-email form-group-icon"></i>
                                                <input type="text" class="form-control text_field" placeholder="Adresse Email" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-12 col-lg-12">
                                            <div class="form-group form-group-date">
                                                <i class="icon-phone form-group-icon"></i>
                                                <input type="text" class="form-control text_field" placeholder="Numéro de téléphone" id="phone" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-12 col-lg-12">
                                            <div class="form-group form-group-date">
                                                <i class="icon-email form-group-icon"></i>
                                                <input type="password" class="form-control text_field" placeholder="Mot de passe" id="passwors" name="password" required>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-4 -->
                                        <div class="col-12 field btns">
                                            <button type="button" class="btn btn__secondary btn__rounded  btn__xhight mt-10 prev_btn3">
<i class="icon-arrow-left"></i> <span>Précedent</span> 
</button>
                                            <button type="submit" class="btn btn__secondary btn__rounded  btn__xhight mt-10 next1 next submit_btn" name="register">
<span>Terminer</span> <i class="icon-pills"></i>
</button>
                                            <div class="contact-result"></div>
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                </fieldset>
                            </form>
                            <div class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                                <div>
                                    <h4 class="contact-panel__title color-white">Nous contacter</h4>
                                    <p class="contact-panel__desc font-weight-bold color-white mb-30">N'hésitez pas à contacter notre personnel pour toute demande médicale.
                                    </p>
                                </div>
                                <div>
                                    <ul class="contact__list list-unstyled mb-30">
                                        <li>
                                            <i class="icon-phone"></i><a href="tel:+55555555">Ligne D'urgence: (+212) 55555555</a>
                                        </li>
                                        <li>
                                            <i class="icon-location"></i><a href="#">Localisation : Fes, Rte Immouzzer 17</a>
                                        </li>
                                        <li>
                                            <i class="icon-clock"></i><a href="contact-us.html">Lun - Ven: 8:00 am - 7:00 pm</a>
                                        </li>
                                    </ul>
                                    <a href="#" class="btn btn__white btn__rounded btn__outlined">Nous Contacter</a>
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
        <!-- /.contact layout 2 -->

        <!-- ========================
      About Layout 2
    =========================== -->
        <center>
            <section class="about-layout5 pt-20">
                <div class="container">
                    <div class="change">
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="heading-layout2">
                                <h3 class="heading__title mb-80">Régions disponibles</h3>
                            </div>
                            <!-- /heading -->
                            <div class="map-wrapper mb-50">
                                <img src="assets/images/map2.svg" alt="map" width="60%">
                                <div class="tooltip-box">
                                    <div class="tooltip__icon">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <!-- /.tooltip__icon -->
                                    <div class="tooltip__panel">
                                        <p class="tooltip__title mb-0">Rte Immouzer, 17 Fes</p>
                                    </div>
                                    <!-- /.tooltip__panel -->
                                </div>

                                <!-- /.tooltip__panel -->
                            </div>
                            <!-- /.tooltip__panel -->
                        </div>
                        <!-- /.tooltip-box -->
                    </div>
                    <!-- /.map-wrapper -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                    <p class="heading__desc color-secondary font-weight-bold mb-30">Nous travaillerons avec vous pour élaborer des plans de soins individualisés, la gestion des maladies chroniques. Si nous ne pouvons pas vous aider, nous pouvons vous fournir des références ou des conseils sur le type de praticien
                        dont vous avez besoin.</p>
                    <p class="heading__desc mb-30">Nous nous engageons à être le premier réseau de soins de santé de la région en fournissant des soins centrés sur le patient qui inspirent l'excellence clinique et de service, faisant de nous le premier et le meilleur choix pour nos
                        patients, employés, médecins, employeurs, bénévoles et communautés. Nous servons la communauté en améliorant la qualité de vie grâce à une meilleure santé.</p>
                    <div class="d-flex align-items-center mb-60">
                        <a href="contact-us.html" class="btn btn__secondary btn__rounded mr-30">
                            <i class="fas fa-heart"></i> <span>Faire une donation</span>
                        </a>
                        <a href="contact-us.html" class="btn btn__secondary btn__outlined btn__rounded mr-30">
                      À Propos               </a>
                    </div>
                    <ul class="list-items list-items-layout3 list-unstyled">
                        <li>Nous effectuons une série de tests pour nous aider à comprendre pourquoi vous ne vous sentez pas bien et à déterminer le traitement qui vous convient.</li>
                        <li>Nos médecins, infirmières et professionnels paramédicaux experts prennent en charge des patients présentant un large éventail de problèmes médicaux.</li>
                        <li>Nous offrons une large gamme de soins et de soutien à nos patients, du diagnostic au traitement et à la réadaptation.
                        </li>
                    </ul>
                </div>
                <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    </section>
    </center>
    <!-- /.About Layout 2 -->

    <!-- ========================
      Footer
      <?php include('layouts/footer.html'); ?>

    ========================== -->
    </div>
    <!-- /.wrapper -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/plugins.js"></script>
</body>

</html>