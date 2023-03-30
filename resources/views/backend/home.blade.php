<!doctype html>
<html lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/app-taskboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2022 07:33:53 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="ThemeMakker">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Kampung Pelita Buku</title>
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts-c3/plugin.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" type="text/css">
</head>
<body class="theme-indigo">
<div class="page-loader-wrapper">
<div class="loader">
<p>Please wait...</p>
</div>
</div>
<nav class="navbar custom-navbar navbar-expand-lg py-2">
<div class="container-fluid px-0">
<a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-align-left"></i></a>
<a href="/backend/home" class="navbar-brand">
<strong>TBM</strong>
<div id="navbar_main">
<ul class="navbar-nav mr-auto hidden-xs">
<li class="nav-item page-header">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="backend/home"><i class="fa fa-home"></i></a></li>
<li class="breadcrumb-item active">Taskboard</li>
</ul>
</li>
</ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">
<a class="nav-link nav-link-icon" href="javascript:void(0);" id="navbar_1_dropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<h6 class="dropdown-header">Halo, Syarif</h6>

<a class="dropdown-item" href="{{ route('actionlogout') }}"><i class="fa fa-sign-out text-primary"></i>Sign
out</a>
</div>
</li>
</ul>
</div>
</div>
</nav>
<div class="main_content" id="main-content">
<div class="left_sidebar">
<nav class="sidebar">
<div class="user-info">
<div class="image"><a href="javascript:void(0);"><img src="{{ asset('backend/assets/images/user3.png') }}" alt="User"></a></div>
<div class="detail mt-3">
<h5 class="mb-0">{{Auth::user()->name}}</h5>
<small>Admin</small>
</div>
<!-- Social Media
<div class="social">
<a href="javascript:void(0);" title="facebook"><i class="ti-twitter-alt"></i></a>
<a href="javascript:void(0);" title="twitter"><i class="ti-linkedin"></i></a>
<a href="javascript:void(0);" title="instagram"><i class="ti-facebook"></i></a>
</div>
-->
</div>
<ul id="main-menu" class="metismenu">
<li class="g_heading">Main</li>
<li class=""><a href="home"><i class="ti-home"></i><span>Dashboard</span></a></li>
<li class="g_heading">Profile</li>
<li><a href="/tujuan"><i class="ti-notepad"></i><span>Tujuan</span></a></li>
<li><a href="/program"><i class="ti-notepad"></i><span>Program</span></a></li>
<li class="g_heading">Kegiatan</li>
<li><a href="/kegiatan"><i class="ti-id-badge"></i><span>Kegiatan</span></a></li>
<li class="g_heading">Informasi</li>
<li><a href="/jumlahkk"><i class="ti-widget"></i><span>Jumlah KK Warga</span></a></li>
<li><a href="/tingkatekonomi"><i class="ti-widget"></i><span>Tingkat Ekonomi Warga</span></a></li>
<li><a href="/galeri"><i class="ti-widget"></i><span>Galeri</span></a></li>
<li><a href="/kontakkami"><i class="ti-email"></i><span>Kontak Kami</span></a></li>
</ul>
</nav>
</div>



<div class="page">
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                <h3>Selamat Datang Di Dashboard</h3>
</div>
<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                
            </thead>
<tbody>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- Dashboard Content

<div class="container-fluid">
<div class="row clearfix">
<div class="col-lg-4 col-md-12 d-flex">
<div class="card flex-fill">
<div class="header">
<h2><strong>Planned</strong></h2>
</div>
<div class="body taskboard planned_task">
<div class="dd" data-plugin="nestable">
<ol class="dd-list">
<li class="dd-item" data-id="1">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Themeforest update</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 18 Jan</span></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-comments"></i> 5</a></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-check-square"></i> 11</a></li>
<li class="ml-3 bd-highlight">
<ul class="list-unstyled team-info margin-0">
<li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
<li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
</ul>
</li>
</ul>
</div>
</li>
<li class="dd-item" data-id="2">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Sites to review</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 28 Jan</span></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-comments"></i> 2</a></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-check-square"></i> 8</a></li>
</ul>
</div>
</li>
<li class="dd-item" data-id="3">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Client Followup</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>It is a long established fact that a reader.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 05 Feb</span></li>
</ul>
</div>
</li>
</ol>
</div>
<button data-toggle="modal" data-target="#addcontact" type="button" class="btn btn-primary btn-block btn-animated btn-animated-y">
<span class="btn-inner--visible">Add New</span>
<span class="btn-inner--hidden"><i class="fa fa-plus"></i></span>
</button>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 d-flex">
<div class="card flex-fill">
<div class="header">
<h2><strong>In</strong> progress</h2>
</div>
 <div class="body taskboard progress_task">
