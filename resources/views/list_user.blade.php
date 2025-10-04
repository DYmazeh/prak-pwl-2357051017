
@extends('layouts.app')
@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Daftar Pengguna</h3>
            <a href="{{ route('user.create') }}" class="btn btn-primary">+ Tambah User</a>
        </div>
        @include('components.user-table', ['users' => $users])
    </div>
</div>
@endsection