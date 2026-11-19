<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'PinjamRuang FILKOM')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    {{-- Layout admin: sidebar kiri --}}
    <div class="d-flex">
        <aside class="sidebar d-flex flex-column justify-content-between p-3">
            <div>
                <a class="d-block fw-bold fs-5 mb-4 text-decoration-none text-dark" href="{{ url('/admin') }}"><i class="bi bi-door-open text-primary"></i> PinjamRuang</a>
                <small class="text-uppercase text-muted fw-semibold ps-2">Panel Admin</small>
                <nav class="nav flex-column mt-2 gap-1">
                    <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ url('/admin') }}"><i class="bi bi-grid"></i> Dashboard</a>
                    <a class="nav-link {{ request()->is('admin/verifikasi*') ? 'active' : '' }}" href="{{ url('/admin/verifikasi') }}"><i class="bi bi-inbox"></i> Verifikasi Pengajuan</a>
                    <a class="nav-link {{ request()->is('admin/ruangan*') ? 'active' : '' }}" href="{{ url('/admin/ruangan') }}"><i class="bi bi-building"></i> Kelola Ruangan</a>
                </nav>
            </div>
            <div class="d-flex align-items-center gap-2 p-2 rounded bg-light">
                <div class="flex-grow-1">
                    <div class="fw-semibold small">{{ auth()->user()->name ?? 'Admin' }}</div>
                    <a class="small text-muted text-decoration-none" href="{{ url('/profil') }}">Profil</a>
                </div>
                <form method="POST" action="{{ url('/logout') }}">@csrf<button class="btn btn-sm btn-light" title="Keluar"><i class="bi bi-box-arrow-right"></i></button></form>
            </div>
        </aside>
        <main class="flex-grow-1 p-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
