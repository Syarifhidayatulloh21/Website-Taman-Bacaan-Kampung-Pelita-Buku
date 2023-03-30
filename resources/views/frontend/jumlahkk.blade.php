@extends('frontend/navbar')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/people.png" alt="" style="text-align: left; width: 70px;">   Jumlah Kartu Keluarga</p>
        </div>
    </div>
</div>
<hr>

<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">RT</th>
                    <th class="text-center">Jumlah Kartu Keluarga</th>
                </tr>
            </thead>
<tbody>
@foreach ($jumlahkk as $i =>$jumlahkk)
    <tr>
        <td class="text-center">{{ $i+1 }}</td>
        <td class="text-center">{{ $jumlahkk->rt }}</td>
        <td class="text-center">{{ $jumlahkk->kk }}</td>
    </tr>
@endforeach
</tbody>
</table>
<div class="container" style="text-align: right;">
    <img src="frontend/assets/img/icon/comunication.png" style="width: 150px;">
</div>
</div>
</div>

@endsection