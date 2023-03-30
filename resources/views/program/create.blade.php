@extends('layouts/master')
@section('main')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">
            <div class="card planned_task">
                <div class="header">
                    <h2>Program</h2>
                    <div class="pull-left" style="margin: 10px;">
                        <a class="btn btn-primary" href="{{ route('program.index') }}"> Kembali</a>
                    </div>
                </div>
    <div class="body">
        <form action="{{ route('program.store') }}" method="POST">
            @csrf
             <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul</strong>
                       <input type="text" class="form-control" name="judul">
                        @if($errors->has('judul'))
                           <div class="text-danger">
                                {{ $errors->first('judul')}}
                           </div>
                           @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Isi</strong>
                        <textarea class="form-control" style="height:150px" name="isi"></textarea>
                        @if($errors->has('isi'))
                           <div class="text-danger">
                                {{ $errors->first('isi')}}
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