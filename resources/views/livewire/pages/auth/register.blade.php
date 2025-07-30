<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] // <-- Menggunakan layout baru kita
#[Title('Register')] // <-- Mengatur judul halaman
class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="w-full lg:w-1/2 p-5 lg:p-12 bg-white bg-opacity-95">    
    <div class="flex mb-8">
        <a href="{{ route('login') }}" class="flex-1 py-3 text-center font-semibold text-gray-400 border-b-2 border-transparent hover:text-purple-600 transition-all duration-300" wire:navigate>
            Masuk
        </a>
        <a href="{{ route('register') }}" class="flex-1 py-3 text-center font-semibold text-purple-600 border-b-2 border-purple-600 transition-all duration-300" wire:navigate>
            Daftar
        </a>
    </div>

    <div class="animate-fade-in">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Buat Akun Baru</h2>
        
        <form wire:submit="register" class="space-y-6">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input wire:model="name" type="text" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('name') border-red-500 @enderror" placeholder="Nama lengkap Anda">
                 @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Email</label>
                <input wire:model="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('email') border-red-500 @enderror" placeholder="nama@email.com">
                 @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Password</label>
                <input wire:model="password" type="password" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('password') border-red-500 @enderror" placeholder="Minimal 8 karakter">
                 @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input wire:model="password_confirmation" type="password" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow" placeholder="Ulangi password">
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                Daftar Sekarang
            </button>
        </form>
    </div>
</div>