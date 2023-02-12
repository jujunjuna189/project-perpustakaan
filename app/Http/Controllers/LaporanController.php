<?php

namespace App\Http\Controllers;

use App\Models\KembalikanModel;
use App\Models\PinjamModel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $pinjam = PinjamModel::all();
        $jml_pinjam = PinjamModel::where('status_kembali', 0)->get();
        $kembali = KembalikanModel::all();

        $data['pinjam'] = $pinjam;
        $data['jml_pinjam'] = $jml_pinjam;
        $data['kembali'] = $kembali;

        return view('laporan.index', $data);
    }
}
