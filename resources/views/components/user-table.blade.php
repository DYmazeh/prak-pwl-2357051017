<div class="table-responsive">
    <table class="table align-middle shadow-sm" style="border-radius:1.2rem; overflow:hidden;">
        <thead>
            <tr>
                <th class="text-nowrap" style="background:linear-gradient(90deg,#6366f1,#7c3aed);color:#fff;">ID (UUID)</th>
                <th class="text-nowrap" style="background:linear-gradient(90deg,#6366f1,#7c3aed);color:#fff;">Nama</th>
                <th class="text-nowrap" style="background:linear-gradient(90deg,#6366f1,#7c3aed);color:#fff;">NPM</th>
                <th class="text-nowrap" style="background:linear-gradient(90deg,#6366f1,#7c3aed);color:#fff;">Kelas</th>
                <th class="text-nowrap" style="background:linear-gradient(90deg,#6366f1,#7c3aed);color:#fff;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr style="background:#fff;">
                <td class="text-break" style="max-width:180px;">{{ $user->uuid }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->uuid) }}" class="btn gradient-btn btn-sm me-1 d-inline-flex align-items-center" style="border-radius:0.7rem;">
                        <i class="bi bi-pencil me-1"></i> Edit
                    </a>
                    <form action="{{ route('user.destroy', $user->uuid) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm d-inline-flex align-items-center" style="border-radius:0.7rem;" onclick="return confirm('Yakin ingin menghapus user ini?')">
                            <i class="bi bi-trash me-1"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>