@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card planer_task">
                <div class="header">
                    <h2>Galeri</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('galeri.index') }}">Kembali</a>
                    </div>
                </div>
            <div class="body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Foto</th>
                        <td>{{ $galeri->namafoto }}</td>
                    </tr>
                    <tr>
                        <th>Keterangan</th>
                        <td>{{ $galeri->keterangan }}</td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td> <img src="/image/{{ $galeri->image }}" width="500px"></td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection