@extends('layouts.app')
@section('content')

<div class="content">
    <div class="card">
        <div class="card-body">

        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('nama', 'Nama Kecamatan'); !!}
                {!! Form::label('judul', $kecamatan->nama, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('alamat', 'Alamat'); !!}
                {!! Form::label('isi', $kecamatan->alamat, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('kode', 'Kode POS'); !!}
                {!! Form::label('isi', $kecamatan->kode, ['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('created_at', 'Waktu Tambah'); !!}
                {!! Form::label('created_at', $kecamatan->created_at,['class' => 'form-control']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('update_at', 'Waktu Ubah'); !!}
                {!! Form::label('update_at', $kecamatan->update_at,['class' => 'form-control']); !!}
            </div>

            <a href="{!! route('kecamatan.index') !!}" class="btn btn-warning">Kembali</a>
        </div>
        </div>
    </div>
</div>
@endsection