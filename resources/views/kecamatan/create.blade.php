@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'kecamatan.store']) !!}
        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('nama', 'Nama Kecamatan'); !!}
                {!! Form::text('nama', '', ['class' => 'form-control','placeholder' => 'Nama Kecamatan']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('alamat', 'Alamat'); !!}
                {!! Form::textarea('alamat', '', ['class' => 'form-control','placeholder' => 'Alamat']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kode', 'Kode POS'); !!}
                {!! Form::textarea('kode', '', ['class' => 'form-control','placeholder' => 'Kode POS']); !!}
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{!! route('kecamatan.index') !!}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection