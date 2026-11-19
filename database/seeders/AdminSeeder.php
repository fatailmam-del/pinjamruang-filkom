<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrNew(['email' => env('ADMIN_EMAIL') ?: 'admin@filkom.ub.ac.id']);
        $admin->name = 'Admin Sarpras';
        $admin->password = Hash::make(env('ADMIN_PASSWORD') ?: 'password');
        $admin->role = 'admin';
        $admin->save();
    }
}
