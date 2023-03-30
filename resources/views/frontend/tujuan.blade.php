@extends('frontend/navbar')
@section('main')


<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/pensil.png" alt="" style="text-align: left; width: 70px;">   Tujuan</p>
        </div>
    </div>
</div>


<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6">
           <div class="icon-box">
              <h4 class="text-left">Tujuan</h4>
              <br>
              @foreach ($tujuan as $tujuan)
              <ul>
              <li><p class="h5"> {{ $tujuan->judul }}</p></li>
                <ul>
                <li> {{ $tujuan-> isi }}</li>
                </ul>
              <br>
            </ul>
            @endforeach
              </div>
            </div>
            <div class="col-md-6 mt-4 mt-lg-0">
              <div class="icon-box">
                <br>
                <br>
              <div class="container" style="text-align: right; position:relative; margin-bottom: 100px;">
                <img src="frontend/assets/img/icon/lampu.png" style="width: 300px;">
              </div>
  </div>
@endsection