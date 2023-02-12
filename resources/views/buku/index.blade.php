@extends('layouts.app_admin')
@section('content')
<div class="card">
    <div class="p-3 border-bottom">
        <div class="d-flex justify-content-between">
            <div class="h3 fw-bold">Data Buku</div>
            <div class="">
                <a href="{{ route('buku.create') }}" class="btn btn-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="2" />
                        <line x1="9" y1="12" x2="15" y2="12" />
                        <line x1="12" y1="9" x2="12" y2="15" />
                    </svg>
                    Tambah
                </a>
            </div>
        </div>
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
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Jenis Bahan Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th class="bg-dark text-light">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($koleksi as $index => $val)
                <tr>
                    <td>{{ $index += 1 }}</td>
                    <td>{{ $val->kd_koleksi }}</td>
                    <td>{{ $val->judul }}</td>
                    <td>{{ $val->jns_bahan_pustaka }}</td>
                    <td>{{ $val->pengarang }}</td>
                    <td>{{ $val->penerbit }}</td>
                    <td>{{ $val->tahun }}</td>
                    <td>
                        <a href="{{ route('buku.update', ['kd_koleksi' => $val->kd_koleksi]) }}" class="btn p-2" style="border: 1px dashed #0c0c0c">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon m-0 p-0" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                <path d="M16 5l3 3" />
                                <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                            </svg>
                        </a>
                        <a href="{{ route('buku.delete', ['kd_koleksi' => $val->kd_koleksi]) }}" class="btn p-2" style="border: 1px dashed #0c0c0c">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon m-0 p-0" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer d-flex align-items-center">
    </div>
</div>
@endsection