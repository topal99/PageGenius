<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editor Halaman: {{ $page->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form wire:submit.prevent="save" class="space-y-8">

                @if (session('status'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium">Bagian Utama (Hero)</h3>
                    <div class="mt-4 space-y-4">
                        <div>
                            <label for="headline" class="block text-sm font-medium text-gray-700">Judul Utama</label>
                            <input type="text" wire:model.lazy="content.headline" id="headline" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label for="subheadline" class="block text-sm font-medium text-gray-700">Sub-Judul</label>
                            <textarea wire:model.lazy="content.subheadline" id="subheadline" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        </div>
                        <div>
                            <label for="cta_button" class="block text-sm font-medium text-gray-700">Teks Tombol Aksi</label>
                            <input type="text" wire:model.lazy="content.cta_button" id="cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium">Bagian Fitur</h3>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <h4 class="font-semibold">Fitur 1</h4>
                            <div>
                                <label for="feature_1_title" class="block text-sm font-medium text-gray-700">Judul Fitur 1</label>
                                <input type="text" wire:model.lazy="content.feature_1_title" id="feature_1_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="feature_1_description" class="block text-sm font-medium text-gray-700">Deskripsi Fitur 1</label>
                                <textarea wire:model.lazy="content.feature_1_description" id="feature_1_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <h4 class="font-semibold">Fitur 2</h4>
                            <div>
                                <label for="feature_2_title" class="block text-sm font-medium text-gray-700">Judul Fitur 2</label>
                                <input type="text" wire:model.lazy="content.feature_2_title" id="feature_2_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="feature_2_description" class="block text-sm font-medium text-gray-700">Deskripsi Fitur 2</label>
                                <textarea wire:model.lazy="content.feature_2_description" id="feature_2_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end space-x-4">
                    <a href="{{ route('public.page.show', ['page' => $page]) }}" target="_blank" class="inline-block px-4 py-2 bg-gray-200 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-300">
                        Lihat Halaman
                    </a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 rounded-md text-sm font-medium text-white hover:bg-blue-700">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>