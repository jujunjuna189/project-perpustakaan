@extends('layouts.app_admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header fw-bold h3">
                Tambah Anggota
            </div>
            <div class="card-body">
                <form action="{{ route('anggota.updated') }}" method="post">
                    @csrf
                    <input type="hidden" name="kd_anggota" value="{{ $anggota->kd_anggota }}">
                    <div class="mb-3">
                        <label class="form-label">Kode Anggota</label>
                        <input type="text" class="form-control" name="new_kd_anggota" value="{{ $anggota->kd_anggota }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Anggota</label>
                        <input type="text" class="form-control" name="nm_anggota" value="{{ $anggota->nm_anggota }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="{{ $anggota->jk }}">{{ $anggota->jk }}</option>
                            @if($anggota->jk === 'Laki-Laki')
                            <option value="Perempuan">Perempuan</option>
                            @endif
                            @if($anggota->jk === 'Perempuan')
                            <option value="Laki-Laki">Laki-Laki</option>
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tp_lahir" value="{{ $anggota->tp_lahir }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="{{ $anggota->tgl_lahir }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control">{{ $anggota->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" value="{{ $anggota->no_hp }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Id</label>
                        <input type="text" class="form-control" name="jns_id" value="{{ $anggota->jns_id }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Id</label>
                        <input type="text" class="form-control" name="no_id" value="{{ $anggota->no_id }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Anggota</label>
                        <input type="text" class="form-control" name="jns_anggota" value="{{ $anggota->jns_anggota }}" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" value="{{ $anggota->status }}" placeholder="...">
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