@extends('base_header')

@section('content')

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
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
                    <section class="content">
                        <div class="row">
                            <div class="col-xxxl-9 col-xl-8 col-12">
                                <div class="mb-20 d-flex justify-content-between align-items-center">
                                    <h1 class="my-md-0 mb-10"></h1>
                                </div>
                                <div class="row">
                                    <!-- Battement de cœur -->
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box bg-primary">
                                            <div class="box-body">
                                                <div class="mb-15 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Battement de cœur</h4>
                                                    <ion-icon name="heart-outline" style="width: 14px; height:14px;"></ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-400 my-0">75/118</h5>
                                                </div>
                                            </div>
                                            <div class="box-body pt-0 ps-0">
                                                <div id="heartrate"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fever -->
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="mb-15 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Fever</h4>
                                                    <ion-icon name="heart-outline"></ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-400 my-0">100.8<small>&deg;F</small></h5>
                                                </div>
                                            </div>
                                            <div class="box-body pt-0 ps-0">
                                                <div id="fever"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bill Due -->
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box">
                                            <div class="box-body" style="height:140px">
                                                <div class="mb-5 pb-1 d-flex justify-content-between align-items-center">
                                                    <h4 class="my-0">Bill Due</h4>
                                                    <ion-icon name="card-outline"></ion-icon>
                                                </div>
                                                <div>
                                                    <h5 class="fw-300 my-0">$214.86</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Heure -->
                                    <div class="col-xl-3 col-lg-6 col-12">
                                        <div class="box overflow-hidden">
                                            <div class="box-body" style="height:140px">
                                                <div>
                                                    <h4 class="mt-0 mb-5">Heure</h4>
                                                </div>
                                                <div class="mt-10 text-center d-flex align-items-center justify-content-between">
                                                    <div id="clock" class="glow" style="color:#5156be; margin-top:25px;">00:00:00</div>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            #clock {
                                                user-select: none;
                                            }
                                            .glow {
                                                font-size: 25px;
                                                font-weight: bold;
                                                animation: glow 1s ease-in-out infinite alternate;
                                            }
                                        </style>
                                        <script>
                                            setInterval(displayTime, 1000);

                                            function displayTime() {
                                                const timeNow = new Date();
                                                let hours = timeNow.getHours();
                                                let minutes = timeNow.getMinutes();
                                                let seconds = timeNow.getSeconds();

                                                hours = hours < 10 ? '0' + hours : hours;
                                                minutes = minutes < 10 ? '0' + minutes : minutes;
                                                seconds = seconds < 10 ? '0' + seconds : seconds;

                                                let timeStr = hours + ":" + minutes + ":" + seconds;

                                                document.getElementById('clock').innerText = timeStr;
                                            }

                                            displayTime();
                                        </script>
                                    </div>

                                    <!-- Sticky Notes -->
                                    <div class="col-xxxl-8 col-xl-7 col-12">
                                        <div class="box">
                                            <div class="box-header no-border pb-0">
                                                <h4 class="box-title">Sticky Notes</h4>
                                            </div>
                                            <div class="box-body">
                                                <div id="app">
                                                    <button class="add-note" type="button"
                                                            style="background-color:#c8c9ee; border-radius:50%; border : none; width:30px; height:30px">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Doctor Profile -->
                                    <div class="col-xxxl-4 col-xl-5 col-12">
                                        <div class="box">
                                            <div class="box-body px-0 bb-1 text-center">
                                                <div class="avatar avatar-lg status-success">
                                                    <img src="{{ asset('dashboard/images/avatar/doctor.png') }}" class="rounded-circle bg-primary" alt="" />
                                                </div>
                                                <h4 class="mt-20 mb-15">Dr. Omar MAARAF</h4>
                                                <p class="mb-0">Cardiologists</p>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-6 be-1">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('dashboard/images/health-1-color.png') }}" class="img-fluid me-10 w-50" alt="">
                                                            <div>
                                                                <h3 class="mb-0"></h3>
                                                                <p class="mb-2 text-muted">etat Urgent</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('dashboard/images/health-2-color.png') }}" class="img-fluid me-10 w-50" alt="">
                                                            <div>
                                                                <h3 class="mb-0"></h3>
                                                                <p class="mb-2 text-muted">Patients</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Sidebar -->
                            <div class="col-xxxl-3 col-xl-4 col-12">
                                <a class="box box-body mb-5" href="#">
                                    <div class="d-flex align-items-center">
                                        <img class="me-15 avatar avatar-lg bg-primary-light rounded-circle"
                                             src="{{ asset('dashboard/images/avatar/doctor.png') }}" alt="...">
                                        <div class="text-start">
                                            <h2 class="text-primary mb-0 fs-26">Dr. Omar Maaraf</h2>
                                            <h4>Cardiologists</h4>
                                        </div>
                                    </div>
                                </a>
                                <div class="box b-0 bg-transparent no-shadow">
                                    <div class="box-body pb-0 px-0">
                                        <h4 class="mb-0">Calendrier</h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-body">
                                        <div class="calendar">
                                            <div class="calendar-header">
                                                <span class="month-picker" id="month-picker">February</span>
                                                <div class="year-picker">
                                                    <span class="year-change" id="prev-year"><pre><</pre></span>
                                                    <span id="year">2021</span>
                                                    <span class="year-change" id="next-year"><pre>></pre></span>
                                                </div>
                                            </div>
                                            <div class="calendar-body">
                                                <div class="calendar-week-day">
                                                    <div>Dim</div>
                                                    <div>Lun</div>
                                                    <div>Mar</div>
                                                    <div>Mer</div>
                                                    <div>Jeu</div>
                                                    <div>Ven</div>
                                                    <div>Sam</div>
                                                </div>
                                                <div class="calendar-days"></div>
                                            </div>

                                            <div class="month-list"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title">
                <span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar">
                    <i class="ion ion-close text-white"></i>
                </span>
            </div>

            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
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
                                <img src="{{ asset('images/avatar/1.jpg') }}" alt="...">
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
                                <img src="{{ asset('images/avatar/2.jpg') }}" alt="...">
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
                                <img src="{{ asset('images/avatar/3.jpg') }}" alt="...">
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
                                <img src="{{ asset('images/avatar/4.jpg') }}" alt="...">
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
                            <span class="text-line">Nulla vitae purus</span>
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <!-- More items... -->
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>


        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- ./side demo panel -->

    <!-- Sidebar -->



    <!-- Page Content overlay -->



@endsection
