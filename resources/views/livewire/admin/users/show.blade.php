<div>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-cyan-600 py-6">
            <h2 class="font-black text-3xl text-white text-center drop-shadow-lg">
                Detail Pengguna: {{ $user->name }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- User Info Card -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="mr-2">👤</span> Informasi Pengguna
                    </h3>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <dt class="text-sm font-bold text-gray-500 uppercase tracking-wider flex items-center">
                                <span class="mr-2">📝</span> Nama
                            </dt>
                            <dd class="mt-2 text-lg font-semibold text-gray-900">{{ $user->name }}</dd>
                        </div>
                        
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <dt class="text-sm font-bold text-gray-500 uppercase tracking-wider flex items-center">
                                <span class="mr-2">✉️</span> Email
                            </dt>
                            <dd class="mt-2 text-lg font-semibold text-gray-900 flex items-center">
                                {{ $user->email }}
                                @if($user->email_verified_at)
                                    <span class="ml-2 text-green-500" title="Email Terverifikasi">✓</span>
                                @endif
                            </dd>
                        </div>
                        
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <dt class="text-sm font-bold text-gray-500 uppercase tracking-wider flex items-center">
                                <span class="mr-2">📅</span> Tanggal Bergabung
                            </dt>
                            <dd class="mt-2">
                                <p class="text-lg font-semibold text-gray-900">{{ $user->created_at->format('d M Y') }}</p>
                                <p class="text-sm text-gray-500">{{ $user->created_at->format('H:i') }} WIB</p>
                            </dd>
                        </div>
                        
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border border-gray-200">
                            <dt class="text-sm font-bold text-gray-500 uppercase tracking-wider flex items-center">
                                <span class="mr-2">📄</span> Jumlah Halaman
                            </dt>
                            <dd class="mt-2 text-lg font-semibold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                                {{ $pages->count() }}
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pages Table -->
            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="mr-2">📋</span> Halaman yang Dibuat
                    </h3>
                </div>

                @if (session('status'))
                    <div class="mx-6 mt-6 p-4 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl" role="alert">
                        <div class="flex items-center">
                            <span class="text-2xl mr-3">✅</span>
                            <p class="text-green-700 font-medium">{{ session('status') }}</p>
                        </div>
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead class="bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    <div class="flex items-center">
                                        <span class="mr-1">📝</span> Judul
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    <div class="flex items-center">
                                        <span class="mr-1">📊</span> Status
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    <div class="flex items-center justify-center">
                                        <span class="mr-1">⚡</span> Aksi
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($pages as $page)
                                <tr class="hover:bg-gradient-to-r hover:from-gray-50 hover:to-blue-50 transition-all duration-200">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full flex items-center justify-center text-white font-bold mr-3 shadow-md">
                                                {{ strtoupper(substr($page->title, 0, 1)) }}
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-900">{{ $page->title }}</p>
                                                <p class="text-xs text-gray-500">ID: #{{ $page->id }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($page->status === 'published')
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-md">
                                                ✅ Published
                                            </span>
                                        @else
                                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-md">
                                                📝 {{ ucfirst($page->status) }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="{{ route('public.page.show', $page) }}" 
                                               target="_blank"
                                               class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition-all transform hover:scale-110 shadow-md"
                                               title="Lihat Halaman">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                </svg>
                                            </a>
                                            <button 
                                                wire:click="deletePage({{ $page->id }})"
                                                wire:confirm="Anda yakin ingin menghapus halaman '{{ $page->title }}'?"
                                                class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition-all transform hover:scale-110 shadow-md"
                                                title="Hapus Halaman">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-12 text-center">
                                        <div class="text-gray-400">
                                            <span class="text-6xl block mb-4">📄</span>
                                            <p class="text-xl font-semibold mb-2">Belum ada halaman</p>
                                            <p class="text-sm">Pengguna ini belum membuat halaman apapun</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Back Button -->
            <div class="flex justify-center mt-6">
                <a href="{{ route('admin.users.index') }}" 
                   wire:navigate
                   class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar Pengguna
                </a>
            </div>
        </div>
    </div>
</div>