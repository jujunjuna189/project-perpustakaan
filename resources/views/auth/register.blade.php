@extends('layouts.app')
@section('content')
<div class="container container-tight py-4">
    <div class="card card-md">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Daftar Akun</h2>
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nm_pengguna" placeholder="...">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="...">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" name="password" placeholder="...">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="...">
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        Sudah punya akun ? <a href="{{ route('login') }}" tabindex="-1">Login</a>
    </div>
</div>
@endsection