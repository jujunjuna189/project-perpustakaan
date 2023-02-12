<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\KembalikanModel;
use App\Models\KoleksiModel;
use App\Models\PinjamModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PinjamController extends Controller
{
    public function index(Request $request)
    {
        $koleksi = KoleksiModel::where('kd_koleksi', $request->kd_koleksi)->first();
        $data['koleksi'] = $koleksi;
        return view('pinjam.index', $data);
    }

    public function store(Request $request)
    {
        $koleksi = KoleksiModel::where('kd_koleksi', $request->kd_koleksi)->first();
        $anggota = AnggotaModel::where('kd_anggota', session('user')->username)->first();

        $bts_kembali = Carbon::parse($request->tgl_pinjam)->addDays($request->lama_pinjam)->format('Y-m-d');

        $data['no_transaksi_pinjam'] = time();
        $data['kd_anggota'] = $anggota->kd_anggota;
        $data['nm_anggota'] = $anggota->nm_anggota;
        $data['tg_pinjam'] = $request->tgl_pinjam;
        $data['tg_bts_kembali'] = $bts_kembali;
        $data['kd_koleksi'] = $koleksi->kd_koleksi;
        $data['judul'] = $koleksi->judul;
        $data['jns_bhn_pustaka'] = $koleksi->jns_bahan_pustaka;
        $data['jns_koleksi'] = $koleksi->jns_koleksi;
        $data['jns_media'] = $koleksi->jns_media;
        $data['id_pengguna'] = session('user')->id ?? session('user')->id_pengguna;

        $pinjam = new PinjamModel();
        $pinjam->fill($data);
        $pinjam->save();

        return redirect()->route('list');
    }

    public function list()
    {
        $pinjam = PinjamModel::where('id_pengguna', session('user')->id ?? session('user')->id_pengguna)->get();
        $kembali = KembalikanModel::where('id_pengguna', session('user')->id ?? session('user')->id_pengguna)->get();

        $data['pinjam'] = $pinjam;
        $data['kembali'] = $kembali;

        return view('pinjam.list.index', $data);
    }

    public function kembalikan(Request $request)
    {
        $pinjam = PinjamModel::where('no_transaksi_pinjam', $request->no_transaksi_pinjam)->first();

        $denda = $this->getDenda($pinjam->tg_pinjam, $pinjam->tg_bts_kembali);

        $data['no_transaksi_kembali'] = time() + 1;
        $data['kd_anggota'] = $pinjam->kd_anggota;
        $data['nm_pengguna'] = $pinjam->nm_anggota;
        $data['tg_pinjam'] = $pinjam->tg_pinjam;
        $data['tg_kembali'] = $pinjam->tg_bts_kembali;
        $data['kd_koleksi'] = $pinjam->kd_koleksi;
        $data['judul'] = $pinjam->judul;
        $data['jns_bhn_pustaka'] = $pinjam->jns_bhn_pustaka;
        $data['jns_koleksi'] = $pinjam->jns_koleksi;
        $data['jns_media'] = $pinjam->jns_media;
        $data['denda'] = $denda;
        $data['ket'] = "Belikan Buku";
        $data['id_pengguna'] = session('user')->id ?? session('user')->id_pengguna;

        $kembali = new KembalikanModel();
        $kembali->fill($data);
        $kembali->save();

        PinjamModel::where('no_transaksi_pinjam', $request->no_transaksi_pinjam)->update([
            'status_kembali' => 1,
        ]);

        return redirect()->route('list');
    }

    public function getDenda($tg_pinjam, $tg_kembali)
    {
        if (Carbon::now()->format('Y-m-d') > $tg_kembali) {
            return 2000 * (int) Carbon::now()->diffInDays($tg_kembali);
        }
        return 0;
    }
}
