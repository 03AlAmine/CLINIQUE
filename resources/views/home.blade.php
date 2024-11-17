<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Acceuil | Clinique Alkawtar</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <button class="miniPopup-emergency-trigger" type="button">24/7 urgence</button>
                                        <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                                            <div class="emergency__icon">
                                                <i class="icon-call3"></i>
                                            </div>
                                            <a href="tel:+201061245741" class="phone__number">
                                                <i class="icon-phone"></i> <span>0536629878</span>
                                            </a>
                                            <p>N'hésitez pas à contacter notre sympathique personnel de réception pour toute demande générale ou médicale.
                                            </p>
                                            <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                                                <span>Prendre un rendez-vous</span> <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                        <!-- /.miniPopup-emergency -->
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Ligne d'urgence : 0536629878 </a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Lieu: Fes, RTE Immouzer 17 - MAROC</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html"> Lun - Ven : 8:00 am - 7:00 pm</a>
                                    </li>
                                </ul>
                                <!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>
                                            <a href="https://instagram.com">
                                                <ion-icon name="logo-instagram" style="margin-top: 5px ;"></ion-icon>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/?lang=fr">
                                                <ion-icon name="logo-twitter" style="margin-top: 5px ;"></ion-icon>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.social-icons -->
                                    <form class="header-topbar__search">
                                        <input type="text" class="form-control" placeholder="rechercher...">
                                        <button class="header-topbar__search-btn"><ion-icon name="search-circle-outline" style="width : 25px;margin-top:5px;height:25px; color:#698bc8;"></ion-icon></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                        <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>



                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item">
                                <a href="{{route('home')}}" class="nav__item-link">ACCEUIL</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item has-dropdown">
                                <li class="nav__item">
                                    <a href="{{route('about-us')}}" class="nav__item-link">À PROPOS</a>
                                </li>
                                <!-- /.nav-item -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="doctors-modern.html" class="nav__item-link">MEDECINS</a>

                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="blog.html" class="nav__item-link">BLOG</a>

                            </li>


                            <li class="nav__item">
                                <a href="contact-us.html" class="nav__item-link">CONTACTER </a>
                            </li>
                            <!-- /.nav-item -->
                        </ul>
                        <!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <div class="miniPopup-departments-trigger">
                            <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
                            <a href="{{ route('login') }}">CONNEXION</a>

                        </div>
                        <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
                            <li class="nav__item">
                                <a href="contact-us.html" class="nav__item-link">Problème de Connexion?</a>
                            </li>

                        </ul>
                        <!-- /.miniPopup-departments -->
                        <a href="#reserver" class="btn btn__primary btn__rounded ml-30">
                            <i class="icon-calendar"></i>
                            <span>RENDEZ-VOUS</span>
                        </a>
                    </div>
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navabr -->
        </header>
        <!-- /.Header -->

        <!-- ============================
        Slider
    ============================== -->
        <section class="slider">
            <div class="slick-carousel m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
                <div class="slide-item align-v-h">
                    <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">Votre Santé, C'est Notre Mission</h2>
                                    <p class="slide__desc">Notre plus grande satisfaction est de voir nos patients heureux et satisfaits de leurs traitements. Notre mission est de vous conseiller au mieux et d’améliorer votre bien-être.</p>
                                    <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                        <!-- feature item #1 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart"></i>
                                            </div>
                                            <h2 class="feature__title">Examen</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #2 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-medicine"></i>
                                            </div>
                                            <h2 class="feature__title">Ordonnance </h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #3 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart2"></i>
                                            </div>
                                            <h2 class="feature__title">cardiogramme</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #4 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-blood-test"></i>
                                            </div>
                                            <h2 class="feature__title">pression artérielle</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                    </ul>
                                    <!-- /.features-list -->
                                </div>
                                <!-- /.slide-content -->
                            </div>
                            <!-- /.col-xl-7 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.slide-item -->
                <div class="slide-item align-v-h">
                    <div class="bg-img"><img src="assets/images/sliders/image1.jpg" alt="slide img"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                                <div class="slide__content">
                                    <h2 class="slide__title">Tous les aspects de la pratique médicale</h2>
                                    <p class="slide__desc">La santé et le bien-être de nos patients et de leur équipe soignante seront toujours notre priorité, nous suivons donc les meilleures pratiques de propreté.</p>
                                    <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                        <!-- feature item #1 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart"></i>
                                            </div>
                                            <h2 class="feature__title">Examen</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #2 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-medicine"></i>
                                            </div>
                                            <h2 class="feature__title">Ordonnance </h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #3 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-heart2"></i>
                                            </div>
                                            <h2 class="feature__title">Cardiogramme</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                        <!-- feature item #4 -->
                                        <li class="feature-item">
                                            <div class="feature__icon">
                                                <i class="icon-blood-test"></i>
                                            </div>
                                            <h2 class="feature__title">Pression artérielle</h2>
                                        </li>
                                        <!-- /.feature-item-->
                                    </ul>
                                    <!-- /.features-list -->
                                </div>
                                <!-- /.slide-content -->
                            </div>
                            <!-- /.col-xl-7 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.slide-item -->
            </div>
            <!-- /.carousel -->
        </section>
        <!-- /.slider -->



        <script>
            TweenMax.from('.d-flex align-items-center justify-content-between', 2, {
                delay: 1.8,
                opacity: 0,
                ease: Expo.easeInOut
            })
            TweenMax.from('.container-fluid', 2, {
                delay: 1.8,
                opacity: 0,
                ease: Expo.easeInOut
            })



            TweenMax.from('.slide__title', 2, {
                delay: 2.6,
                opacity: 0,
                ease: Expo.easeInOut
            })

            TweenMax.from('.slide__desc', 2, {
                delay: 2.9,
                opacity: 0,
                ease: Expo.easeInOut
            })
        </script>
        <!-- ============================
        contact info
    ============================== -->
        <section class="contact-info py-0">
            <div class="container">
                <div class="row row-no-gutter boxes-wrapper">
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                            <div class="contact__icon">
                                <i class="icon-call3"></i>
                            </div>
                            <!-- /.contact__icon -->
                            <div class="contact__content">
                                <h2 class="contact__title">Cas d'urgence</h2>
                                <p class="contact__desc">N'hésitez pas à contacter notre personnel de réception pour toute demande médicale ou technique.</p>
                                <a href="tel:+201061245741" class="phone__number">
                                    <i class="icon-phone"></i> <span>0536629878</span>
                                </a>
                            </div>
                            <!-- /.contact__content -->
                        </div>
                        <!-- /.contact-box -->
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                            <div class="contact__icon">
                                <i class="icon-health-report"></i>
                            </div>
                            <!-- /.contact__icon -->
                            <div class="contact__content">
                                <h2 class="contact__title">Horaires des médecins</h2>
                                <p class="contact__desc">Nos médecins qualifiés sont disponibles six jours sur sept, consultez notre horaire pour prendre rendez-vous.</p>
                                <a href="doctors-timetable.html" class="btn btn__white btn__outlined btn__rounded">
                                    <span>Calendrier</span><i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.contact__content -->
                        </div>
                        <!-- /.contact-box -->
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-box d-flex">
                            <div class="contact__icon">
                                <i class="icon-heart2"></i>
                            </div>
                            <!-- /.contact__icon -->
                            <div class="contact__content">
                                <h2 class="contact__title">Horaires de travail</h2>
                                <ul class="time__list list-unstyled mb-0">
                                    <li><span>Lundi - Vendredi</span><span>8.00 - 7:00 pm</span></li>
                                    <li><span>Samedi</span><span>9.00 - 10:00 pm</span></li>
                                    <li><span>Dimanche</span><span>10.00 - 12:00 pm</span></li>
                                </ul>
                            </div>
                            <!-- /.contact__content -->
                        </div>
                        <!-- /.contact-box -->
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact-info -->
        <!-- ========================
      About Layout 2
    =========================== -->
        <section class="about-layout2 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                        <div class="heading-layout2">
                            <h3 class="heading__title mb-60">Améliorer la qualité de votre <br> vie grâce à une meilleure santé.</h3>
                        </div>
                        <!-- /heading -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <div class="text-with-icon">
                            <div class="text__icon">
                                <i class="icon-doctor"></i>
                            </div>
                            <div class="text__content">
                                <p class="heading__desc font-weight-bold color-secondary mb-30">Notre objectif est de fournir des soins de qualité de manière courtoise, respectueuse et compatissante. Nous espérons que vous nous permettrez de prendre soin de vous et de nous efforcer d'être le premier et le meilleur
                                    choix en matière de soins de santé.
                                </p>

                                <a href="#" class="btn btn__secondary btn__rounded mb-70">
                                    <span>Trouver un médecin</span> <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <div id="listing-hours" class="listing-hours widget">
                                <h3 class="widget-title"><span>Heures d'ouverture</span></h3>
                                <div class="listing-hours-inner box-inner">
                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 60px ;font-weight: bold; " class="day"> Lundi </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                    </div>
                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 58px ;font-weight: bold; " class="day"> Mardi </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                        <div class="listing-day ">
                                            <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 30px ;font-weight: bold; " class="day"> Mercredi </span>
                                            <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                            <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                        </div>
                                    </div>

                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 60px ;font-weight: bold; " class="day"> Jeudi </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                    </div>
                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 29px ;font-weight: bold; " class="day"> Vendredi </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                    </div>
                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 42px ;font-weight: bold; " class="day"> Samedi </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                    </div>
                                    <div class="listing-day ">
                                        <span style="font-size: 1.4em ;color :rgb(60, 60, 60) ; word-spacing: 20px ;font-weight: bold; " class="day"> Dimanche </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="start">00:00 - </span>
                                        <span style="font-size: 1.2em ;color :rgb(90, 90, 90) ;word-spacing: 15px" class="end"> 23:59</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="about__text bg-white">
                            <p class="heading__desc mb-30">Nous travaillerons avec vous pour élaborer des plans de soins individualisés, y compris la gestion des maladies chroniques. Nous nous engageons à être le premier réseau de soins de santé de la région à fournir des soins centrés
                                sur le patient qui inspirent l'excellence clinique et de service.</p>
                            <ul class="list-items list-unstyled">
                                <li>Nous effectuons une série de tests pour nous aider à comprendre pourquoi vous ne vous sentez pas bien et à déterminer le traitement qui vous convient.</li>
                                <li>Nos médecins, infirmières et professionnels paramédicaux experts prennent en charge des patients présentant un large éventail de problèmes médicaux.
                                </li>
                                <li>Nous offrons une large gamme de soins et de soutien à nos patients, du diagnostic au traitement et à la réadaptation.
                                </li>
                            </ul>
                        </div>
                        <center>

                            <iframe width="650" height="365" src="https://www.youtube.com/embed/hO4vWDfmAAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </center>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.About Layout 2 -->
        <!-- ========================
        Services Layout 1
    =========================== -->
        <section class="services-layout1 services-carousel">
            <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-60">
                            <h2 class="heading__subtitle">Les meilleurs soins médicaux et de médecine générale!</h2>
                            <h3 class="heading__title">Fournir des soins médicaux à nos malades.</h3>
                        </div>
                        <!-- /.heading -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <!-- service item #1 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-head"></i>
                                    <i class="icon-head"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title">Clinique de neurologie</h4>
                                    <p class="service__desc">Certains neurologues reçoivent une formation surspécialisée axée sur un domaine particulier de les domaines, ces programmes de formation sont appelés bourses, et sont d'un à deux ans.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Soins neurocritiques</li>
                                        <li>Neuro-oncologie</li>
                                        <li>Neurologie gériatrique</li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                            <!-- service item #2 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-heart"></i>
                                    <i class="icon-heart"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title"> Clinique de cardiologie</h4>
                                    <p class="service__desc">Tous les cardiologues étudient les troubles du cœur, mais l'étude de l'adulte et les troubles cardiaques chez l'enfant sont formés pour prendre en charge les petits enfants et les maladies cardiaques chez l'adulte.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Soins neurocritiques</li>
                                        <li>Neuro-oncologie</li>
                                        <li>Neurologie gériatrique</li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                            <!-- service item #3 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-microscope"></i>
                                    <i class="icon-microscope"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title">Clinique de pathologie</h4>
                                    <p class="service__desc">La pathologie est l'étude de la maladie, elle est le pont entre la science et Médicament. Elle sous-tend également tous les aspects des soins aux patients, depuis les tests de diagnostic jusqu'au traitement.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Pathologie chirurgicale</li>
                                        <li>Histopathologie</li>
                                        <li> Cytopathologie </li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                            <!-- service item #4 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-dropper"></i>
                                    <i class="icon-dropper"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title">analyse de laboratoire</h4>
                                    <p class="service__desc">Analyser les concentrations de radon ou de descendants du radon avec des dispositifs passifs, ou la action d'étalonner des appareils de mesure du radon ou des produits de filiation du radon.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Soins du nouveau-né</li>
                                        <li>Apparence du cordon ombilical </li>
                                        <li>Techniques de repositionnement</li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                            <!-- service item #5 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-heart3"></i>
                                    <i class="icon-heart3"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title">Clinique pédiatrique</h4>
                                    <p class="service__desc">Les pédiatres voient les patients de la naissance au début de l'âge adulte pour s'assurer les enfants parviennent à rester en bonne santé. Nos soins comprennent des bilans de santé préventifs.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Laboratoire clinique</li>
                                        <li>Analyste de recherche</li>
                                        <li>Assurance qualité</li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                            <!-- service item #6 -->
                            <div class="service-item">
                                <div class="service__icon">
                                    <i class="icon-heart2"></i>
                                    <i class="icon-heart2"></i>
                                </div>
                                <!-- /.service__icon -->
                                <div class="service__content">
                                    <h4 class="service__title">Clinique cardiaque</h4>
                                    <p class="service__desc">Pour les personnes nécessitant un suivi supplémentaire, la clinique cardiaque offre un accès à des professionnels spécialisés dans le diagnostic et le traitement des maladies cardiaques.
                                    </p>
                                    <ul class="list-items list-items-layout1 list-unstyled">
                                        <li>Dégénérescence maculaire</li>
                                        <li>La rétinopathie diabétique</li>
                                        <li>Déchirure excessive</li>
                                    </ul>
                                    <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                        <span>Lire la suite</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.service__content -->
                            </div>
                            <!-- /.service-item -->
                        </div>
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.Services Layout 1 -->

        <!-- ========================
        Notses
    =========================== -->
        <section class="notes border-top pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="note font-weight-bold">
                            <i class="far fa-file-alt color-primary"></i>
                            <span>Offrir les soins de santé de demain à votre famille.</span>
                            <a href="doctors-timetable.html" class="btn btn__link btn__secondary">
                                <span>Voir les horaires des docteurs</span><i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /.col-sm-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
                            <div class="testimonials__rating">
                                <div class="testimonials__rating-inner d-flex align-items-center">
                                    <span class="total__rate">4.7</span>
                                    <div>
                                        <span class="overall__rate">D'après l'echelle de la Ministère de santé</span>
                                        <span>, basé sur 1345 votes</span>
                                    </div>
                                </div>
                                <!-- /.testimonials__rating-inner -->
                            </div>
                            <!-- /.testimonials__rating -->
                            <a href="appointment.html" class="btn btn__primary btn__rounded">
                                <span>RENDEZ VOUS</span> <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <!-- /.info__meta -->
                    </div>
                    <!-- /.col-sm-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.notes -->

        <!-- ======================
    Features Layout 2
    ========================= -->
        <section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
            <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                        <div class="heading__layout2 mb-50">
                            <h3 class="heading__title color-white">Clinique AL KAWTAR vous facilite l'accès aux meilleurs soins à des coûts optimisés.</h3>
                        </div>
                    </div>
                    <!-- /col-lg-5 -->
                </div>
                <!-- /.row -->
                <div class="row mb-100">
                    <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
                        <div class="heading__icon">
                            <i class="icon-insurance"></i>
                        </div>
                    </div>
                    <!-- /.col-lg-5 -->
                    <div class="col-sm-9 col-md-9 col-lg-6">
                        <p class="heading__desc font-weight-bold color-white mb-30">Avec sa gestion intégrée et globale de l'ensemble des prestations médicales et des services logistiques associés, le patient est accompagné à chaque étape de son séjour, afin de vivre son hospitalisation ou son séjour en toute
                            sérénité
                        </p>
                        <a href="#" class="btn btn__white btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                            <span>Nos valeurs fondamentales</span>
                        </a>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- Feature item #1 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/1.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <h4 class="feature__title">Conseils médicaux et bilans de santé</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #2 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/2.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-doctor"></i>
                                </div>
                                <h4 class="feature__title">Traitement médical de confiance </h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/3.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-ambulance"></i>
                                </div>
                                <h4 class="feature__title">Aide d'urgence disponible 24/7</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #4 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/4.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-drugs"></i>
                                </div>
                                <h4 class="feature__title">Professionnels de la recherche médicale </h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #5 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/5.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-first-aid-kit"></i>
                                </div>
                                <h4 class="feature__title">Seuls les médecins qualifiés</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #6 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/6.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-hospital"></i>
                                </div>
                                <h4 class="feature__title">Les derniers equipement</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #7 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/7.jpg" style="height: 180px ;width:270px;" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-expenses"></i>
                                </div>
                                <h4 class="feature__title"> Prix abordables pour tous les patients</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                    <!-- Feature item #8 -->
                    <div class="col-sm-6 col-md-6 col-lg-3" data-aos="fade-in" data-aos-duration="600">
                        <div class="feature-item">
                            <div class="feature__img">
                                <img src="assets/images/services/8.jpg" alt="service" loading="lazy">
                            </div>
                            <!-- /.feature__img -->
                            <div class="feature__content">
                                <div class="feature__icon">
                                    <i class="icon-bandage"></i>
                                </div>
                                <h4 class="feature__title">Des soins de qualité pour chaque patient</h4>
                            </div>
                            <!-- /.feature__content -->
                            <a href="#" class="btn__link">
                                <i class="icon-arrow-right icon-outlined"></i>
                            </a>
                        </div>
                        <!-- /.feature-item -->
                    </div>
                    <!-- /.col-lg-3 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                        <p class="font-weight-bold color-gray mb-0">Nous espérons que vous nous permettrez de prendre soin de vous et de nous efforcer d'être le premier et meilleur choix pour les soins de santé.
                        </p>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.Features Layout 2 -->

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

        <!-- ======================
     Work Process 
    ========================= -->
        <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay bg-overlay-secondary">
            <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
            <div class="container">
                <div class="row heading-layout2">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Prendre soin de votre santé et de celle de votre famille.</h2>
                    </div>
                    <!-- /.col-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
                        <h3 class="heading__title color-white" data-aos="fade-right" data-aos-duration="600">Nous fournissons tous les aspects de la pratique médicale pour toute votre famille!</h3>
                    </div>
                    <!-- /.col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1" data-aos="fade-left" data-aos-duration="600">
                        <p class="heading__desc font-weight-bold color-gray mb-40">Nous travaillerons avec vous pour élaborer des plans de soins individualisés, y compris la gestion des maladies chroniques. Si nous ne pouvons pas vous aider, nous pouvons vous fournir des références ou des conseils sur le type
                            de praticien dont vous avez besoin. Nous traitons toutes les demandes avec sensibilité et dans la plus stricte confidentialité.
                        </p>
                        <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled">
                            <li>Fractures et luxations</li>
                            <li>Évaluations de la santé</li>
                            <li>Injections de désensibilisation</li>
                            <li>Soins de haute qualité</li>
                            <li>Injections de désensibilisation</li>
                        </ul>
                    </div>
                    <!-- /.col-xl-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-container mt-90">
                            <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "infinite":false, "arrows": false, "dots": false, "responsive": [{"breakpoint": 1200, "settings": {"slidesToShow": 3}}, {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                                <!-- process item #1 -->
                                <div class="process-item" data-aos="flip-left" data-aos-duration="600">
                                    <span class="process__number">01</span>
                                    <div class="process__icon">
                                        <i class="icon-health-report"></i>
                                    </div>
                                    <!-- /.process__icon -->
                                    <h4 class="process__title">Remplissez votre demande médicale<br> <br><br></h4>
                                    <p class="process__desc">Medcity offre une couverture santé à bas prix pour les adultes à revenus limités, vous pouvez inscrire.
                                    </p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Horaires des médecins</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.process-item -->
                                <!-- process-item #2 -->
                                <div class="process-item" data-aos="flip-left" data-aos-duration="600">
                                    <span class="process__number">02</span>
                                    <div class="process__icon">
                                        <i class="icon-dna"></i>
                                    </div>
                                    <!-- /.process__icon -->
                                    <h4 class="process__title">Passez en revue vos antécédents médicaux familiaux<br> <br></h4>
                                    <p class="process__desc">Des examens de santé réguliers peuvent aider à trouver tous les problèmes, peuvent également les trouver tôt chances.
                                    </p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Commencer une vérification</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.process-item -->
                                <!-- process-item #3 -->
                                <div class="process-item" data-aos="flip-left" data-aos-duration="600">
                                    <span class="process__number">03</span>
                                    <div class="process__icon">
                                        <i class="icon-medicine"></i>
                                    </div>
                                    <!-- /.process__icon -->
                                    <h4 class="process__title">Choisissez entre nos programmes de soins <br> <br></h4>
                                    <p class="process__desc">Nous avons des protocoles pour protéger nos patients tout en continuant à fournir les soins nécessaires.</p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Explorer les programmes</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.process-item -->
                                <!-- process-item #4 -->
                                <div class="process-item" data-aos="flip-left" data-aos-duration="600">
                                    <span class="process__number">04</span>
                                    <div class="process__icon">
                                        <i class="icon-stethoscope"></i>
                                    </div>
                                    <!-- /.process__icon -->
                                    <h4 class="process__title">Vous présenter à des médecins hautement qualifiés</h4>
                                    <p class="process__desc">Notre personnel administratif et de soutien possède des compétences exceptionnelles et est formé pour vous aider. </p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Rencontrez nos médecins</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.process-item -->
                                <!-- process-item #5 -->
                                <div class="process-item" data-aos="flip-left" data-aos-duration="600">
                                    <span class="process__number">05</span>
                                    <div class="process__icon">
                                        <i class="icon-head"></i>
                                    </div>
                                    <!-- /.process__icon -->
                                    <h4 class="process__title">Votre processus Next personnalisé</h4>
                                    <p class="process__desc">Notre personnel administratif et de soutien possède des compétences exceptionnelles pour vous aider.
                                    </p>
                                    <a href="#" class="btn btn__secondary btn__link">
                                        <span>Rencontrez nos médecins</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- /.process-item -->
                            </div>
                            <!-- /.carousel -->
                        </div>
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="cta bg-light-blue">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <img src="assets/images/icons/alert2.png" alt="alert">
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-sm-12 col-md-7 col-lg-7">
                            <h4 class="cta__title">De vrais soins de santé pour votre famille !</h4>
                            <p class="cta__desc">Servir la communauté en améliorant la qualité de vie grâce à une meilleure santé. Nous avons mettre en place des protocoles pour protéger nos patients et notre personnel tout en continuant à fournir les soins médicalement nécessaires.
                            </p>
                        </div>
                        <!-- /.col-lg-7 -->
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <a href="appointment.html" class="btn btn__primary btn__secondary-style2 btn__rounded">
                                <span>RENDEZ-VOUS</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <!-- /.col-lg-3 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.cta -->
        </section>
        <!-- /.Work Process -->


        <!-- ========================= 
      Testimonials layout 2
      =========================  -->
        <section class="testimonials-layout2 pt-130 pb-40">
            <div class="container">
                <div class="testimonials-wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <div class="heading-layout2">
                                <h3 class="heading__title">Paroles de patients !</h3>
                            </div>
                            <!-- /.heading -->
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
                            <div class="slider-nav mb-60">
                                <div class="testimonial__meta">
                                    <div class="testimonial__thmb">
                                        <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                                    </div>
                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Slimani </h4>
                                        <p class="testimonial__meta-desc">Mohammed</p>
                                    </div>
                                </div>
                                <!-- /.testimonial-meta -->
                                <div class="testimonial__meta">
                                    <div class="testimonial__thmb">
                                        <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                                    </div>
                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Maaraf </h4>
                                        <p class="testimonial__meta-desc">Omar</p>
                                    </div>
                                </div>
                                <!-- /.testimonial-meta -->
                                <div class="testimonial__meta">
                                    <div class="testimonial__thmb">
                                        <img src="assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                                    </div>
                                    <!-- /.testimonial-thumb -->
                                    <div>
                                        <h4 class="testimonial__meta-title">Mourabiti </h4>
                                        <p class="testimonial__meta-desc">Youssef</p>
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
        <!-- /.testimonials layout 2 -->


        <!-- ========================
       gallery
      =========================== -->
        <section class="gallery pt-0 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                            <a class="popup-gallery-item" href="assets/images/gallery/1.jpg">
                                <img src="assets/images/gallery/1.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/2.jpg">
                                <img src="assets/images/gallery/2.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/3.jpg">
                                <img src="assets/images/gallery/3.jpg" alt="gallery img">
                            </a>
                            <a class="popup-gallery-item" href="assets/images/gallery/4.jpg">
                                <img src="assets/images/gallery/4.jpg" alt="gallery img">
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


        <!-- ==========================
        contact layout 3
    =========================== -->
        <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60" id="reserver" style="scroll-behavior: smooth;">
            <div class="bg-img"><img src="assets/images/banners/3.jpg" alt="banner"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7">
                        <div class="contact-panel mb-50" data-aos="fade-right" data-aos-duration="600">
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
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <i class="form-group-icon"><ion-icon name="medkit-outline"></ion-icon></i>
                                                <select class="form-control" name="specialite">
                                                <option value="0" disabled>Specialité</option>
                                                <option value="Neurologie">Neurologie</option>
                                                <option value="Cardiologie">Cardiologie</option>
                                                <option value="Pathologie">Pathologie</option>
                                                <option value="Laboratoire">Laboratoire - Analyse</option>
                                                <option value="Cardiaque">Cardiaque</option>
                                                </select> </div>
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
                        </div>
                    </div>
                    <!-- /.col-lg-7 -->
                    <div class="col-sm-12 col-md-12 col-lg-5" data-aos="fade-left" data-aos-duration="600">
                        <div class="heading heading-light mb-30">
                            <h3 class="heading__title mb-30">Aider les patients du monde entier !!</h3>
                            <p class="heading__desc">Notre personnel s'efforce de rendre chaque interaction avec les patients claire, concise et attrayant. Soutenez le travail important de l'hôpital Medicsh en faisant un don indispensable aujourd'hui.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                                <i class="fas fa-heart"></i> <span>Faire une donation</span>
                            </a>
                            <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                                <div class="video__player">
                                    <i class="fa fa-play"></i>
                                </div>
                                <span class="video__btn-title color-white">Voir Video</span>
                            </a>
                        </div>
                        <div class="text__block">
                            <p class="text__block-desc color-white font-weight-bold">Nous offrons une gamme complète de plans pour familles et individus à chaque étape de la vie, avec des limites annuelles allant de 1,5 million de livres sterling à un nombre illimité.</p>
                            <div class="sinature color-white">
                                <span class="font-weight-bold">Youssef MOURABITI</span><span>, Clinique AL KAWTAR <b> CEO </b></span>
                            </div>
                        </div>
                        <!-- /.text__block -->
                        <div class="slick-carousel clients-light mt-20" data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                            <div class="client">
                                <img src="assets/images/clients/1.png" alt="client">
                                <img src="assets/images/clients/1-.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                            <div class="client">
                                <img src="assets/images/clients/2.png" alt="client" style="margin-top: 10px;">
                                <img src="assets/images/clients/2-.png" alt="client" style="margin-top: 10px;">
                            </div>
                            <!-- /.client -->
                            <div class="client">
                                <img src="assets/images/clients/3.png" alt="client">
                                <img src="assets/images/clients/3.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                            <div class="client" style="margin-top: 10px;">
                                <img src="assets/images/clients/4.png" alt="client">
                                <img src="assets/images/clients/4.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                            <div class="client">
                                <img src="assets/images/clients/5.png" alt="client">
                                <img src="assets/images/clients/5.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                            <div class="client">
                                <img src="assets/images/clients/6.png" alt="client">
                                <img src="assets/images/clients/6.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                            <div class="client">
                                <img src="assets/images/clients/7.png" alt="client">
                                <img src="assets/images/clients/7.png" alt="client" style="-webkit-filter:brightness(-100%);filter:brightness(-100%)">
                            </div>
                            <!-- /.client -->
                        </div>
                        <!-- /.carousel -->
                    </div>
                    <!-- /.col-lg-5 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.contact layout 3 -->

        <!-- ======================
      Blog Grid
    ========================= -->
        <section class="blog-grid pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="heading text-center mb-40">
                            <h2 class="heading__subtitle">Bibliothèque de ressources</h2>
                            <h3 class="heading__title">Articles récents</h3>
                        </div>
                        <!-- /.heading -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- Post Item #1 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.PNG" alt="post image" loading="lazy">
                                </a>
                            </div>
                            <!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a href="#">Mental Health</a>
                                </div>
                                <!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                    <span class="post__meta-date">Jan 30, 2022</span>
                                    <a class="post__meta-author" href="#">Martin King</a>
                                </div>
                                <h4 class="post__title"><a href="#">6 conseils pour protéger votre santé mentale lorsque vous êtes malade</a></h4>

                                <p class="post__desc">Il est normal de ressentir de l'anxiété, de l'inquiétude et du chagrin chaque fois que l'on vous diagnostique une maladie qui est certainement vraie si vous êtes testé positif au COVID-19, ou si vous êtes présumé positif...
                                </p>
                                <a href="#" class="btn btn__secondary btn__link btn__rounded">
                                    <span>Lire la suite</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.post__body -->
                        </div>
                        <!-- /.post-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <!-- Post Item #2 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/2.PNG" alt="post image" loading="lazy">
                                </a>
                            </div>
                            <!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a href="#">Infectieux</a><a href="#">Tips</a>
                                </div>
                                <!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                    <span class="post__meta-date">Jan 30, 2022</span>
                                    <a class="post__meta-author" href="#">John Ezak</a>
                                </div>
                                <h4 class="post__title"><a href="#">Vous n'êtes pas sûr de porter un masque facial ? Voici comment et pourquoi</a></h4>
                                <p class="post__desc">Cela signifie que vous devez toujours suivre les ordres d'abri sur place dans votre communauté. Mais lorsque vous vous aventurez à l'épicerie, à la pharmacie ou à l'hôpital...
                                </p>
                                <a href="#" class="btn btn__secondary btn__link btn__rounded">
                                    <span>Lire la suite</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.post__body -->
                        </div>
                        <!-- /.post-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <!-- Post Item #3 -->
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="post-item">
                            <div class="post__img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/3.PNG" alt="post image" loading="lazy">
                                </a>
                            </div>
                            <!-- /.post__img -->
                            <div class="post__body">
                                <div class="post__meta-cat">
                                    <a href="#">Mode de vie</a><a href="#">Nutrition</a>
                                </div>
                                <!-- /.blog-meta-cat -->
                                <div class="post__meta d-flex">
                                    <span class="post__meta-date">Jan 28, 2022</span>
                                    <a class="post__meta-author" href="#">Saul Wade</a>
                                </div>
                                <h4 class="post__title"><a href="#">Conseils pour manger sainement lorsque vous travaillez à domicile </a></h4>

                                <p class="post__desc">Il est normal de ressentir de l'anxiété, de l'inquiétude et du chagrin chaque fois que l'on vous diagnostique une maladie qui est certainement vraie si vous êtes testé positif au COVID-19, ou si vous êtes présumé positif...
                                </p>
                                <a href="#" class="btn btn__secondary btn__link btn__rounded">
                                    <span>Lire la suite</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.post__body -->
                        </div>
                        <!-- /.post-item -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.blog Grid -->

        <!-- ========================
      Footer
    ========================== -->
        <footer class="footer">
            <div class="footer-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-3">
                            <div class="footer-widget-about">
                                <img src="assets/images/logo/logo-light.png" alt="logo" class="mb-30">
                                <p class="color-gray">Notre objectif est de fournir des soins de qualité de manière courtoise, respectueuse et compatissante. Nous espérons que vous nous permettrez de prendre soin de vous et de nous efforcer d'être les premiers et les meilleurs
                                    choix pour vos soins de santé familiaux.
                                </p>
                                <a href="appointment.html" class="btn btn__primary btn__primary-style2 btn__link">
                                    <span>Prendre un rendez-vous</span> <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-xl-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
                            <div class="footer-widget-nav">
                                <h6 class="footer-widget__title">Departments</h6>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Clinique de neurologie</a></li>
                                        <li><a href="#">Clinique de Cardiologie</a></li>
                                        <li><a href="#">Clinique de Pathologie</a></li>
                                        <li><a href="#">Laboratoire D'analyses</a></li>
                                        <li><a href="#">Clinqiue Pediatrique</a></li>
                                        <li><a href="#">Clinique Cardiaque</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-sm-6 col-md-6 col-lg-2">
                            <div class="footer-widget-nav">
                                <h6 class="footer-widget__title">Links</h6>
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="#">À propos</a></li>
                                        <li><a href="#">Notre Clinique</a></li>
                                        <li><a href="#">Médecins</a></li>
                                        <li><a href="#">News & Media</a></li>
                                        <li><a href="#reserver">Appointments</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="footer-widget-contact">
                                <h6 class="footer-widget__title color-heading">Contacts rapides</h6>
                                <ul class="contact-list list-unstyled">
                                    <li>Si vous avez des questions ou besoin d'aide, n'hésitez pas à contacter notre équipe.</li>
                                    <li>
                                        <a href="tel:01061245741" class="phone__number">
                                            <i class="icon-phone"></i> <span>0536629878</span>
                                        </a>
                                    </li>
                                    <li class="color-body">Rte Immouzer 17 - FES - MAROC</li>
                                </ul>
                                <div class="d-flex align-items-center">
                                    <a href="contact-us.html" class="btn btn__primary btn__link mr-30">
                                        <i class="icon-arrow-right"></i> <span>Obtenir des directions</span>
                                    </a>
                                    <ul class="social-icons list-unstyled mb-0">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" style="margin-left: -7px;"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" style="margin-left: -7px;"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                    <!-- /.social-icons -->
                                </div>
                            </div>
                            <!-- /.footer-widget__content -->
                        </div>
                        <!-- /.col-lg-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-primary -->
            <div class="footer-secondary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <span class="fz-14">&copy; Copyright © 2022 Clinique AL KAWTAR- Tous droits réservés</span>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <nav>
                                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookies</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-secondary -->
        </footer>
        <!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
    </div>
    <!-- /.wrapper -->
    <!-- Chatbot  -->
    <script src="https://code.tidio.co/usbojdl9rs2sy5nc38ozkzzvn4dapdm3.js" async></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>