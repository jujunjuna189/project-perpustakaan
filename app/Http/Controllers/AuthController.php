<?php

namespace App\Http\Controllers;

use App\Models\PenggunaModel;
use App\Models\PenumpangModel;
use App\Models\PetugasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $user = PenggunaModel::where('username', $request->username)->first();
        $redirectTo = $this->redirectTo($user, $request);
        return $redirectTo;
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:pengguna'
        ]);

        $pengguna = new PenggunaModel();
        $pengguna->fill($request->except('id_penupang', 'password'));
        $pengguna->password = Hash::make($request->password);
        $pengguna->save();

        $redirectTo = $this->redirectTo($pengguna, $request);
        return $redirectTo;
    }

    private function redirectTo($data, $request)
    {
        if (isset($data->password) && isset($request->password)) {
            if (Hash::check($request->password, $data->password)) {
                session(['user' => $data]);
                return redirect()->route('dashboard');
            }
        }

        return redirect()->route('login')->with('failed', 'Gagal Login');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
