<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Landing Page' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                {{-- Gunakan ?? untuk memberikan nilai default jika data kosong --}}
                {{ $content['headline'] ?? 'Judul Utama Halaman Anda' }}
            </h1>
            <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                {{ $content['subheadline'] ?? 'Tuliskan sub-judul yang menarik untuk menjelaskan produk atau layanan Anda di sini.' }}
            </p>
            <a href="#" class="mt-8 inline-block bg-blue-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-blue-700 transition-colors">
                {{ $content['cta_button'] ?? 'Mulai Sekarang' }}
            </a>
        </div>
    </header>

    <main class="py-16 md:py-24">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <div class="p-8 bg-white rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold">{{ $content['feature_1_title'] ?? 'Fitur Unggulan 1' }}</h3>
                    <p class="mt-2 text-gray-600">{{ $content['feature_1_description'] ?? 'Deskripsi mendetail tentang betapa hebatnya fitur pertama ini.' }}</p>
                </div>

                <div class="p-8 bg-white rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold">{{ $content['feature_2_title'] ?? 'Fitur Unggulan 2' }}</h3>
                    <p class="mt-2 text-gray-600">{{ $content['feature_2_description'] ?? 'Deskripsi mendetail tentang betapa hebatnya fitur kedua ini.' }}</p>
                </div>

            </div>
        </div>
    </main>

    <footer class="text-center py-6 bg-gray-100">
        <p>&copy; {{ date('Y') }}. Dibuat dengan PageGenius.</p>
    </footer>

</body>
</html>