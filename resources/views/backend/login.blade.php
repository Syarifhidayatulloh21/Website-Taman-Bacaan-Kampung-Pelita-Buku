<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Kampung Pelita Buku</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" type="text/css">
</head>
<body class="theme-indigo">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="https://www.wrraptheme.com/templates/bigbucket/html/assets/images/brand/icon_black.svg" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>
    
        <div id="wrapper">
            <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
            <div class="auth-box">
            <div class="card">
            <div class="header">
            <h3 class="text-center"><b>Selamat Datang</b><br>Website Taman Pelita Buku</h3>
            </div>
        <div class="body">
        @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
        <form class="form-auth-small" action="{{ route('actionlogin') }}" method="post">
            @csrf
        <div class="form-group">
            <label for="signin-email" class="control-label sr-only">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
            <label for="signin-password" class="control-label sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
        </form>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>

<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script> 
<script src="{{ asset('backend/assets/js/theme.js') }}"></script>

</body>
</html>