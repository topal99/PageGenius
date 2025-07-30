<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Agen Properti Terpercaya' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="h-96 bg-cover bg-center" style="background-image: url('{{ $content['hero_image'] ?? 'https://images.unsplash.com/photo-1568605114967-8130f3a36994' }}')">
        <div class="h-full bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center">{{ $content['headline'] ?? 'Temukan Properti Impian Anda' }}</h1>
        </div>
    </div>

    <main class="py-16 md:py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">{{ $content['properties_title'] ?? 'Listing Unggulan Kami' }}</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $content['prop_1_image'] ?? 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914' }}" alt="Properti 1" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">{{ $content['prop_1_name'] ?? 'Rumah Modern di Pusat Kota' }}</h3>
                        <p class="text-2xl text-indigo-600 font-bold mt-2">{{ $content['prop_1_price'] ?? 'Rp 1.2 M' }}</p>
                        <p class="text-gray-600 mt-2">{{ $content['prop_1_specs'] ?? '3 KT, 2 KM, 150 m²' }}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $content['prop_2_image'] ?? 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c' }}" alt="Properti 2" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">{{ $content['prop_2_name'] ?? 'Villa Eksotis Tepi Pantai' }}</h3>
                        <p class="text-2xl text-indigo-600 font-bold mt-2">{{ $content['prop_2_price'] ?? 'Rp 3.5 M' }}</p>
                        <p class="text-gray-600 mt-2">{{ $content['prop_2_specs'] ?? '5 KT, 4 KM, 400 m²' }}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ $content['prop_3_image'] ?? 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c' }}" alt="Properti 3" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold">{{ $content['prop_3_name'] ?? 'Apartemen Studio Minimalis' }}</h3>
                        <p class="text-2xl text-indigo-600 font-bold mt-2">{{ $content['prop_3_price'] ?? 'Rp 750 Juta' }}</p>
                        <p class="text-gray-600 mt-2">{{ $content['prop_3_specs'] ?? '1 KT, 1 KM, 45 m²' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <img src="{{ $content['agent_photo'] ?? 'https://images.unsplash.com/photo-1599566150163-29194dcaad36' }}" alt="Foto Agen" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-indigo-500">
            <h3 class="text-2xl font-bold">{{ $content['agent_name'] ?? 'John Doe' }}</h3>
            <p class="text-indigo-400">{{ $content['agent_title'] ?? 'Agen Properti Profesional' }}</p>
            <p class="mt-4">{{ $content['agent_phone'] ?? 'Hubungi: 0812-3456-7890' }}</p>
        </div>
    </footer>

</body>
</html>