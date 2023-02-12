@extends('layouts.app_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header fw-bold h3">
                Tambah Buku
            </div>
            <div class="card-body">
                <form action="{{ route('buku.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kode Buku</label>
                        <input type="text" class="form-control" required name="kd_koleksi" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" required name="judul" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Bahan Pustaka</label>
                        <input type="text" class="form-control" required name="jns_bahan_pustaka" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Koleksi</label>
                        <input type="text" class="form-control" required name="jns_koleksi" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Media</label>
                        <input type="text" class="form-control" required name="jns_media" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pengarang</label>
                        <input type="text" class="form-control" required name="pengarang" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" required name="penerbit" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <input type="text" class="form-control" required name="tahun" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cetakan</label>
                        <input type="text" class="form-control" required name="cetakan" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edisi</label>
                        <input type="text" class="form-control" required name="edisi" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" required name="status" placeholder="...">
                    </div>
                    <div class="float-end">
                        <button type="submit" class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <circle cx="12" cy="14" r="2" />
                                <polyline points="14 4 14 8 8 8 8 4" />
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection