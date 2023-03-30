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
        <form action="{{ route('jumlahkk.update',$jumlahkk->id) }}" method="POST">
            @csrf
            @method('PUT')
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>rt</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="rt" placeholder="rt">{{ $jumlahkk->rt }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="margin: 10px;">kk</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="kk" placeholder="isi">{{ $jumlahkk->kk }}</textarea>
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
