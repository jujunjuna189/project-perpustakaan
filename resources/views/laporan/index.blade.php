@extends('layouts.app_admin')
@section('content')
<div class="d-flex flex-wrap mt-3">
    <div class="card pe-5" style="border: 1px dashed #0c0c0c">
        <div class="card-body">
            <div class="small strong">Jumlah Dipinjam</div>
            <div class="h1">{{ $jml_pinjam->count() }} <small>Buku</small> </div>
        </div>
    </div>
    <div class="card pe-5 ms-2" style="border: 1px dashed #0c0c0c">
        <div class="card-body">
            <div class="small strong">Jumlah Dikembalikan</div>
            <div class="h1">{{ $kembali->count() }} <small>buku</small> </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title">List Buku Dipinjam</h3>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 15l6 -6l6 6" />
                        </svg>
                    </th>
                    <th>No Peminjaman</th>
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Batas Pinjam</th>
                    <th>Judul</th>
                    <th class="bg-dark text-light">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pinjam as $index => $val)
                @if($val->status_kembali !== 1)
                <tr>
                    <td>{{ $index += 1 }}</td>
                    <td>{{ $val->no_transaksi_pinjam }}</td>
                    <td>{{ $val->kd_anggota }}</td>
                    <td>{{ $val->nm_anggota }}</td>
                    <td>{{ $val->tg_pinjam }}</td>
                    <td>{{ $val->tg_bts_kembali }}</td>
                    <td>{{ $val->judul }}</td>
                    <td>
                        @if($val->status_kembali === 1)
                        <span class="text-green">Dikembalikan</span>
                        @else
                        <a href="{{ route('kembalikan', ['no_transaksi_pinjam' => $val->no_transaksi_pinjam]) }}" class="btn p-2" style="border: 1px dashed #0c0c0c">
                            Kembalikan
                        </a>
                        @endif
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--  -->
<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">List Buku Dikembalikan</h3>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 15l6 -6l6 6" />
                        </svg>
                    </th>
                    <th>No Peminjaman</th>
                    <th>Kode Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Batas Pinjam</th>
                    <th>Judul</th>
                    <th>Denda</th>
                    <th class="bg-dark text-light">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kembali as $index => $val)
                <tr>
                    <td>{{ $index += 1 }}</td>
                    <td>{{ $val->no_transaksi_kembali }}</td>
                    <td>{{ $val->kd_anggota }}</td>
                    <td>{{ $val->nm_pengguna }}</td>
                    <td>{{ $val->tg_pinjam }}</td>
                    <td>{{ $val->tg_kembali }}</td>
                    <td>{{ $val->judul }}</td>
                    <td>{{ $val->denda }}</td>
                    <td>
                        <span class="text-green">Dikembalikan</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection