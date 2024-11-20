<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Alkawtar | Table d'administration </title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Lobster&family=Montserrat:wght@400;600&family=Poppins:wght@100&family=Roboto:wght@300;700&family=Ubuntu&display=swap"rel="stylesheet">
    <link rel="icon" href="https://multipurposethemes.com/admin/doclinic-admin-template/images/favicon.ico">

    <link rel="icon" href="{{ asset('dashboard/images/favicon.ico') }}">
    <link href="{{ asset('assets/favicon/favicon.png') }}" rel="icon">

    <link rel="stylesheet" href="{{ asset('dashboard/main/css/notes.css') }}">
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('dashboard/main/css/vendors_css.css') }}">

    <link rel="stylesheet" href="{{ asset('dashboard/main/css/calendar.css') }}">
    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('dashboard/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/main/css/skin_color.css') }}">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <!-- logo-->
                    <div class="logo-lg">
                        <span class="light-logo"><img src="{{ asset('dashboard/images/logo-dark-text.png') }}" alt="logo"></span>
                        <span class="dark-logo"><img src="{{ asset('dashboard/images/logo-light-text.png') }}" alt="logo"></span>
                    </div>
                </a>
            </div>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                                <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3">
                                                    <i class="icon-Search"><span class="path1"></span><span class="path2"></span></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" data-bs-toggle="dropdown" title="User">
                                <div class="d-flex pt-1">
                                    <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary">{{ Auth::user()->prenom }}</p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute">{{ Auth::user()->role }}</small>
                                    </div>
                                    <img src="{{ asset('dashboard/images/avatar/1--.png') }}" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                                </div>
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="{ route('profile') }}"><i class="ti-user text-muted me-2"></i> Profile</a>
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="ti-lock text-muted me-2"></i> Logout
                                        </button>
                                    </form>
                                                                    </li>
                            </ul>
                        </li>
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
                                <i class="icon-Position"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>




@yield('content')


    <!-- Vendor JS -->
    <script src="{{ asset('dashboard/main/js/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard/main/js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('dashboard/icons/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('dashboard/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('https://rawgit.com/nnnick/Chart.js/v1.0.2/Chart.min.js') }}"></script>

    <script src="{{ asset('dashboard/main/js/template.js') }}"></script>
    <script src="{{ asset('dashboard/main/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('dashboard/main/js/notes.js') }}"></script>
    <script src="{{ asset('dashboard/main/js/calendar.js') }}"></script>
    <script src="{{ asset('dashboard/main/js/pages/patient-details.js')}}"></script>

    <script src="{{ asset('dashboard/assets/vendor_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_components/perfect-scrollbar-master/perfect-scrollbar.jquery.min.e4.del')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_components/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_components/fullcalendar/fullcalendar.min.js')}}"></script>



</body>


</html>
