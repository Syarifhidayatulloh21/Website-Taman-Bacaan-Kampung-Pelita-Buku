@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Tujuan</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('tujuan.index') }}"> Kembali</a>
                    </div>
                </div>
            <div class="body">
                <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <td>{{ $tujuan->judul }}</td>
        </tr>
        <tr>
            <th>Isi</th>
            <td>{{ $tujuan->isi }}</td>
        </tr>
    </table>
</div>
</div>
</div>
@endsection