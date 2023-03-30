@extends('layouts/master')
@section('main')
<div class="container-fluid">
@if (session('Data ditambah'))
        <div class="alert alert-success" role="alert">
            {{ session('Data ditambah') }}
        </div>
    @endif

    @if (session('Data diedit'))
        <div class="alert alert-success" role="alert">
            {{ session('Data diedit') }}
        </div>
    @endif

    @if (session('Data dihapus'))
        <div class="alert alert-success" role="alert">
            {{ session('Data dihapus') }}
        </div>
    @endif
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                <h3>Program</h3>
                <div class="pull-right">
                   <a class="btn btn-success" href="{{ route('program.create') }}" style="margin: 10px;">Tambah Program</a>
                </div>
</div>
<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th >Aksi</th>
                </tr>
            </thead>
<tbody>
@foreach ($program as $i =>$program)
    <tr>
    <td>{{ $i+1 }}</td>
    <td>{{ $program->judul }}</td>
    <td>{{ $program->isi }}</td>
    <td>
        <form action="{{ route('program.destroy',$program->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('program.show',$program->id) }}">Detail</a>
                <a class="btn btn-primary" href="{{ route('program.edit',$program->id) }}">Ubah</a>
                 @csrf
                 @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">Hapus</button>
        </form>
    </td>
    </tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection