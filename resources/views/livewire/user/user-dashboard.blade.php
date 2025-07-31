<x-slot name="header">
    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 py-6">
        <h2 class="font-black text-3xl text-white text-center drop-shadow-lg">
            {{ __('Dashboard') }}
        </h2>
    </div>
</x-slot>

<div class="py-12 bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Halaman</p>
                        <p class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">{{ $pages->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                        <span class="text-xl">📄</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Dipublikasikan</p>
                        <p class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-600">{{ $pages->where('status', 'published')->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                        <span class="text-xl">✅</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-4 transform hover:scale-105 transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Draft</p>
                        <p class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">{{ $pages->where('status', 'draft')->count() }}</p>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                        <span class="text-xl">📝</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white flex items-center">
                        <span class="mr-2">📋</span> Halaman Anda
                    </h3>
                    <a href="{{ route('pages.create') }}" 
                       class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-medium transition-all flex items-center group">
                        <span class="mr-1 group-hover:scale-110 transition-transform">➕</span> Buat Halaman Baru
                    </a>
                </div>
            </div>

            <div class="p-6">
                @forelse ($pages as $page)
                    <div class="border-b border-gray-100 py-6 hover:bg-gradient-to-r hover:from-gray-50 hover:to-blue-50 transition-all duration-200 px-4 -mx-4 rounded-xl">
                        <div class="flex justify-between items-start">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full flex items-center justify-center text-white font-bold shadow-md flex-shrink-0">
                                    {{ strtoupper(substr($page->title, 0, 1)) }}
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900 mb-1">{{ $page->title }}</h4>
                                    <a href="{{ route('public.page.show', $page->slug) }}" 
                                       target="_blank" 
                                       class="inline-flex items-center text-sm text-blue-600 hover:text-blue-800 font-medium mb-2 group">
                                        <span class="mr-1">🔗</span>
                                        <span class="group-hover:underline">/{{ $page->slug }}</span>
                                        <svg class="w-3 h-3 ml-1 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </a>
                                    <div class="flex flex-wrap gap-4 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <span class="mr-1">📅</span>
                                            <span>Dibuat: {{ $page->created_at->format('d M Y') }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span class="mr-1">🔄</span>
                                            <span>Diperbarui: {{ $page->updated_at->format('d M Y') }}</span>
                                        </div>
                                        <div class="flex items-center">
                                            @if($page->status === 'published')
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-gradient-to-r from-green-500 to-emerald-500 text-white shadow-md">
                                                    ✅ Dipublikasikan
                                                </span>
                                            @else
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-gradient-to-r from-orange-500 to-red-500 text-white shadow-md">
                                                    📝 Draft
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2 flex-shrink-0">
                                <a href="{{ route('editor.show', $page) }}" 
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white p-2 rounded-lg transition-all transform hover:scale-110 shadow-md"
                                   title="Edit Halaman">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                                <button 
                                    type="button" 
                                    wire:click="deletePage({{ $page->id }})" 
                                    wire:confirm="Apakah Anda yakin ingin menghapus halaman '{{ $page->title }}'?"
                                    class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition-all transform hover:scale-110 shadow-md"
                                    title="Hapus Halaman">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-12">
                        <div class="text-gray-400">
                            <span class="text-6xl block mb-4">📄</span>
                            <p class="text-xl font-semibold mb-2">Belum ada halaman</p>
                            <p class="text-sm mb-6">Mulai buat halaman pertama Anda!</p>
                            <a href="{{ route('pages.create') }}" 
                               class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold rounded-full hover:from-blue-600 hover:to-cyan-600 transition-all transform hover:scale-105 shadow-lg">
                                <span class="mr-2">➕</span> Buat Halaman Sekarang
                            </a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>