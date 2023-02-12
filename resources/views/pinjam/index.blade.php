@extends('layouts.app_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Pinjam Buku
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pinjam.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="kd_koleksi" value="{{ $koleksi->kd_koleksi }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pinjam</label>
                                <input type="text" readonly class="form-control bg-light" name="tgl_pinjam" value="{{ Carbon\Carbon::now() }}" placeholder="...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Lama Pinjam <small>(3 Hari)</small> </label>
                                <input type="number" class="form-control" name="lama_pinjam" required placeholder="Masukan Angka">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            Detail Buku
                            <div class="mt-2">
                                <div class="d-inline-block p-2 rounded" style="border: 1px dashed #0c0c0c">
                                    <table>
                                        <tr>
                                            <td>Judul Buku</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->judul }}</th>
                                        </tr>
                                        <tr>
                                            <td>Jenis Bahan Pustaka</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->jns_bahan_pustaka }}</th>
                                        </tr>
                                        <tr>
                                            <td>Jenis Buku</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->jns_koleksi }}</th>
                                        </tr>
                                        <tr>
                                            <td>Jenis Media</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->jns_media }}</th>
                                        </tr>
                                        <tr>
                                            <td>Pengarang</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->pengarang }}</th>
                                        </tr>
                                        <tr>
                                            <td>Penerbit</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->penerbit }}</th>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->tahun }}</th>
                                        </tr>
                                        <tr>
                                            <td>Cetakan</td>
                                            <td class="px-2">:</td>
                                            <th>{{ $koleksi->cetakan }}</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-end mt-4">
                        <button type="submit" class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <circle cx="12" cy="14" r="2" />
                                <polyline points="14 4 14 8 8 8 8 4" />
                            </svg>
                            Pinjam Buku
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection