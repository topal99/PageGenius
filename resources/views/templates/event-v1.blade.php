<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Daftar Acara Spesial Kami' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50">

    <div class="container mx-auto px-6 py-16 md:py-24 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight">{{ $content['event_title'] ?? 'Judul Webinar/Event Anda' }}</h1>
        <p class="mt-4 text-lg md:text-xl text-slate-600 max-w-3xl mx-auto">{{ $content['event_subtitle'] ?? 'Sebuah acara eksklusif yang akan membahas tuntas topik paling relevan di industri saat ini.' }}</p>

        <div class="mt-8 flex flex-col md:flex-row justify-center items-center gap-6 md:gap-12 text-lg">
            <div class="font-semibold">📅 {{ $content['event_date'] ?? '30 Agustus 2025' }}</div>
            <div class="font-semibold">⏰ {{ $content['event_time'] ?? '10:00 WIB' }}</div>
            <div class="font-semibold">📍 {{ $content['event_location'] ?? 'Online via Zoom' }}</div>
        </div>
        
        <a href="#register" class="mt-10 inline-block bg-teal-500 text-white font-bold py-4 px-10 rounded-lg text-lg hover:bg-teal-600 transition-transform hover:scale-105">
            {{ $content['cta_button'] ?? 'Daftar Sekarang, Gratis!' }}
        </a>
    </div>

    <div class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-slate-900">Pembicara Ahli Kami</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
                <div>
                    <img src="{{ $content['speaker_1_photo'] ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330' }}" alt="Foto Pembicara 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold">{{ $content['speaker_1_name'] ?? 'Jane Smith' }}</h3>
                    <p class="text-teal-600">{{ $content['speaker_1_title'] ?? 'CEO, Tech Solutions' }}</p>
                </div>
                <div>
                    <img src="{{ $content['speaker_2_photo'] ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde' }}" alt="Foto Pembicara 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold">{{ $content['speaker_2_name'] ?? 'Mark Johnson' }}</h3>
                    <p class="text-teal-600">{{ $content['speaker_2_title'] ?? 'Digital Marketing Expert' }}</p>
                </div>
                <div>
                    <img src="{{ $content['speaker_3_photo'] ?? 'https://images.unsplash.com/photo-1527980965255-d3b416303d12' }}" alt="Foto Pembicara 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold">{{ $content['speaker_3_name'] ?? 'David Chen' }}</h3>
                    <p class="text-teal-600">{{ $content['speaker_3_title'] ?? 'Lead Developer, Open Source' }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div id="register" class="py-16 md:py-24">
         <div class="container mx-auto px-6 max-w-xl text-center">
            <h2 class="text-3xl font-bold text-center mb-8 text-slate-900">Amankan Tempat Anda</h2>
            <form action="#" class="space-y-4">
                <input type="text" placeholder="Nama Lengkap" class="w-full p-4 border rounded-lg">
                <input type="email" placeholder="Alamat Email" class="w-full p-4 border rounded-lg">
                <button type="submit" class="w-full bg-teal-500 text-white font-bold py-4 px-10 rounded-lg text-lg hover:bg-teal-600">{{ $content['cta_button'] ?? 'Daftar Sekarang!' }}</button>
            </form>
         </div>
    </div>
</body>
</html>