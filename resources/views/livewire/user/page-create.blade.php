<div class="py-12 bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Grid Template -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($templates as $template)
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden transform hover:scale-105 transition-all duration-300">
                    <!-- Thumbnail -->
                    <div class="relative">
                        <img src="{{ $template->thumbnail_path }}" 
                             alt="{{ $template->name }}" 
                             class="w-full h-48 object-cover hover:opacity-90 transition-opacity duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <h3 class="font-black text-xl text-gray-900 mb-2">{{ $template->name }}</h3>
                        <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $template->description }}</p>
                        
                        <!-- Action Button -->
                        <button 
                            wire:click="selectTemplate({{ $template->id }})"
                            class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white font-bold py-3 rounded-xl transition-all transform hover:scale-105 shadow-md flex items-center justify-center group">
                            <span class="mr-2 group-hover:scale-110 transition-transform">✨</span>
                            Pilih & Lanjutkan
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Empty State (Opsional jika tidak ada template) -->
        @if ($templates->isEmpty())
            <div class="text-center py-16">
                <div class="text-gray-400">
                    <span class="text-6xl block mb-4">🎨</span>
                    <p class="text-xl font-semibold mb-2">Belum ada template tersedia</p>
                    <p class="text-sm text-gray-500 mb-6">Silakan hubungi administrator untuk menambahkan template.</p>
                </div>
            </div>
        @endif
    </div>
</div>
