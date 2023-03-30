@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Tingkat Ekonomi</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('tingkatekonomi.index') }}"> Back</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('tingkatekonomi.update',$tingkatekonomi->id) }}" method="POST">
            @csrf
            @method('PUT')
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="jumlah" placeholder="jumlah">{{ $tingkatekonomi->jumlah }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong style="margin: 10px;">Keterangan</strong>
                        <textarea class="form-control" style="margin-top: 10px;" name="keterangan" placeholder="keterangan">{{ $tingkatekonomi->keterangan }}</textarea>
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
</div>
@endsection
