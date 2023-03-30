@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12 col-md-12">
            <div class="card planer_task">
                <div class="header">
                    <h2>Program</h2>
                    <div class="pull-left" style="margin: 10px;">
                    <a class="btn btn-primary" href="{{ route('program.index') }}"> Kembali</a>
                    </div>
                </div>
            <div class="body">
            <table class="table table-bordered">
                <tr>
                    <th>Judul</th>
                    <td>{{ $program->judul }}</td>
                </tr>
                <tr>
                    <th>Isi</th>
                    <td>{{ $program->isi }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection