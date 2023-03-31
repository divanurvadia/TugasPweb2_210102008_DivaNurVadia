@extends('layouts.main')

@section('content')
    @if (auth()->user()->role_id == '1')
    <h2>Selamat Datang Admin</h2>
    <h4>SIKEKWARMA Adalah Sistem Informasi Kegiatan Yang Ada Di Maos </h4>
    <h4>Kegiatan yang ada di Kwarran maos:</h4>
    <h4>1.Pesta siaga</h4>
        <h4><img class="img-109 img-border-radius: 7px" src="assets/images/pestasiaga.jpeg" alt="User-Profile-Image"></h4>
        <h4>2.Jurnalistik</h4>
        <h4><img class="img-92 imgborder-radius: 6pxs" src="assets/images/jurnalistik.jpg" alt="User-Profile-Image"></h4>
        <h4>3.Jambore Kwarran</h4>
        <h4><img class="img-95 imgborder-radius: 7pxs" src="assets/images/jamborekwarran.jpg" alt="User-Profile-Image"></h4>
    @endif
    @if (auth()->user()->role_id == '2')
    <h4>Selamat Datang Gugus Depan</h4>
    <h4>SIKEKWARMA Adalah Sistem Informasi Kegiatan Yang Ada Di Maos </h4>
    <h4>Kegiatan yang ada di Gugus depan:</h4>
    <h4>1.Bantara Smanji</h4>
        <h4><img class="img-95 imgborder-radius: 7pxs" src="assets/images/bantarasmanji.jpg" alt="User-Profile-Image"></h4>
        <h4>2.Jumat Rutinan</h4>
        <h4><img class="img-1800 imgborder-radius: 7pxs" src="assets/images/jumatrutinan.jpg" alt="User-Profile-Image"></h4>
        <h4>3.Pelantikan Pramuka Garuda</h4>
        <h4><img class="img-105 imgborder-radius: 10pxs" src="assets/images/pelantikan.jpg" alt="User-Profile-Image"></h4>
    @endif
@endsection
