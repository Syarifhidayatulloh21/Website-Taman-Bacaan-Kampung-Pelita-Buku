@extends('frontend/navbar')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/kontak.png" alt="" style="text-align: left; width: 70px;">   Kontak Kami</p>
        </div>
    </div>
<hr>
  <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.908865339112!2d106.79131311449497!3d-6.405741264431354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e914dcc61647%3A0x8bee6cf9c17c000!2sJl.%20Hasan%20Saban%2C%20Rangkapan%20Jaya%2C%20Kec.%20Pancoran%20Mas%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016435!5e0!3m2!1sid!2sid!4v1663768455998!5m2!1sid!2sid" width="500px" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <br>
        @foreach ($kontakkami as $i =>$kontakkami)
        <div class="row">
        <div class="col-12 text-center" style="text-align: center;">
            <h3 class="text-center"> Location </h4>
            <p class="text-center h5">{{ $kontakkami->alamat }}</p>
            <br>
            <h4 class="text-center">Contack Us</h4>
            <h5 class="text-center">Phone:<p class="text-center h5">{{ $kontakkami->notlp }}</p></h5>
            <h5 class="text-center">Email:<p class="text-center h5">{{ $kontakkami->email }}</p></h5>
        </div>
        </div>
        @endforeach
    </div>
  </div>
<br>
<br>
<br>
</body>
</html>




@endsection