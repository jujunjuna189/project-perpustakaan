<?php

namespace App\Http\Controllers;

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
        return view('dashboard.index');
    }

    public function forOperator()
    {
        return view('dashboard.index_admin');
    }
}
