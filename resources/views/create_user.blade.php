@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="mb-4">Tambah Pengguna Baru</h3>
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" id="npm" name="npm" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas_id" class="form-label">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-select" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn gradient-btn w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.gradient-btn {
    background: linear-gradient(90deg, #6366f1 0%, #7c3aed 100%);
    color: #fff !important;
    font-weight: 600;
    border: none;
    border-radius: 0.7rem;
    padding: 0.6rem 1rem;
    transition: box-shadow 0.3s, transform 0.2s, opacity 0.2s;
}
.gradient-btn:hover {
    box-shadow: 0 4px 16px rgba(99,102,241,0.18);
    transform: translateY(-2px);
    opacity: 0.95;
}
.gradient-btn:active {
    transform: scale(0.97);
    box-shadow: 0 2px 12px rgba(99,102,241,0.18);
}
</style>
@endsection
