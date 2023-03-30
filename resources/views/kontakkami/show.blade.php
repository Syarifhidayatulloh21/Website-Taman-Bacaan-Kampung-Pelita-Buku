@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card planer_task">
                <div class="header">
                    <h2>Kontak Kami</h2>
                    <div class="pull-left" style="margin: 10px;">
                    <a class="btn btn-primary" href="{{ route('kontakkami.index') }}"> Back</a>
                    </div>
                </div>
            <div class="body">
            <table class="table table-bordered">
            <tr>
                    <th>Alamat</th>
                    <td>{{ $kontakkami->alamat }}</td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td>{{ $kontakkami->notlp }}</td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>{{ $kontakkami->instagram }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $kontakkami->email }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection