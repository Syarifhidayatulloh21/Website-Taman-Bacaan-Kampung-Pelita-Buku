@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card planer_task">
                <div class="header">
                    <h2>kegiatan</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('kegiatan.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
            <table class="table table-bordered">
                <tr>
                    <th>kegiatan</th>
                    <td>{{ $kegiatan->kegiatan }}</td>
                </tr>
                <tr>
                    <th>Pelaksanaan</th>
                    <td>{{ $kegiatan->pelaksanaan }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $kegiatan->keterangan }}</td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection