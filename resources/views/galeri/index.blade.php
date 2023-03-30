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
                <h3>Galeri</h3>
                <div class="pull-right">
                   <a class="btn btn-success" href="{{ route('galeri.create') }}" style="margin: 10px;">Tambah Galeri</a>
                </div>
</div>
<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Foto</th>
                    <th>Keterangan</th>
                    <th>Photo</th>
                    <th >Aksi</th>
                </tr>
            </thead>
<tbody>
@foreach ($galeri as $i =>$galeri)
    <tr>
    <td>{{ $i+1 }}</td>
    <td>{{ $galeri->namafoto }}</td>
    <td>{{ $galeri->keterangan }}</td>
    <td><img src="/image/{{ $galeri->image }}" width="100px"></td>
    <td>
        <form action="{{ route('galeri.destroy',$galeri->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('galeri.show',$galeri->id) }}">Detail</a>
                <a class="btn btn-primary" href="{{ route('galeri.edit',$galeri->id) }}">Ubah</a>
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