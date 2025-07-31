<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-600 to-cyan-600 shadow-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" wire:navigate class="flex items-center group">
                            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-3 group-hover:bg-opacity-30 transition-all">
                                <span class="text-2xl">🚀</span>
                            </div>
                            <span class="text-white font-black text-xl hidden sm:block"></span>
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" wire:navigate class="flex items-center group">
                            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-xl flex items-center justify-center mr-3 group-hover:bg-opacity-30 transition-all">
                                <span class="text-2xl">🏠</span>
                            </div>
                            <span class="text-white font-black text-xl hidden sm:block"></span>
                        </a>
                    @endif
                </div>

                <div class="hidden space-x-2 sm:-my-px sm:ms-10 sm:flex items-center">
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" 
                           wire:navigate
                           class="inline-flex items-center px-4 py-2 text-sm font-bold text-white rounded-full transition-all
                                  {{ request()->routeIs('admin.dashboard') 
                                     ? 'bg-white bg-opacity-20 shadow-lg' 
                                     : 'hover:bg-white hover:bg-opacity-10' }}">
                            <span class="mr-2">📊</span> Admin Dashboard
                        </a>
                        <a href="{{ route('admin.users.index') }}" 
                           wire:navigate
                           class="inline-flex items-center px-4 py-2 text-sm font-bold text-white rounded-full transition-all
                                  {{ request()->routeIs('admin.users.*') 
                                     ? 'bg-white bg-opacity-20 shadow-lg' 
                                     : 'hover:bg-white hover:bg-opacity-10' }}">
                            <span class="mr-2">👥</span> Users
                        </a>
                        <a href="{{ route('admin.templates.index') }}" 
                           wire:navigate
                           class="inline-flex items-center px-4 py-2 text-sm font-bold text-white rounded-full transition-all
                                  {{ request()->routeIs('admin.templates.*') 
                                     ? 'bg-white bg-opacity-20 shadow-lg' 
                                     : 'hover:bg-white hover:bg-opacity-10' }}">
                            <span class="mr-2">📄</span> Templates
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" 
                           wire:navigate
                           class="inline-flex items-center px-4 py-2 text-sm font-bold text-white rounded-full transition-all
                                  {{ request()->routeIs('dashboard') 
                                     ? 'bg-white bg-opacity-20 shadow-lg' 
                                     : 'hover:bg-white hover:bg-opacity-10' }}">
                            <span class="mr-2">🏠</span> Dashboard
                        </a>

                        <a href="{{ route('pages.create') }}" 
                           wire:navigate
                           class="inline-flex items-center px-4 py-2 text-sm font-bold text-white rounded-full transition-all
                                  {{ request()->routeIs('dashboard') 
                                     ? 'bg-white bg-opacity-20 shadow-lg' 
                                     : 'hover:bg-white hover:bg-opacity-10' }}">
                            <span class="mr-2">➕</span> Tambah Halaman
                        </a>
                        @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full text-white font-bold text-sm transition-all group">
                            <div class="w-8 h-8 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md group-hover:scale-110 transition-transform">
                                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                            </div>
                            <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                            <div class="ms-2">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 px-4 py-3">
                                <p class="text-xs text-white font-bold uppercase tracking-wider">Account Menu</p>
                            </div>
                            <a href="{{ route('profile') }}" 
                               wire:navigate
                               class="block px-4 py-3 text-sm text-gray-700 hover:bg-gradient-to-r hover:from-gray-50 hover:to-blue-50 transition-all group">
                                <div class="flex items-center">
                                    <span class="mr-3 text-lg group-hover:scale-110 transition-transform">👤</span>
                                    <span class="font-medium">Profile</span>
                                </div>
                            </a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="block w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-gradient-to-r hover:from-red-50 hover:to-pink-50 transition-all group">
                                    <div class="flex items-center">
                                        <span class="mr-3 text-lg group-hover:scale-110 transition-transform">🚪</span>
                                        <span class="font-medium">Log Out</span>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" 
                        class="inline-flex items-center justify-center p-2 rounded-xl text-white bg-white bg-opacity-20 hover:bg-opacity-30 transition-all">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white bg-opacity-10 backdrop-blur-sm">
        <div class="pt-2 pb-3 space-y-1">
            @if (Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" 
                   wire:navigate
                   class="block px-4 py-2 text-white font-bold transition-all
                          {{ request()->routeIs('admin.dashboard') 
                             ? 'bg-white bg-opacity-20' 
                             : 'hover:bg-white hover:bg-opacity-10' }}">
                    <div class="flex items-center">
                        <span class="mr-2">📊</span> Admin Dashboard
                    </div>
                </a>
                <a href="{{ route('admin.users.index') }}" 
                   wire:navigate
                   class="block px-4 py-2 text-white font-bold transition-all
                          {{ request()->routeIs('admin.users.*') 
                             ? 'bg-white bg-opacity-20' 
                             : 'hover:bg-white hover:bg-opacity-10' }}">
                    <div class="flex items-center">
                        <span class="mr-2">👥</span> Users
                    </div>
                </a>
                <a href="{{ route('admin.templates.index') }}" 
                   wire:navigate
                   class="block px-4 py-2 text-white font-bold transition-all
                          {{ request()->routeIs('admin.templates.*') 
                             ? 'bg-white bg-opacity-20' 
                             : 'hover:bg-white hover:bg-opacity-10' }}">
                    <div class="flex items-center">
                        <span class="mr-2">📄</span> Templates
                    </div>
                </a>
            @else
                <a href="{{ route('dashboard') }}" 
                   wire:navigate
                   class="block px-4 py-2 text-white font-bold transition-all
                          {{ request()->routeIs('dashboard') 
                             ? 'bg-white bg-opacity-20' 
                             : 'hover:bg-white hover:bg-opacity-10' }}">
                    <div class="flex items-center">
                        <span class="mr-2">🏠</span> Dashboard
                    </div>
                </a>
                
            @endif
        </div>

        <div class="pt-4 pb-1 border-t border-white border-opacity-20">
            <div class="px-4 pb-3">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white font-bold shadow-md">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div class="ml-3">
                        <div class="font-bold text-white" x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                        <div class="text-sm text-white text-opacity-80">{{ auth()->user()->email }}</div>
                    </div>
                </div>
            </div>

            <div class="space-y-1">
                <a href="{{ route('profile') }}" 
                   wire:navigate
                   class="block px-4 py-2 text-white font-bold hover:bg-white hover:bg-opacity-10 transition-all">
                    <div class="flex items-center">
                        <span class="mr-2">👤</span> Profile
                    </div>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="block w-full text-left px-4 py-2 text-white font-bold hover:bg-white hover:bg-opacity-10 transition-all">
                        <div class="flex items-center">
                            <span class="mr-2">🚪</span> Log Out
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>