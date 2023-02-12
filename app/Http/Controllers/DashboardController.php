<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use App\Models\KoleksiModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $navigation = '';
        if (session('user')->hak_akses === 2) {
            $navigation = $this->forUser($request);
        } else {
            $navigation = $this->forOperator();
        }
        return $navigation;
    }

    public function forUser(Request $request)
    {
        $koleksi = KoleksiModel::all();

        $data['koleksi'] = $koleksi;
        return view('dashboard.index', $data);
    }

    public function forOperator()
    {
        $anggota = AnggotaModel::count();
        $koleksi = KoleksiModel::count();

        $data['anggota'] = $anggota;
        $data['koleksi'] = $koleksi;

        return view('dashboard.index_admin', $data);
    }
}
