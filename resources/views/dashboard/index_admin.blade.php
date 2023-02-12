@extends('layouts.app_admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat Datang Di Perpustakaan</h3>
    </div>
</div>

<!-- Data -->

<div class="d-flex flex-wrap mt-3">
    <div class="card pe-5" style="border: 1px dashed #0c0c0c">
        <div class="card-body">
            <div class="small strong">Jumlah Anggota</div>
            <div class="h1">{{ $anggota }} <small>Anggota</small> </div>
        </div>
    </div>
    <div class="card pe-5 ms-2" style="border: 1px dashed #0c0c0c">
        <div class="card-body">
            <div class="small strong">Jumlah Buku</div>
            <div class="h1">{{ $koleksi }} <small>Buku</small> </div>
        </div>
    </div>
</div>
@endsection