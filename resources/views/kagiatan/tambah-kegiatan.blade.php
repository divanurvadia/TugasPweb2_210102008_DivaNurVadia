@extends('layouts.main')

@section('content')
    <div class="col-md-12">
    <h3 class="text-center">Tambah Kegiatan</h3>
  </div>
    &nbsp;
    <form action="{{ route('insertkegiatan') }}" method="POST">
    <div class="md-float-material form-material">
        {{-- {{ csrf_token() }} --}}
        @csrf
        <div class="mb-3.row">
            <label class="form-group form-primary">Nama Sekolah</label>
            <div class="form-group form-primary">
            <input type="text" name="nama_sekolah" class="form-control"></div>
            <span class="form-bar"></span>
        </div>
        <div class="mb-3.row">
            <label class="form-group form-primary">Nama Kegiatan</label>
            <div class="form-group form-primary">
            <input type="text" name="nama_kegiatan" class="form-control"></div>
            <span class="form-bar"></span>
        </div>
        <div class="mb-3.row">
            <label class="form-group form-primary">Tanggal</label>
            <div class="form-group form-primary">
            <input type="date" name="tanggal" id="">
        </div>

        <a href="{{ route('kegiatan') }}">
            <button type="button" class="btn btn-warning">Kembali</button>
        </a>
        <button type="submit" class="btn btn-success">Simpan</button>
    </div>
    </form>
@endsection
