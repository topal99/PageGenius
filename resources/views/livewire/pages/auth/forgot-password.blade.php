<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] // <-- Menggunakan layout tamu kita
#[Title('Forgot Password')] // <-- Mengatur judul halaman
class extends Component
{
    public string $email = '';
    public ?string $status = null;

    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            // Jika berhasil, kita set status untuk menampilkan pesan sukses
            $this->status = trans($status);
            return;
        }

        $this->addError('email', trans($status));
    }
}; ?>

<div class="w-full lg:w-1/2 p-8 lg:p-12 bg-white bg-opacity-95">
    
    {{-- Tampilkan form jika email BELUM terkirim --}}
    @if (! $status)
    <div class="animate-fade-in">
        <div class="mb-8">
            <a href="{{ route('login') }}" class="flex items-center text-purple-600 hover:text-purple-800 transition-colors duration-300" wire:navigate>
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Login
            </a>
        </div>
        
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Reset Password</h2>
        <p class="text-gray-600 mb-8">Masukkan email Anda dan kami akan mengirimkan link untuk reset password.</p>
        
        <form wire:submit="sendPasswordResetLink" class="space-y-6">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700">Email</label>
                <input wire:model="email" type="email" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 input-glow @error('email') border-red-500 @enderror" placeholder="nama@email.com">
                @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
            </div>
            
            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                Kirim Link Reset
            </button>
        </form>
    </div>
    @else
    {{-- Tampilkan pesan sukses jika email SUDAH terkirim --}}
    <div class="text-center animate-fade-in">
        <div class="mb-8">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce">
                <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Email Terkirim!</h2>
            <p class="text-gray-600 mb-8">
                {{ $status }}
            </p>
        </div>
        
        <div class="space-y-4">
            <a href="{{ route('login') }}" class="w-full block bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl" wire:navigate>
                Kembali ke Login
            </a>
        </div>
    </div>
    @endif
</div>