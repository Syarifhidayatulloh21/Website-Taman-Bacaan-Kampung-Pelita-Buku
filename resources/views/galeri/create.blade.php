@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Galeri</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('galeri.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Foto</strong>
                        <input type="text" class="form-control" name="namafoto">
                        @if($errors->has('namafoto'))
                           <div class="text-danger">
                                {{ $errors->first('namafoto')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <textarea class="form-control" style="height:150px" name="keterangan"></textarea>
                        @if($errors->has('keterangan'))
                           <div class="text-danger">
                                {{ $errors->first('keterangan')}}
                           </div>
                           @endif
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
</div>
@endsection
