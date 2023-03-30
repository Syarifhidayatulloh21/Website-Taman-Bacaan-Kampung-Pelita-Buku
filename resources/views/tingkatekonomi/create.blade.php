@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Tingkat Ekonomi</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('tingkatekonomi.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('tingkatekonomi.store') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah</strong>
                        <input type="text" class="form-control" name="jumlah">
                        @if($errors->has('jumlah'))
                           <div class="text-danger">
                                {{ $errors->first('jumlah')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <input type="text" class="form-control" name="keterangan">
                        @if($errors->has('keterangan'))
                           <div class="text-danger">
                                {{ $errors->first('keterangan')}}
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
</div>
</div>
@endsection