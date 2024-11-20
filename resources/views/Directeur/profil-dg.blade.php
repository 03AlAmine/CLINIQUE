@extends('Patient/base-dg')

@section('content')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">DG Details</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">DG Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body box-profile">
                                    <div class="row">
                                        <div class="col-12">
                                            <div>
                                                <p>Email :<span
                                                        class="text-gray ps-10">{{ Auth::user()->email }}</span>
                                                </p>
                                                <p>Phone :<span
                                                        class="text-gray ps-10">{{ Auth::user()->telephone }}</span>
                                                </p>
                                                <p>Address :<span
                                                        class="text-gray ps-10">{{ Auth::user()->adresse }}</span>
                                                </p>
                                                <p>Maladie :
                                                    <span class="text-gray ps-10">
                                                        {{ Auth::user()->patient ? Auth::user()->patient->type_maladie : 'Aucune maladie associée' }}
                                                    </span>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div>
                                                <div class="map-box">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.170076265476!2d-1.898528284468699!3d34.65040749341715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787cbdbf96caef%3A0x23a99f5d4e9a3161!2s%C3%89cole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es!5e0!3m2!1sfr!2sma!4v1653901515026!5m2!1sfr!2sma"
                                                        class="w-p100" height="175" style="border:0"
                                                        allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>

                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Specialite</h4>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center">
                                        <img
											src="{{ asset('dashboard/images/avatar/doctor.png')}}" class="w-100 bg-primary-light rounded10 me-15" alt="" />
                                        <div>
                                            <h4 class="mb-0">Dr en Crypto</h4>
                                            <p class="text-muted">Cardiologists</p>
                                            <div class="d-flex">
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star"></i>
                                                <i class="text-warning fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-12">

                            <div class="box">
                                <div class="box-body text-end min-h-150"
                                    style="background-image:url({{ asset('dashboard/images/gallery/landscape14.jpg')}}); background-repeat: no-repeat; background-position: center;background-size: cover;">
                                </div>
                                <div class="box-body wed-up position-relative">
                                    <div class="d-md-flex align-items-center">
                                        <div class=" me-20 text-center text-md-start">
                                            <img src="{{ asset('dashboard/images/avatar/1--.png')}}" class="bg-success-light rounded10"
                                                alt="" style="width: 120px;" />
                                            <div class="text-center my-10">

                                            </div>
                                        </div>
                                        <div class="mt-40">
                                            <h4 class="fw-600 mb-5" style="margin-top: 20px;">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                                                </h4>
                                            <p><i class="fa fa-clock-o"></i>compte créer le {{ Auth::user()->created_at }}
                                                 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body pt-0">
                                    <h4>Story About Disease</h4>
                                    <p>Bienvenue chez Clinique-Alkawtar, un nouveau réseau des hôpitaux et cliniques
                                        localisé dans des différentes régions au Maroc (Fes, Oujda,…) .
                                        Notre objectif est d’accueillir, de soigner et de guérir les familles du
                                        différenr régions du maroc, en leur fournissant une santé de qualité et des
                                        soins chaleureux et
                                        pratiques dans toutes les régions de Maroc</p>
                                    <p>Clinique-ALkawtar met nos professionnels, collaborateurs et infrastructures de
                                        pointe à la disposition de tous les habitants du Casablanca, pour améliorer la
                                        vie de nos patients.</p>
                                </div>
                            </div>
                            <div class="row">


                            </div>
                        </div>
                    </div>

                </section>
                <!-- /.content -->
            </div>
        </div>
        <script src="./js/calendar.js"></script>
        <!-- /.content-wrapper -->






        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- ./side demo panel -->

    <!-- Sidebar -->



    <!-- Page Content overlay -->


@endsection
