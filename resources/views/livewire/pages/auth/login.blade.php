<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] // <-- Menggunakan layout baru kita
#[Title('Login')] // <-- Mengatur judul halaman
class extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    public function login(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }

        session()->regenerate();
        
        $user = Auth::user();
        if ($user->role === 'admin') {
            $this->redirect(route('admin.dashboard', absolute: false), navigate: true);
            return;
        }
        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="w-full lg:w-1/2 p-5 lg:p-12 bg-white bg-opacity-95">
    <div class="flex mb-8">
        <a href="{{ route('login') }}" class="flex-1 py-3 text-center font-semibold text-purple-600 border-b-2 border-purple-600 transition-all duration-300" wire:navigate>
            Masuk
        </a>
        <a href="{{ route('register') }}" class="flex-1 py-3 text-center font-semibold text-gray-400 border-b-2 border-transparent hover:text-purple-600 transition-all duration-300" wire:navigate>
            Daftar
        </a>
    </div>

    <div class="animate-fade-in">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Masuk ke Akun</h2>
        
        <form wire:submit="login" class="space-y-6">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Email</label>
                <input wire:model="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('email') border-red-500 @enderror" placeholder="nama@email.com">
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Password</label>
                <input wire:model="password" type="password" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('password') border-red-500 @enderror" placeholder="Password Anda">
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input wire:model="remember" type="checkbox" class="rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                    <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-purple-600 hover:text-purple-800 transition-colors" wire:navigate>Lupa password?</a>
            </div>
            
            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                Masuk
            </button>
        </form>
    </div>
</div>