<div class="dd" data-plugin="nestable">
<ol class="dd-list">
<li class="dd-item" data-id="2">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Sites to review</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>Contrary to popular belief, Lorem Ipsum is not simply.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 28 Jan</span></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-comments"></i> 2</a></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-check-square"></i> 8</a></li>
</ul>
</div>
</li>
<li class="dd-item" data-id="3">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Client Followup</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>It is a long established fact that a reader.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 05 Feb</span></li>
</ul>
</div>
</li>
</ol>
</div>
<button data-toggle="modal" data-target="#addcontact" type="button" class="btn btn-primary btn-block btn-animated btn-animated-y">
<span class="btn-inner--visible">Add New</span>
<span class="btn-inner--hidden"><i class="fa fa-plus"></i></span>
</button>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 d-flex">
<div class="card flex-fill">
<div class="header">
<h2><strong>Completed</strong></h2>
</div>
<div class="body taskboard completed_task">
<div class="dd" data-plugin="nestable">
<ol class="dd-list">
<li class="dd-item" data-id="1">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Themeforest update</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 18 Jan</span></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-comments"></i> 5</a></li>
<li class="ml-3 bd-highlight"><a href="javascript:void(0);" class="text-muted"><i class="fa fa-check-square"></i> 11</a></li>
<li class="ml-3 bd-highlight">
<ul class="list-unstyled team-info margin-0">
<li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
<li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
</ul>
</li>
</ul>
</div>
</li>
<li class="dd-item" data-id="3">
<div class="dd-handle d-flex justify-content-between align-items-center">
<div class="h6 mb-0">Client Followup</div>
<div class="action">
<a href="javascript:void(0);"><i class="fa fa-edit"></i></a>
<a href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
</div>
</div>
<div class="dd-content p-15">
<p>It is a long established fact that a reader.</p>
<ul class="list-unstyled d-flex bd-highlight align-items-center">
<li class="mr-2 flex-grow-1 bd-highlight"><span class="badge badge-default"><i class="fa fa-time"></i> 05 Feb</span></li>
</ul>
</div>
</li>
</ol>
</div>
<button data-toggle="modal" data-target="#addcontact" type="button" class="btn btn-primary btn-block btn-animated btn-animated-y">
<span class="btn-inner--visible">Add New</span>
<span class="btn-inner--hidden"><i class="fa fa-plus"></i></span>
 </button>
</div>
</div>
</div>
</div>
End of Dashboard Content -->

</div>
</div>
<!-- 
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="title" id="defaultModalLabel">Add New Task</h6>
</div>
<div class="modal-body">
<div class="row clearfix">
<div class="col-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Task no.">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input type="text" class="form-control" placeholder="Job title">
</div>
</div>
<div class="col-12">
<div class="form-group">
<textarea type="number" class="form-control" placeholder="Description"></textarea>
</div>
</div>
<div class="col-12">
<select class="form-control show-tick m-b-10">
<option>Select Team</option>
<option>John Smith</option>
<option>Hossein Shams</option>
<option>Maryam Amiri</option>
<option>Tim Hank</option>
<option>Gary Camara</option>
</select>
</div>
<div class="col-12">
<label>Range</label>
<div class="input-daterange input-group" data-provide="datepicker">
<input type="text" class="form-control" name="start">
<span class="input-group-addon"> to </span>
<input type="text" class="form-control" name="end">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Add</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div> -->

<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js') }}"></script> 
<script src="{{ asset('backend/assets/js/theme.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/index.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/todo-js.js') }}"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/app-taskboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2022 07:33:54 GMT -->
</html>
