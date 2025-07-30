    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold">Halaman Anda</h3>
                        <a href="{{ route('pages.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Buat Halaman Baru
                        </a>
                    </div>

                    
                    @forelse ($pages as $page)
                        <div class="border-t py-4 flex justify-between items-center">
                            <div>
                                <p class="font-semibold">{{ $page->title }}</p>
                                <a href="{{ route('public.page.show', $page->slug) }}" target="_blank" class="text-sm text-blue-600 hover:underline">
                                    /{{ $page->slug }}
                                </a>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('editor.show', $page) }}" class="text-sm text-gray-600 hover:text-gray-900">Edit</a>
                                <button 
                                    type="button" 
                                    wire:click="deletePage({{ $page->id }})" 
                                    wire:confirm="Apakah Anda yakin ingin menghapus halaman '{{ $page->title }}'?"
                                    class="text-sm text-red-600 hover:text-red-900 font-medium">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8 border rounded-lg">
                            <p class="text-gray-500">Anda belum memiliki halaman.</p>
                            <p class="text-gray-500">Mulai buat yang pertama!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>