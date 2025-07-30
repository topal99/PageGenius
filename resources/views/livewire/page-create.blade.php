    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Langkah 1: Pilih Template
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($templates as $template)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <img src="{{ $template->thumbnail_path }}" alt="{{ $template->name }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-lg">{{ $template->name }}</h3>
                            <p class="text-gray-600 text-sm mt-2">{{ $template->description }}</p>
                            <button wire:click="selectTemplate({{ $template->id }})" class="mt-4 w-full inline-flex justify-center items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500">
                                Pilih & Lanjutkan
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
