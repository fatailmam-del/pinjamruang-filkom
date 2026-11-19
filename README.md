# PinjamRuang FILKOM

Aplikasi web peminjaman ruangan FILKOM UB (Laravel + Blade + Bootstrap 5 + MySQL).
Proyek Akhir Pengembangan Aplikasi Web — Kelompok 3, TI-C.

## Instalasi

```bash
git clone https://github.com/huseinsm/pinjamruang-filkom.git
cd pinjamruang-filkom
composer install
cp .env.example .env          # Windows CMD: copy .env.example .env
php artisan key:generate
```

Buat database `pinjamruang` di MySQL (phpMyAdmin), sesuaikan `.env`, lalu:

```bash
php artisan migrate --seed
php artisan serve
```

Akun admin awal: sesuai `ADMIN_EMAIL` dan `ADMIN_PASSWORD` di `.env`.

## Pembagian Tugas

| Anggota | Fitur | Branch |
|---|---|---|
| Husein (HSM) | Landing, Login, Register, Profil | `feat/auth` |
| Aulia (AL) | Kelola Ruangan, Jadwal Ruangan | `feat/ruangan` |
| Reno (RS) | Beranda User, Ajukan, Pengajuan Saya | `feat/pengajuan` |
| Fata (FI) | Dashboard Admin, Verifikasi | `feat/verifikasi` |

## Alur Git

- `main`: versi stabil. Jangan push langsung.
- `dev`: gabungan semua fitur.
- `feat/*`: satu branch per fitur, dibuat dari `dev`, digabung lewat Pull Request ke `dev`.

```bash
git checkout feat/nama-fitur
git pull origin dev            # ambil update terbaru dari dev
# ... kerjakan, lalu:
git add .
git commit -m "feat: deskripsi singkat"
git push origin feat/nama-fitur
```

Desain: https://www.figma.com/design/lKyRfRmBKQsEqTPtWt2fBN
