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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Appointments</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointments</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body p-10">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box no-border no-shadow">
                            <div class="box-header with-border">
                                <h4 class="box-title">Draggable Events</h4>
                            </div>
                            <div class="box-body p-0">
                                <!-- the events -->
                                <div id="external-events">
                                    <div class="external-event m-15 bg-primary" data-class="bg-primary"><i
                                            class="fa fa-hand-o-right"></i>Lunch</div>
                                    <div class="external-event m-15 bg-warning" data-class="bg-warning"><i
                                            class="fa fa-hand-o-right"></i>Go home</div>
                                    <div class="external-event m-15 bg-info" data-class="bg-info"><i
                                            class="fa fa-hand-o-right"></i>Do homework</div>
                                    <div class="external-event m-15 bg-success" data-class="bg-success"><i
                                            class="fa fa-hand-o-right"></i>Work on UI design</div>
                                    <div class="external-event m-15 bg-danger" data-class="bg-danger"><i
                                            class="fa fa-hand-o-right"></i>Sleep tight</div>
                                </div>
                                <div class="event-fc-bt mx-15 my-20">
                                    <!-- checkbox -->
                                    <div class="checkbox">
                                        <input id="drop-remove" type="checkbox">
                                        <label for="drop-remove">
                                            Remove after drop
                                        </label>
                                    </div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-events"
                                        class="btn btn-success w-p100 my-10">
                                        <i class="ti-plus"></i> Add New Event
                                    </a>
                                </div>
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

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- ./side demo panel -->
@endsection
