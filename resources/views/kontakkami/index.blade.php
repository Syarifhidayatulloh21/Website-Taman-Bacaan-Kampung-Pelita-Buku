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
                <h3>Kontak Kami</h3>
                <div class="pull-right">
                   <a class="btn btn-success" href="{{ route('kontakkami.create') }}" style="margin: 10px;">Tambah Kontak Kami</a>
                </div>
</div>
<div class="body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Instagram</th>
                    <th>Email</th>
                    <th >Aksi</th>
                </tr>
            </thead>
<tbody>
@foreach ($kontakkami as $i =>$kontakkami)
    <tr>
    <td>{{ $i+1 }}</td>
    <td>{{ $kontakkami->alamat }}</td>
    <td>{{ $kontakkami->notlp }}</td>
    <td>{{ $kontakkami->instagram }}</td>
    <td>{{ $kontakkami->email }}</td>
    <td>
        <form action="{{ route('kontakkami.destroy',$kontakkami->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('kontakkami.show',$kontakkami->id) }}">Detail</a>
                <a class="btn btn-primary" href="{{ route('kontakkami.edit',$kontakkami->id) }}">Ubah</a>
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