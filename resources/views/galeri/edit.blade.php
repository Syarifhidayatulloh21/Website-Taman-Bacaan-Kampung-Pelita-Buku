@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Galeri</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('galeri.index') }}">Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('galeri.update',$galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Foto</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="namafoto" placeholder="galeri">{{ $galeri->namafoto }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="margin: 10px;">Keterangan</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="keterangan" placeholder="galeri">{{ $galeri->keterangan }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>image</strong>
                        <input type="file" name="image" class="form-control" placeholder="image">
                        @if($errors->has('image'))
                           <div class="text-danger">
                                {{ $errors->first('image')}}
                           </div>
                           @endif
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
</div>
</div>
</div>
@endsection
