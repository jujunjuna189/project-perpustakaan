<?php

namespace App\Http\Controllers;

use App\Models\KoleksiModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $koleksi = KoleksiModel::orderBy('created_at', 'desc')->get();
        $data['koleksi'] = $koleksi;
        return view('buku.index', $data);
    }

    public function create()
    {
        return view('buku.form.create');
    }

    public function store(Request $request)
    {
        $koleksi = new KoleksiModel();
        $koleksi->fill($request->all());
        $koleksi->save();
        return redirect()->route('buku');
    }

    public function update(Request $request)
    {
        $koleksi = KoleksiModel::where('kd_koleksi', $request->kd_koleksi)->first();
        $data['koleksi'] = $koleksi;
        return view('buku.form.update', $data);
    }

    public function updated(Request $request)
    {
        $data['kd_koleksi'] = $request->new_kd_koleksi;
        $data['judul'] = $request->judul;
        $data['jns_bahan_pustaka'] = $request->jns_bahan_pustaka;
        $data['jns_koleksi'] = $request->jns_koleksi;
        $data['jns_media'] = $request->jns_media;
        $data['pengarang'] = $request->pengarang;
        $data['penerbit'] = $request->penerbit;
        $data['tahun'] = $request->tahun;
        $data['cetakan'] = $request->cetakan;
        $data['edisi'] = $request->edisi;
        $data['status'] = $request->status;

        KoleksiModel::where('kd_koleksi', $request->kd_koleksi)->update($data);
        return redirect()->route('buku');
    }

    public function delete(Request $request)
    {
        KoleksiModel::where('kd_koleksi', $request->kd_koleksi)->delete();
        return redirect()->route('buku');
    }
}
