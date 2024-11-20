
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Acceuil | Clinique DieAmnie</title>

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
                                <a href="{{ route('home') }}" class="nav__item-link">ACCEUIL</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('about') }}" class="nav__item-link">À PROPOS</a>
                            </li>
                            <!-- /.nav-item
                            <li class="nav__item">
                                <a href="{{ route('blog') }}" class="nav__item-link">BLOG</a>
                            </li> -->
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="{{ route('contact') }}" class="nav__item-link">CONTACTER</a>
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
                            <a href="{{ route('login') }}" >CONNEXION</a>
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


@yield('content')
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

