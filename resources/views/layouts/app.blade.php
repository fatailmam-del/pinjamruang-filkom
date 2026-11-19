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
    {{-- Layout user: navbar atas --}}
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/beranda') }}"><i class="bi bi-door-open text-primary"></i> PinjamRuang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navUser"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navUser">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->is('beranda') ? 'active fw-semibold' : '' }}" href="{{ url('/beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('jadwal*') ? 'active fw-semibold' : '' }}" href="{{ url('/jadwal') }}">Jadwal Ruangan</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('pengajuan/buat') ? 'active fw-semibold' : '' }}" href="{{ url('/pengajuan/buat') }}">Ajukan Peminjaman</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('pengajuan') ? 'active fw-semibold' : '' }}" href="{{ url('/pengajuan') }}">Pengajuan Saya</a></li>
                </ul>
                <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ auth()->user()->name ?? 'Pengguna' }}</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ url('/profil') }}"><i class="bi bi-person"></i> Profil</a></li>
                        <li><form method="POST" action="{{ url('/logout') }}">@csrf<button class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Keluar</button></form></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
