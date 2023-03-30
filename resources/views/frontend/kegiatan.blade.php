@extends('frontend/navbar')
@section('main')

<div class="container">
    <div class="row">
        <div class="col-12">
           <p class="h1"><img src="frontend/assets/img/icon/catatan.png" alt="" style="text-align: left; width: 70px;">   Kegiatan</p>
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
                    <th class="text-center">Kegiatan</th>
                    <th class="text-center">Pelaksanaan</th>
                    <th class="text-center">Keterangan</th>
                </tr>
            </thead>
<tbody>
@foreach ($kegiatan as $i =>$kegiatan)
    <tr>
    <td>{{ $i+1 }}</td>
    <td>{{ $kegiatan->kegiatan }}</td>
    <td>{{ $kegiatan->pelaksanaan }}</td>
    <td>{{ $kegiatan->keterangan }}</td>
    </tr>
@endforeach
</tbody>
</table>

<div class="container" style="text-align: right;">
    <img src="frontend/assets/img/icon/jam.png" style="width: 150px;">
</div>

</div>
</div>


@endsection