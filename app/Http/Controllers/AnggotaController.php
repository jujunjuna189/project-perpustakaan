<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\PenggunaModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = AnggotaModel::orderBy('created_at', 'desc')->get();
        $data['anggota'] = $anggota;
        return view('anggota.index', $data);
    }

    public function create()
    {
        return view('anggota.form.create');
    }

    public function store(Request $request)
    {
        $anggota = new AnggotaModel();
        $anggota->fill($request->except('jml_pjm'));
        $anggota->jml_pjm = 0;
        $anggota->save();

        $pengguna = new PenggunaModel();
        $pengguna->nm_pengguna = $request->nm_anggota;
        $pengguna->username = $request->kd_anggota;
        $pengguna->password = Hash::make(123456);
        $pengguna->hak_akses = 2;
        $pengguna->status = 'Anggota Teladan';
        $pengguna->save();

        return redirect()->route('anggota');
    }

    public function storeDumy(Request $request)
    {
        $anggota = new AnggotaModel();
        $anggota->kd_anggota = $request->username;
        $anggota->nm_anggota = $request->nm_pengguna;
        $anggota->jk = 'Laki-Laki';
        $anggota->tp_lahir = '-';
        $anggota->tgl_lahir = Carbon::now();
        $anggota->alamat = '-';
        $anggota->no_hp = '081000000000';
        $anggota->jns_id = '-';
        $anggota->no_id = '-';
        $anggota->jns_anggota = '-';
        $anggota->status = '-';
        $anggota->jml_pjm = 0;
        $anggota->save();

        return true;
    }

    public function update(Request $request)
    {
        $anggota = AnggotaModel::where('kd_anggota', $request->kd_anggota)->first();
        $data['anggota'] = $anggota;
        return view('anggota.form.update', $data);
    }

    public function updated(Request $request)
    {
        $old_kd = $request->kd_anggota;

        $data['kd_anggota'] = $request->new_kd_anggota;
        $data['nm_anggota'] = $request->nm_anggota;
        $data['jk'] = $request->jk;
        $data['tp_lahir'] = $request->tp_lahir;
        $data['tgl_lahir'] = $request->tgl_lahir;
        $data['alamat'] = $request->alamat;
        $data['no_hp'] = $request->no_hp;
        $data['jns_id'] = $request->jns_id;
        $data['no_id'] = $request->no_id;
        $data['jns_anggota'] = $request->jns_anggota;
        $data['status'] = $request->status;

        AnggotaModel::where('kd_anggota', $old_kd)->update($data);
        return redirect()->route('anggota');
    }

    public function delete(Request $request)
    {
        AnggotaModel::where('kd_anggota', $request->kd_anggota)->delete();
        return redirect()->route('anggota');
    }
}
