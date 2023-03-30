<!doctype html>
<html lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/app-taskboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2022 07:33:53 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="ThemeMakker">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>:: BigBucket :: Taskboard</title>
<link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/nestable/jquery-nestable.css" />
<link rel="stylesheet" href="../assets/css/main.css" type="text/css">
</head>
<body class="theme-indigo">

<div class="page-loader-wrapper">
<div class="loader">
<div class="m-t-30"><img src="https://www.wrraptheme.com/templates/bigbucket/html/assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
<p>Please wait...</p>
</div>
</div>
<!--Navbar-->
@include('layouts/navbar')

<div class="main_content" id="main-content">
@include('layouts/leftsidebar')
<div class="right_sidebar">
<div class="setting_div">
<a href="javascript:void(0);" class="rightbar_btn"><i class="fa fa-cog fa-spin"></i></a>
</div>
<ul class="nav nav-pills nav-fill flex-column flex-sm-row mx-3 my-3" id="myTab" role="tablist">
<li class="nav-item"><a class="nav-link active" id="Settings-tab" data-toggle="tab" href="#Settings" role="tab" aria-controls="Settings" aria-selected="true">Settings</a></li>
<li class="nav-item"><a class="nav-link" id="Contact-tab" data-toggle="tab" href="#Contact" role="tab" aria-controls="Contact" aria-selected="false">Contact</a></li>
</ul>
<hr>
<div class="tab-content" id="myTabContent">
<div class="tab-pane show active" id="Settings" role="tabpanel" aria-labelledby="Settings-tab">
<div class="sidebar-scroll">
<div class="sidebar-widget px-3">
<h5>Theme Setting</h5>
<ul class="choose-skin list-unstyled">
<li data-theme="black">
<div class="black"></div>
</li>
<li data-theme="azure">
<div class="azure"></div>
</li>
<li data-theme="indigo" class="active">
<div class="indigo"></div>
</li>
<li data-theme="purple">
<div class="purple"></div>
</li>
<li data-theme="orange">
<div class="orange"></div>
</li>
<li data-theme="green">
<div class="green"></div>
</li>
<li data-theme="cyan">
<div class="cyan"></div>
</li>
<li data-theme="blush">
<div class="blush"></div>
</li>
</ul>
<ul class="setting-list list-unstyled mt-3">
<li>
<label class="custom-switch">
 <span class="custom-switch-description">Dark Sidebar</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox" class="switch-dark">
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Mini Sidebar</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox" class="switch-sidebar">
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
</ul>
<hr>
</div>
<div class="sidebar-widget px-3">
<h5>Language Setting</h5>
<select class="selectpicker" title="Select language">
<option>English</option>
<option>Spanish</option>
<option>Chinese</option>
<option>Hindi</option>
<option>Arabic</option>
</select>
<hr>
</div>
<div class="sidebar-widget px-3">
<h5>General Setting</h5>
<ul class="setting-list list-unstyled mt-3">
<li>
<label class="custom-switch">
<span class="custom-switch-description">Report Panel Usage</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox" checked>
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Email Redirect</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox" checked>
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Notifications</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox">
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
<li>
<label class="custom-switch">
<span class="custom-switch-description">Location Permission</span>
<label class="toggle-switch switch-sm mb-0">
<input type="checkbox" checked>
<span class="toggle-switch-slider"></span>
</label>
</label>
</li>
</ul>
<hr>
</div>
<div class="sidebar-widget px-3">
<div class="progress-wrapper">
<h4 class="progress-label text-uppercase">New Project</h4>
<h4 class="progress-percentage text-uppercase">$950</h4>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
</div>
</div>
<div class="progress-wrapper">
<h4 class="progress-label text-uppercase"> Admin</h4>
<h4 class="progress-percentage text-uppercase">$10k</h4>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-orange" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
</div>
</div>
<div class="progress-wrapper">
<h4 class="progress-label text-uppercase">Balance</h4>
<h4 class="progress-percentage text-uppercase">$50k</h4>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-green" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
</div>
</div>
<hr>
<div class="progress-wrapper">
<h4 class="progress-label text-uppercase">Storage</h4>
<h4 class="progress-percentage text-uppercase">35GB</h4>
<div class="progress" style="height: 5px;">
<div class="progress-bar bg-red" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
</div>
</div>
<button type="button" class="btn btn-primary btn-block btn-animated btn-animated-x">
<span class="btn-inner--visible">Upgrade Now</span>
<span class="btn-inner--hidden"><i class="fas fa-arrow-right"></i></span>
</button>
</div>
</div>
</div>
<div class="tab-pane" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
<div class="sidebar-widget px-3">
<ul class="list-unstyled contact-list">
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Vincent Porter <span class="d-block">London UK</span></h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar2.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Mike Thomas <span class="d-block">London UK</span></h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar3.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Aiden Chavaz</h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar4.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Vincent Porter <span class="d-block">Miami USA</span></h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar5.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Mike Thomas <span class="d-block">Neyyork USA</span></h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar6.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Aiden Chavaz</h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar7.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Mike Thomas <span class="d-block">New Delhi IND</span></h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
<li class="d-flex align-items-center">
<span class="contact-img">
<img src="../assets/images/xs/avatar8.jpg" class="rounded" alt="">
</span>
<h4 class="contact-name">Aiden Chavaz</h4>
<div class="action">
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fab fa-skype"></i></a>
<a href="javascript:void(0);" class="btn btn-sm btn-outline-primary"><i class="fa fa-envelope"></i></a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="page">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="javascript:void(0);">TaskBoard</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-align-justify"></i>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Application</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0);">Inbox</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="javascript:void(0);">Calendar</a>
<a class="dropdown-item" href="javascript:void(0);">TaskBoard</a>
<a class="dropdown-item" href="javascript:void(0);">Chat App</a>
<a class="dropdown-item" href="javascript:void(0);">Contacts</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0);">Profile</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="javascript:void(0);">Timeline</a>
<a class="dropdown-item" href="javascript:void(0);">Invoices</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="javascript:void(0);">Stater page</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="javascript:void(0);">Pricing</a>
<a class="dropdown-item" href="javascript:void(0);">Search</a>
<a class="dropdown-item" href="javascript:void(0);">Testimonials</a>
<a class="dropdown-item" href="javascript:void(0);">Map</a>
<a class="dropdown-item" href="javascript:void(0);">Icon</a>
<a class="dropdown-item" href="javascript:void(0);">Carousel</a>
<a class="dropdown-item" href="javascript:void(0);">Gallery</a>
<a class="dropdown-item" href="javascript:void(0);">Lookup</a>
</div>
</li>
</ul>
<form class="form-inline my-2 my-lg-0">
<button type="button" class="btn btn-primary">Add</button>
<a href="https://themeforest.net/user/wrraptheme/portfolio" title="Portfolio" class="btn btn-success ml-2">Portfolio</a>
</form>
</div>
</nav>
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
</div>
</div>
</div>

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
</div>

<script src="../assets/bundles/libscripts.bundle.js"></script>
<script src="../assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/nestable/jquery.nestable.js"></script> 

<script src="../assets/js/theme.js"></script>
<script src="../assets/js/pages/sortable-nestable.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/bigbucket/html/light/app-taskboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Aug 2022 07:33:54 GMT -->
</html>
