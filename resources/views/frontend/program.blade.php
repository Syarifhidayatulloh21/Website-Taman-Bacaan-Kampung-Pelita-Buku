@extends('frontend/navbar')
@section('main')


<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/papan tulis.png" alt="" style="text-align: left; width: 70px;">   Program</p>
        </div>
    </div>
</div>


<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6">
           <div class="icon-box">
              <h4 class="text-left">Program</h4>
              <br>
              @foreach ($program as $program)
              <ul>
              <li><p class="h5"> {{ $program->judul }}</p></li>
                <ol>
                <li> {{ $program-> isi }}</li>
                </ol>
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
                <img src="frontend/assets/img/icon/bus.png" style="width: 150px;">
              </div>
  </div>
@endsection