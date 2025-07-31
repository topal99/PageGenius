<div>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900">Total Pengguna</h3>
                    <p class="mt-1 text-3xl font-semibold text-indigo-600">{{ $totalUsers }}</p>
                </div>
                <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900">Total Halaman Dibuat</h3>
                    <p class="mt-1 text-3xl font-semibold text-green-600">{{ $totalPages }}</p>
                </div>
                <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium text-gray-900">Template Terpopuler</h3>
                    @if($templatePopularity->isNotEmpty() && $templatePopularity->first()->pages_count > 0)
                        <p class="mt-1 text-3xl font-semibold text-purple-600">{{ $templatePopularity->first()->name }}</p>
                        <p class="text-sm text-gray-500">{{ $templatePopularity->first()->pages_count }} kali digunakan</p>
                    @else
                        <p class="mt-1 text-xl text-gray-500">Belum ada data</p>
                    @endif
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Pengguna Terbaru</h3>
                    </div>
                    <div class="p-0">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($recentUsers as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-500">{{ $user->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr><td class="px-6 py-4 text-center text-gray-500">Tidak ada pengguna.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 border-b">
                        <h3 class="text-lg font-medium text-gray-900">Halaman Terbaru</h3>
                    </div>
                     <div class="p-0">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($recentPages as $page)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">{{ $page->title }}</div>
                                        <div class="text-sm text-gray-500">oleh {{ $page->user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-500">{{ $page->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr><td class="px-6 py-4 text-center text-gray-500">Tidak ada halaman dibuat.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>