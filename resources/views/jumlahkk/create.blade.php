@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Jumlah Kartu Keluarga</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('jumlahkk.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('jumlahkk.store') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RT</strong>
                        <input type="text" class="form-control" name="rt">
                        @if($errors->has('rt'))
                           <div class="text-danger">
                                {{ $errors->first('rt')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Kartu Keluarga</strong>
                        <input type="text" class="form-control" name="kk">
                        @if($errors->has('kk'))
                           <div class="text-danger">
                                {{ $errors->first('kk')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
</div>
</div>
</div>
</div>
@endsection
