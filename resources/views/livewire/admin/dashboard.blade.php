<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900">Total Pengguna</h3>
                    <p class="mt-1 text-3xl font-semibold text-indigo-600">
                        {{ $totalUsers }}
                    </p>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900">Total Halaman Dibuat</h3>
                    <p class="mt-1 text-3xl font-semibold text-green-600">
                        {{ $totalPages }}
                    </p>
                </div>

                </div>
        </div>
    </div>
</div>