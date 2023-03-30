@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Kegiatan</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('kegiatan.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('kegiatan.update',$kegiatan->id) }}" method="POST">
            @csrf
            @method('PUT')
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kegiatan</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="kegiatan" placeholder="kegiatan">{{ $kegiatan->kegiatan }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="margin: 10px;">Pelaksanaan</strong>
                        <input type="date" name="pelaksanaan" value="{{$kegiatan->kegiatan}}" class="form-control" placeholder="pelaksanaan" required="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="keterangan" placeholder="keterangan">{{ $kegiatan->keterangan }}</textarea>
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
