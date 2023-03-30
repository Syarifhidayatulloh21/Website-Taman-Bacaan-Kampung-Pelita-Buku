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
        <form action="{{ route('kegiatan.store') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kegiatan</strong>
                        <textarea class="form-control" style="height:150px" name="kegiatan" placeholder="Kegiatan"></textarea>
                        @if($errors->has('kegiatan'))
                           <div class="text-danger">
                                {{ $errors->first('kegiatan')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pelaksanaan</strong>
                        <input type="date" name="pelaksanaan" class="form-control">
                        @if($errors->has('pelaksanaan'))
                           <div class="text-danger">
                                {{ $errors->first('pelaksanaan')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Keterangan</strong>
                        <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan"></textarea>
                        @if($errors->has('keterangan'))
                           <div class="text-danger">
                                {{ $errors->first('keterangan')}}
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
