@extends('frontend/navbar')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/statik3.png" alt="" style="text-align: left; width: 70px;">   Tingkat Ekonomi Warga</p>
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
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
<tbody>
@foreach ($tingkatekonomi as $i =>$tingkatekonomi)
    <tr>
        <td class="text-center">{{ $i+1 }}</td>
        <td class="text-center">{{ $tingkatekonomi->jumlah }}</td>
        <td class="text-center">{{ $tingkatekonomi->keterangan }}</td>
    </tr>
@endforeach
</tbody>
</table>
<div class="container" style="text-align: right;">
    <img src="frontend/assets/img/icon/statik4.png" style="width: 150px;">
</div>
</div>
</div>

@endsection