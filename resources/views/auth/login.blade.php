@extends('layouts.app')
@section('content')
<div class="container container-tight py-4">
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="{{ route('auth') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukan Username...">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Password
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password...">
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        Belum punya akun ? <a href="{{ route('register') }}" tabindex="-1">Daftar</a>
    </div>
</div>
@endsection