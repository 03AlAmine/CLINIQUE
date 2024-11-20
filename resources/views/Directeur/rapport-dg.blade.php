<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from multipurposethemes.com/admin/doclinic-admin-template/main/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 13:54:31 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://multipurposethemes.com/admin/doclinic-admin-template/images/favicon.ico">
	<link href="../assets/favicon/favicon.png" rel="icon">
    <title>Doclinic - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
	<div id="loader"></div>

	<header class="main-header">

		<div class="d-flex align-items-center logo-box justify-content-start">
			<!-- Logo -->
			<a href="index-2.html" class="logo">
				<!-- logo-->


				<div class="logo-lg">
					<span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
					<span class="dark-logo"><img src="../images/lofgo-light-text.png" alt="logo"></span>
				</div>
			</a>
		</div>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<div class="app-menu">
				<ul class="header-megamenu nav">
					<li class="btn-group nav-item">
						<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
							data-toggle="push-menu" role="button">
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
											<button class="btn" type="submit" id="button-addon3"><i
													class="icon-Search"><span class="path1"></span><span
														class="path2"></span></i></button>
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
						<a href="#"
							class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
							data-bs-toggle="dropdown" title="User">
							<div class="d-flex pt-1">
								<div class="text-end me-10">
									<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Johen Doe</p>
									<small class="fs-10 mb-0 text-uppercase text-mute">Admin</small>
								</div>
								<img src="../images/avatar/doctor.png"
									class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
							</div>
						</a>
						<ul class="dropdown-menu animated flipInX">
							<li class="user-body">
								<a class="dropdown-item" href="extra_profile.html"><i
										class="ti-user text-muted me-2"></i> Profile</a>
								<a class="dropdown-item" href="auth_login.html"><i
										class="ti-lock text-muted me-2"></i> Logout</a>
							</li>
						</ul>
					</li>
					<li class="btn-group nav-item d-lg-inline-flex d-none">
						<a href="#" data-provide="fullscreen"
							class="waves-effect waves-light nav-link full-screen btn-warning-light"
							title="Full Screen">
							<i class="icon-Position"></i>
						</a>
					</li>
					<!-- Notifications -->

					<!-- Control Sidebar Toggle Button -->


				</ul>
			</div>
		</nav>
	</header>

  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
	<!-- sidebar-->
	<section class="sidebar position-relative">
		<div class="multinav">
			<div class="multinav-scroll" style="height: 100%;">
				<!-- sidebar menu-->
				<ul class="sidebar-menu" data-widget="tree">
					<li>
						<a href="./index2.php">
							<i class="icon-Layout-4-blocks"><span class="path1"></span><span
									class="path2"></span></i>
							<span>Dashboard</span>

						</a>

					</li>
					<li>
						<a href="appointments.php">
							<i class="icon-Barcode-read"><span class="path1"></span><span
									class="path2"></span></i>
							<span>Appointments</span>
						</a>
					</li>
					<li>
						<a href="./patients.php">
							<i class="icon-Compiling"><span class="path1"></span><span class="path2"></span></i>
							<span>Patients</span>
						</a>

					</li>
					<li>
						<a href="reports.html">
							<i class="icon-Settings-1"><span class="path1"></span><span
									class="path2"></span></i>
							<span>Reports</span>
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
					<h4 class="page-title">Lab Reports</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item active" aria-current="page">Lab Reports</li>
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
					<div class="box-body">
					  <h4 class="box-title">Radiology List</h4>
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th class="bb-2">No.</th>
										<th class="bb-2">Test</th>
										<th class="bb-2">Lab</th>
										<th class="bb-2">Priority</th>
										<th class="bb-2">Cost</th>
										<th class="bb-2">Handling</th>
										<th class="bb-2">Coll. By</th>
										<th class="bb-2">Status</th>
										<th class="bb-2">Result</th>
										<th class="bb-2">Signed</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Blood Count</td>
										<td>Microbiology</td>
										<td><span class="badge badge-warning">Law</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>CMS</td>
										<td>Microbiology</td>
										<td><span class="badge badge-danger">High</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Covid</td>
										<td>Microbiology</td>
										<td><span class="badge badge-warning">Law</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Urin</td>
										<td>Microbiology</td>
										<td><span class="badge badge-danger">High</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Blood Count</td>
										<td>Microbiology</td>
										<td><span class="badge badge-danger">High</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>HB</td>
										<td>Microbiology</td>
										<td><span class="badge badge-warning">Law</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>7</td>
										<td>MD</td>
										<td>Microbiology</td>
										<td><span class="badge badge-warning">Law</span></td>
										<td>N500</td>
										<td>Johen Doe</td>
										<td>5.45pm 11/05</td>
										<td><span class="badge badge-success">Result Added</span></td>
										<td>
											<a href="#" data-bs-toggle="modal" data-bs-target="#result" class="text-info">Result  </a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#comment-dialog" class="text-info">Comment  </a>
										</td>
										<td>
											<button type="button" class="btn btn-sm btn-toggle" data-bs-toggle="button" aria-pressed="false">
											<span class="handle"></span>
											</button>
										</td>
									</tr>
								</tbody>
							  </table>
						</div>
					</div>
					<!-- /.box-body -->
				  </div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

	<!--Model Popup Area-->
	<!-- result modal content -->
	<div class="modal fade" id="result">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="result-popup">Radiology Investigations - Result</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-between">
						<div class="col-md-7 col-12">
						  <h4>Test Name - Neck Scan</h4>
						</div>
						<div class="col-md-5 col-12">
						  <h4 class="text-end">Lab Order Id : L0000002821</h4>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered">
						  <thead class="bg-secondary">
							<tr>
							  <th scope="col">Test</th>
							  <th scope="col">Result</th>
							  <th scope="col">Range</th>
							</tr>
						  </thead>
						  <tbody>
							<tr>
							  <td>Swelling Diameter</td>
							  <td>45 - 1000</td>
							  <td>&nbsp;</td>
							</tr>
							<tr>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							  <td>&nbsp;</td>
							</tr>
						  </tbody>
						</table>
					</div>
					<div class="comment">
						<p><span class="fw-600">Comment</span> : <span class="comment-here text-mute">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span></p>
					</div>
					<div class="table-responsive">
						<table class="table">
						  <tbody>
							<tr>
							  <th colspan="2" class="b-0">Test By</th>
							  <th colspan="2" class="b-0">Signed By</th>
							</tr>
							<tr class="bg-secondary">
							  <td>Donald jr</td>
							  <td>Time : 11-8-2017   04:22</td>
							  <td>Lous Clark</td>
							  <td>Time : 11-8-2017   04:22</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info pull-right">Print</button>
					<button type="button" class="btn btn-success pull-right">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<!-- comment modal content -->
	<div class="modal fade" id="comment-dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="comment-popup">Radiology Investigations - Comment</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-between">
						<div class="col-12">
						  <h4>Comment</h4>
						</div>
					</div>
					<form>
					  <div class="form-group">
						<textarea class="form-control" id="comment-area" rows="3"></textarea>
					  </div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-right" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success pull-right me-10">Save</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->



  <!-- Control Sidebar -->
  <aside class="control-sidebar">

	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
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
<!-- ./wrapper -->

	<!-- ./side demo panel -->

	<!-- Sidebar -->



	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

	<!-- Doclinic App -->
	<script src="js/template.js"></script>



</body>

<!-- Mirrored from multipurposethemes.com/admin/doclinic-admin-template/main/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Jul 2021 13:54:31 GMT -->
</html>