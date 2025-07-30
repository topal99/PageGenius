<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Jangan lupa import model User
use Illuminate\Support\Facades\Hash; // Import Hash

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Akun Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@pagegenius.com',
            'role' => 'admin', // Tetapkan sebagai admin
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Ganti dengan password aman
        ]);

        // Buat Akun Pengguna Biasa
        User::create([
            'name' => 'Test User',
            'email' => 'user@pagegenius.com',
            'role' => 'user', // Tetapkan sebagai user (default)
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Ganti dengan password aman
        ]);
    }
}