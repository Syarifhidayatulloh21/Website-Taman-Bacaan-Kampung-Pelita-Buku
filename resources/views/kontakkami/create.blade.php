@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Kontak Kami</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('kontakkami.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('kontakkami.store') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat</strong>
                        <input type="text" class="form-control" name="alamat">
                        @if($errors->has('alamat'))
                           <div class="text-danger">
                                {{ $errors->first('alamat')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No Telepon</strong>
                        <input type="number" class="form-control" name="notlp">
                        @if($errors->has('notlp'))
                           <div class="text-danger">
                                {{ $errors->first('notlp')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Instagram</strong>
                        <input type="text" class="form-control" name="instagram">
                        @if($errors->has('instagram'))
                           <div class="text-danger">
                                {{ $errors->first('instagram')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="text" class="form-control" name="email">
                        @if($errors->has('email'))
                           <div class="text-danger">
                                {{ $errors->first('email')}}
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
@endsection