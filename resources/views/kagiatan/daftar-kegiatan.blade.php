@extends('layouts.main')
@section('content')
    <h4>Daftar Kegiatan </h4>
    <a href="{{route('createkegiatan')}}">
        <button type="button" class="btn btn-success">Tambah Data</button>
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Sekolah</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $x)
                <tr>

                    <td>{{ $x->id }}</td>
                    <td>{{ $x->nama_sekolah }}</td>
                    <td>{{ $x->nama_kegiatan }}</td>
                    <td>{{ $x->tanggal }}</td>
                    <td>
                        @if (auth()->user()->role_id == '1')
                        <a href="/edit-kegiatan/{{$x->id}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        <a href="/delete-kegiatan/{{$x->id}}">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                        @endif

                        @if (auth()->user()->role_id == '2')
                        <a href="/edit-kegiatan/{{$x->id}}">
                            <button type="button" class="btn btn-warning">Edit</button>
                        </a>
                        @endif


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
