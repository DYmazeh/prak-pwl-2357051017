    <style>
        /* ...existing styles... */
        .gradient-btn, .nav-link.text-white {
            transition: background 0.3s, color 0.3s, box-shadow 0.3s, transform 0.2s;
        }
        .gradient-btn:active, .gradient-btn.active {
            box-shadow: 0 4px 24px rgba(99,102,241,0.18);
            transform: scale(0.98);
            background: linear-gradient(90deg, #7c3aed 0%, #6366f1 100%);
        }
        .nav-link.text-white.active {
            font-weight: 700;
            color: #fff !important;
            text-shadow: 0 2px 8px rgba(99,102,241,0.18);
            border-bottom: 2px solid #fff;
        }
        .gradient-btn:hover {
            box-shadow: 0 4px 16px rgba(99,102,241,0.18);
            opacity: 0.97;
            transform: translateY(-2px) scale(1.03);
        }
        .nav-link.text-white:hover {
            color: #e0e7ff !important;
            text-shadow: 0 2px 8px rgba(99,102,241,0.18);
            transform: translateY(-1px);
        }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel App' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.min.css">
    <style>
        html, body {
            height: 100%;
            font-family: 'Inter', Arial, sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #e0e7ff 0%, #f8fafc 50%, #c7d2fe 100%);
        }
        .gradient-navbar {
            background: linear-gradient(90deg, #6366f1 0%, #7c3aed 100%);
            color: #fff;
            box-shadow: 0 2px 8px rgba(99,102,241,0.08);
        }
        .gradient-btn {
            background: linear-gradient(90deg, #6366f1 0%, #7c3aed 100%);
            color: #fff !important;
            border: none;
            box-shadow: 0 2px 8px rgba(99,102,241,0.12);
            transition: box-shadow 0.2s;
        }
        .gradient-btn:hover {
            box-shadow: 0 4px 16px rgba(99,102,241,0.18);
            opacity: 0.95;
        }
        .card {
            border-radius: 1.2rem;
            box-shadow: 0 2px 16px rgba(99,102,241,0.08);
            border: none;
        }
        .table thead {
            background: linear-gradient(90deg, #6366f1 0%, #7c3aed 100%);
            color: #fff;
        }
        .table tbody tr {
            background: #fff;
            transition: box-shadow 0.2s;
        }
        .table tbody tr:hover {
            box-shadow: 0 2px 8px rgba(99,102,241,0.08);
        }
        .form-label {
            font-weight: 600;
        }
        .form-control, .form-select {
            border-radius: 0.7rem;
            border: 1px solid #c7d2fe;
        }
        .alert {
            border-radius: 0.7rem;
        }
        footer { flex-shrink: 0; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg gradient-navbar mb-2">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#" style="font-size:1.3rem; color:#fff;">
            <span>List Berandalan</span>
            </a>
            <div class="d-flex gap-3 ms-auto">
                <a href="{{ route('user.create') }}"
                   class="nav-btn px-4 d-inline-flex align-items-center{{ request()->routeIs('user.create') ? ' active' : '' }}"
                   style="font-weight:600;font-size:1.1rem;">
                    <i class="bi bi-plus-circle me-1"></i> Create
                </a>
                <a href="/user"
                   class="nav-btn px-4 d-inline-flex align-items-center{{ request()->is('user') ? ' active' : '' }}"
                   style="font-weight:600;font-size:1.1rem;">
                    <i class="bi bi-file-earmark-text me-1"></i> Read
                </a>
            </div>
    <style>
        .nav-btn {
            color: #fff !important;
            background: transparent;
            border-radius: 0.8rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            transition: background 0.3s, color 0.3s, box-shadow 0.3s, transform 0.2s;
            position: relative;
        }
        .nav-btn.active {
            background: linear-gradient(90deg,#6366f1,#7c3aed);
            box-shadow: 0 2px 16px rgba(99,102,241,0.12);
            color: #fff !important;
            
        }
        html, body {
        height: 100%;
        display: flex;
        flex-direction: column;
        }
        main {
        flex: 1 0 auto;
        }
        footer {
        flex-shrink: 0;
        }
        
        
    </style>
        </div>
    </nav>
    <main class="container py-4">
        @if(request()->routeIs('user.create'))
            <div class="mb-4 d-flex justify-content-center">
                <div class="px-5 py-3 rounded-4 shadow" style="background: linear-gradient(90deg,#6366f1,#7c3aed); color: #fff; font-size:2rem; font-weight:700; letter-spacing:1px; box-shadow:0 2px 16px rgba(99,102,241,0.12); animation: fadeIn 0.7s;">
                    Create
                </div>
            </div>
        @elseif(request()->is('user'))
            <div class="mb-4 d-flex justify-content-center">
                <div class="px-5 py-3 rounded-4 shadow" style="background: linear-gradient(90deg,#6366f1,#7c3aed); color: #fff; font-size:2rem; font-weight:700; letter-spacing:1px; box-shadow:0 2px 16px rgba(99,102,241,0.12); animation: fadeIn 0.7s;">
                    Read
                </div>
            </div>
        @endif
        @yield('content')
    </main>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Show SweetAlert2 toast for success/error if present in session via Laravel-rendered meta tags
            const success = document.querySelector('meta[name="flash-success"]');
            const error = document.querySelector('meta[name="flash-error"]');
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
            });
            if (success) {
                Toast.fire({ icon: 'success', title: success.content });
            }
            if (error) {
                Toast.fire({ icon: 'error', title: error.content });
            }
        });
    </script>
</body>
</html>