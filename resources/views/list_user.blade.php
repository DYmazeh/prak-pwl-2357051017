
@extends('layouts.app')
@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0">Daftar Pengguna</h3>
            
        </div>
            @if(session('success'))
            <meta name="flash-success" content="{{ session('success') }}">
            <noscript>
                <div class="alert alert-success">{{ session('success') }}</div>
            </noscript>
            @endif
            @if(session('error'))
            <meta name="flash-error" content="{{ session('error') }}">
            <noscript>
                <div class="alert alert-danger">{{ session('error') }}</div>
            </noscript>
            @endif
        @include('components.user-table', ['users' => $users])
    </div>
</div>
@endsection