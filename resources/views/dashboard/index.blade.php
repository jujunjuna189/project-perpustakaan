@extends('layouts.app_admin')
@section('content')
<div class="text-center">
    <div class="h1 m-0">
        Perpustakaan

    </div>
    <div>
        <small>Peminjaman Buku Perpustakaan</small>
    </div>
</div>
<div class="mt-4 d-flex flex-wrap">
    @foreach($koleksi as $val)
    <div class="card me-4" style="border: 1px dashed #0c0c0c;">
        <div class="card-body">
            <div class="px-3">
                <div class="d-flex justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
                        <line x1="13" y1="8" x2="15" y2="8" />
                        <line x1="13" y1="12" x2="15" y2="12" />
                    </svg>
                </div>
                <div class="mt-2">
                    <div class="text-center">
                        <span class="h3 fw-bold">{{$val->judul}}</span>
                    </div>
                    <div class="shadow py-2 px-3 mt-3 rounded bg-white border" style="margin-left: -4rem;">
                        <div class="text-start mt-2">
                            <small>
                                Edisi :
                                <b>{{$val->edisi}}</b>
                            </small>
                            <br>
                            <small>
                                Jenis Buku :
                                <b>{{$val->jns_koleksi}}</b>
                            </small>
                            <br>
                            <small>
                                Edisi :
                                <b>{{$val->edisi}}</b>
                            </small>
                            <br>
                            <small>
                                Pengarang :
                                <b>{{$val->pengarang}}</b>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="{{ route('pinjam', ['kd_koleksi' => $val->kd_koleksi]) }}" class="btn btn-dark">Pinjam Buku</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection