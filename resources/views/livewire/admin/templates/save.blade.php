<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form wire:submit="save" class="space-y-6">

                        {{-- Nama Template --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Template</label>
                            <input type="text" wire:model="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Deskripsi --}}
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea wire:model="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Path View --}}
                        <div>
                            <label for="view_path" class="block text-sm font-medium text-gray-700">Path View</label>
                            <input type="text" wire:model="view_path" id="view_path" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Contoh: templates.saas-v1">
                            @error('view_path') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Path Thumbnail --}}
                        <div>
                            <label for="thumbnail_path" class="block text-sm font-medium text-gray-700">Path Thumbnail (Opsional)</label>
                            <input type="text" wire:model="thumbnail_path" id="thumbnail_path" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Contoh: /thumbnails/saas-v1.jpg">
                            @error('thumbnail_path') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Kategori --}}
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Kategori</label>
                            <input type="text" wire:model="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" placeholder="Contoh: Teknologi">
                            @error('category') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        {{-- Tombol Aksi --}}
                        <div class="flex justify-end space-x-4">
                            <a href="{{ route('admin.templates.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border rounded-md font-semibold text-xs text-gray-700 uppercase" wire:navigate>
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border rounded-md font-semibold text-xs text-white uppercase">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>