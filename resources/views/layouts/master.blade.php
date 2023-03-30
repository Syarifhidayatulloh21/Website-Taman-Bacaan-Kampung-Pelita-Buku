<!doctype html>
<html lang="en">
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
</div>
<ul id="main-menu" class="metismenu">
<li class="g_heading">Main</li>
<li class=""><a href="backend/home"><i class="ti-home"></i><span>Dashboard</span></a></li>
<li class="g_heading">Profile</li>
<!-- <li><a href="/visimisi"><i class="ti-notepad"></i><span>Visi Misi</span></a></li> -->
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
        <div class="row">
            <div class="col-12">
                    <div class="header pb-0">
                        @yield('main')
                    </div>
                </div>
            </div>
        </div>
                
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

<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js') }}"></script> 
<script src="{{ asset('backend/assets/js/theme.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/index.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/todo-js.js') }}"></script>
</body>
</html>
