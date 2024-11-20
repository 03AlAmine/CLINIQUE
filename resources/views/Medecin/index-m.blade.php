@extends('base_header')

@section('content')
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar position-reulative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 100%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li>
                            <a href="{{ url('home_patient') }}">
                                <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('appointement') }}">
                                <i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
                                <span>Appointments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{ route('rapport') }}">
                                <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
                                <span>Rapport</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profil') }}">
                                <i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
                                <span>Profil</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-body px-0 text-center">
                                        <div style="min-height: 156px;">
                                            <div id="chart124"></div>
                                        </div>
                                        <div class="mt-15 d-inline-block">
                                            <div class="text-start mb-10">
                                                <span class="badge badge-xl badge-dot badge-primary me-15"></span>

                                                Women Nombre de femme
                                            </div>
                                            <div class="text-start">
                                                <span class="badge badge-xl badge-dot badge-primary-light me-15"></span>
                                                Man Pourcentage
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="box">
                                    <div class="box-body">
                                        <h4>Vos patients aujourd'hui</h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="fs-40 my-0" style="color:#3596f7">

                                            </h2>
                                            <!--
                                                        <div>
                                                            <span class="badge badge-pill badge-success-light"><i
                                                                    class="fa fa-angle-up me-10"></i> 39%</span>
                                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                        <h4>les patients urgent</h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="fs-40 my-0" style="color:#ee3158"></h2>
                                            <!--
                                                        <div>
                                                            <span class="badge badge-pill badge-danger-light"><i
                                                                    class="fa fa-angle-down me-10"></i>04%</span>
                                                        </div>
        -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box b-0 bg-transparent no-shadow">
                            <div class="box-body pt-5 pb-0 px-0">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Vos prochains patients </h4>
                                    <a href="./patients.html" class="">tous les patients <ion-icon
                                            name="chevron-forward-outline">
                                        </ion-icon></a>
                                </div>
                            </div>
                        </div>

                        <div class="box">
                            <div class="box-body p-15">
                                <div class="mb-10 d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">

                                    </div>
                                    <div
                                        class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <h6 class="mb-0">

                                                </h6>
                                                <p class="mb-0 fs-12 text-mute"></p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i
                                                    class="ti-more-alt rotate-90"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                    Details</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                    Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-10 d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">

                                    </div>
                                    <div
                                        class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <h6 class="mb-0">
                                                </h6>
                                                <p class="mb-0 fs-12 text-mute"></p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i
                                                    class="ti-more-alt rotate-90"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                    Details</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i> Lab
                                                    Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-600 min-w-120">

                                    </div>
                                    <div
                                        class="w-p100 p-10 rounded10 justify-content-between align-items-center d-flex bg-lightest">
                                        <div class="d-flex justify-content-between align-items-center">

                                            <div>
                                                <h6 class="mb-0">
                                                </h6>
                                                <p class="mb-0 fs-12 text-mute"></p>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#"><i
                                                    class="ti-more-alt rotate-90"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ti-import"></i>
                                                    Details</a>
                                                <a class="dropdown-item" href="#"><i class="ti-export"></i>
                                                    Lab
                                                    Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">les Types des visites</h4>
                            </div>
                            <div class="box-body">
                                <div class="news-slider owl-carousel owl-sl">
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i>

                                                </p>
                                                <span class="text-dark fs-16"></span>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between align-items-end py-10">
                                            <div>
                                                <a href="./appointments.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                    Patient</a>
                                            </div>
                                            <div>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                        class="fa fa-check"></i> Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i>
                                                </p>
                                                <span class="text-dark fs-16">
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between align-items-end py-10">
                                            <div>
                                                <a href="./appointments.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                    Patient</a>
                                            </div>
                                            <div>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                        class="fa fa-check"></i> Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-10">
                                            <div class="d-flex flex-column flex-grow-1 fw-500">
                                                <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i>
                                                </p>
                                                <span class="text-dark fs-16">z
                                                </span>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-between align-items-end py-10">
                                            <div>
                                                <a href="./appointments.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light">Contact
                                                    Patient</a>
                                            </div>
                                            <div>
                                                <a href="./patients.php"
                                                    class="waves-effect waves-light btn btn-sm btn-primary-light"><i
                                                        class="fa fa-check"></i> Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Sticky Notes</h4>
                            </div>
                            <div class="box-body">
                                <div id="app">
                                    <button class="add-note" type="button"
                                        style="background-color:#c8c9ee; border-radius:50%;border : none ;width:30px;height:30px">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Analytics</h4>
                            </div>
                            <div class="box-body ps-0">
                                <div id="overview_trend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Appointments Overview</h4>
                            </div>
                            <div class="box-body">
                                <div id="chart432"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title">Overal appointment</h4>
                            </div>
                            <div class="box-body">
                                <div id="appointment_overview"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar">

        <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i
                    class="ion ion-close text-white"></i></span> </div>
        <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i
                        class="mdi mdi-message-text"></i></a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
                        class="mdi mdi-playlist-check"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Users</p>
                    <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                </div>
                <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover mt-20">
                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="../images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="../images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="../images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="../images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="../images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="../images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="../images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="../images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="fs-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Todo List</p>
                    <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
                </div>
                <ul class="todo-list mt-20">
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

    </div>



    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
    <script src="../assets/vendor_components/date-paginator/moment.min.js"></script>
    <script src="../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.e0.del"></script>
    <script src="../assets/vendor_components/date-paginator/bootstrap-datepaginator.min.js"></script>

    <!-- Doclinic App <script src="js/pages/dashboard2.js"></script>-->
@endsection
