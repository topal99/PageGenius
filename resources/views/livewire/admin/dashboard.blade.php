<div>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-blue-600 to-cyan-600 py-6">
            <h2 class="font-black text-3xl text-white text-center drop-shadow-lg">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Total Users Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="h-1 bg-gradient-to-r from-blue-500 to-blue-600"></div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">👥</span>
                            </div>
                            <span class="text-xs font-bold text-blue-600 bg-blue-100 px-3 py-1 rounded-full">+12%</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-700 mb-2">Total Pengguna</h3>
                        <p class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">{{ $totalUsers }}</p>
                        <p class="text-sm text-gray-500 mt-2">Pengguna terdaftar</p>
                    </div>
                </div>

                <!-- Total Pages Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="h-1 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">📄</span>
                            </div>
                            <span class="text-xs font-bold text-green-600 bg-green-100 px-3 py-1 rounded-full">+25%</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-700 mb-2">Total Halaman</h3>
                        <p class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-emerald-600">{{ $totalPages }}</p>
                        <p class="text-sm text-gray-500 mt-2">Halaman dibuat</p>
                    </div>
                </div>

                <!-- Popular Template Card -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <div class="h-1 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                                <span class="text-2xl">🏆</span>
                            </div>
                            <span class="text-xs font-bold text-purple-600 bg-purple-100 px-3 py-1 rounded-full">Popular</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-700 mb-2">Template Terpopuler</h3>
                        @if($templatePopularity->isNotEmpty() && $templatePopularity->first()->pages_count > 0)
                            <p class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">{{ $templatePopularity->first()->name }}</p>
                            <p class="text-sm text-gray-500 mt-2">{{ $templatePopularity->first()->pages_count }} kali digunakan</p>
                        @else
                            <p class="text-xl text-gray-400 mt-2">Belum ada data</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Tables Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Recent Users Table -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white flex items-center">
                                <span class="mr-2">👤</span> Pengguna Terbaru
                            </h3>
                            <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-medium transition-all">
                                Lihat Semua
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <tbody class="divide-y divide-gray-100">
                                @forelse ($recentUsers as $user)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                <div class="font-semibold text-gray-900">{{ $user->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $user->email ?? 'No email' }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                            {{ $user->created_at->diffForHumans() }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="px-6 py-12 text-center">
                                        <div class="text-gray-400">
                                            <span class="text-4xl block mb-2">😔</span>
                                            <p>Tidak ada pengguna terbaru</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Recent Pages Table -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold text-white flex items-center">
                                <span class="mr-2">📝</span> Halaman Terbaru
                            </h3>
                            <button class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white px-4 py-2 rounded-full text-sm font-medium transition-all">
                                Lihat Semua
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <tbody class="divide-y divide-gray-100">
                                @forelse ($recentPages as $page)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 bg-gradient-to-r from-green-400 to-emerald-400 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                                <span class="text-lg">📄</span>
                                            </div>
                                            <div>
                                                <div class="font-semibold text-gray-900">{{ $page->title }}</div>
                                                <div class="text-sm text-gray-500">oleh {{ $page->user->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex flex-col items-end">
                                            <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                                                {{ $page->created_at->diffForHumans() }}
                                            </span>
                                            <button class="mt-2 text-xs text-blue-600 hover:text-blue-800 font-medium">
                                                Lihat →
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="px-6 py-12 text-center">
                                        <div class="text-gray-400">
                                            <span class="text-4xl block mb-2">📭</span>
                                            <p>Tidak ada halaman dibuat</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Additional Stats -->
            <div class="mt-8 bg-white rounded-2xl shadow-xl border border-gray-100 p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="mr-2">📊</span> Statistik Penggunaan Template
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach($templatePopularity->take(3) as $template)
                    <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-xl p-4 border border-gray-100">
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-semibold text-gray-700">{{ $template->name }}</h4>
                            <span class="text-2xl">{{ $loop->iteration == 1 ? '🥇' : ($loop->iteration == 2 ? '🥈' : '🥉') }}</span>
                        </div>
                        <div class="flex items-end justify-between">
                            <span class="text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600">
                                {{ $template->pages_count }}
                            </span>
                            <span class="text-sm text-gray-500">penggunaan</span>
                        </div>
                        <div class="mt-3 bg-gray-200 rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 h-full rounded-full transition-all duration-500" 
                                 style="width: {{ $templatePopularity->first()->pages_count > 0 ? ($template->pages_count / $templatePopularity->first()->pages_count * 100) : 0 }}%">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>