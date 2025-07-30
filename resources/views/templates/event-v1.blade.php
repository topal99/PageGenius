<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Daftar Acara Spesial Kami' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        * { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .glass-effect { backdrop-filter: blur(50px); background: rgba(0, 0, 0, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); }
        .floating-animation { animation: floating 3s ease-in-out infinite; }
        @keyframes floating { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
        .pulse-glow { animation: pulse-glow 2s infinite; }
        @keyframes pulse-glow { 0%, 100% { box-shadow: 0 0 20px rgba(139, 92, 246, 0.3); } 50% { box-shadow: 0 0 40px rgba(139, 92, 246, 0.6); } }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-10px); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }
        .bg-pattern { background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px; }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-400 to-purple-500">
    <nav class="fixed top-0 w-full z-50 gradient-bg border-b border-white/20">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <span class="text-white font-bold text-lg">{{ $content['nav_logo_initial'] ?? 'W' }}</span>
                    </div>
                    <span class="text-white font-bold text-xl">{{ $content['nav_brand_name'] ?? 'WebinarPro' }}</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_1'] ?? 'Beranda' }}</a>
                    <a href="#speakers" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_2'] ?? 'Pembicara' }}</a>
                    <a href="#benefits" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_3'] ?? 'Manfaat' }}</a>
                    <a href="#register" class="bg-white/20 text-white px-6 py-2 rounded-full hover:bg-white/30 transition-all font-medium">{{ $content['nav_link_cta'] ?? 'Daftar' }}</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-white"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
            </div>
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <div class="flex flex-col space-y-4">
                    <a href="#home" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_1'] ?? 'Beranda' }}</a>
                    <a href="#speakers" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_2'] ?? 'Pembicara' }}</a>
                    <a href="#benefits" class="text-white/90 hover:text-white transition-colors font-medium">{{ $content['nav_link_3'] ?? 'Manfaat' }}</a>
                    <a href="#register" class="bg-white/20 text-white px-6 py-2 rounded-full hover:bg-white/30 transition-all font-medium inline-block text-center">{{ $content['nav_link_cta'] ?? 'Daftar' }}</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="gradient-bg bg-pattern min-h-screen flex items-center relative overflow-hidden pt-20">
        <div class="container mx-auto px-6 py-20 text-center relative z-10">
            <div class="glass-effect rounded-3xl p-8 md:p-12 max-w-5xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6 text-white drop-shadow-lg">{{ $content['hero_title'] ?? 'Judul Webinar/Event Anda' }}</h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-4xl mx-auto mb-10 font-light drop-shadow-md">{{ $content['hero_subtitle'] ?? 'Sebuah acara eksklusif yang akan membahas tuntas topik paling relevan di industri saat ini.' }}</p>
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="glass-effect rounded-2xl p-6 card-hover"><div class="text-4xl mb-3">📅</div><h3 class="font-bold text-lg mb-2 text-white">{{ $content['info_box_1_title'] ?? 'Tanggal' }}</h3><p class="text-white/80">{{ $content['info_box_1_content'] ?? '30 Agustus 2025' }}</p></div>
                    <div class="glass-effect rounded-2xl p-6 card-hover"><div class="text-4xl mb-3">⏰</div><h3 class="font-bold text-lg mb-2 text-white">{{ $content['info_box_2_title'] ?? 'Waktu' }}</h3><p class="text-white/80">{{ $content['info_box_2_content'] ?? '10:00 WIB' }}</p></div>
                    <div class="glass-effect rounded-2xl p-6 card-hover"><div class="text-4xl mb-3">📍</div><h3 class="font-bold text-lg mb-2 text-white">{{ $content['info_box_3_title'] ?? 'Platform' }}</h3><p class="text-white/80">{{ $content['info_box_3_content'] ?? 'Online via Zoom' }}</p></div>
                </div>
                <button class="bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-5 px-12 rounded-full text-xl hover:from-purple-600 hover:to-pink-600 transform hover:scale-105 transition-all duration-300 pulse-glow shadow-2xl">🚀 {{ $content['hero_cta_button'] ?? 'Daftar Sekarang, Gratis!' }}</button>
            </div>
        </div>
    </section>

    <section id="speakers" class="py-20 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black text-gray-900 mb-4">{{ $content['speakers_title'] ?? 'Pembicara' }} <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">{{ $content['speakers_title_highlight'] ?? 'Ahli' }}</span> Kami</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">{{ $content['speakers_subtitle'] ?? 'Belajar dari para ekspert terbaik di industri yang akan berbagi pengalaman dan wawasan berharga' }}</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="card-hover bg-white rounded-3xl p-8 text-center shadow-xl border border-gray-100">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-purple-400 to-pink-400 p-1">
                            <img src="{{ $content["speaker_{$i}_avatar"] ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400' }}" alt="Speaker {{ $i }}" class="w-full h-full rounded-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-purple-500 text-white px-4 py-1 rounded-full text-sm font-semibold">⭐ {{ $content["speaker_{$i}_badge"] ?? 'CEO' }}</div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $content["speaker_{$i}_name"] ?? 'Jane Smith' }}</h3>
                    <p class="text-purple-600 font-semibold mb-4">{{ $content["speaker_{$i}_title"] ?? 'CEO, Tech Solutions' }}</p>
                    <p class="text-gray-600 text-sm">{{ $content["speaker_{$i}_description"] ?? 'Expert dalam teknologi dan inovasi digital dengan pengalaman 15+ tahun' }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="benefits" class="py-20 bg-gradient-to-br from-gray-50 to-purple-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black text-gray-900 mb-4">{{ $content['benefits_title'] ?? 'Mengapa Harus' }} <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">{{ $content['benefits_title_highlight'] ?? 'Ikut?' }}</span></h2>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                <div class="card-hover bg-white rounded-2xl p-6 text-center shadow-lg">
                    <div class="text-4xl mb-4">{{ $content["benefit_{$i}_icon"] ?? '🎯' }}</div>
                    <h3 class="font-bold text-lg mb-2">{{ $content["benefit_{$i}_title"] ?? 'Materi Terkini' }}</h3>
                    <p class="text-gray-600 text-sm">{{ $content["benefit_{$i}_description"] ?? 'Insight terbaru dari industri' }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="register" class="py-20 gradient-bg relative overflow-hidden">
        <div class="container mx-auto px-6 max-w-2xl relative z-10">
            <div class="glass-effect rounded-3xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-4 drop-shadow-lg">{{ $content['register_title'] ?? 'Amankan' }} <span class="text-yellow-300 drop-shadow-lg">{{ $content['register_title_highlight'] ?? 'Tempat' }}</span> Anda</h2>
                    <p class="text-white/90 text-lg drop-shadow-md">{{ $content['register_subtitle'] ?? 'Daftar sekarang sebelum kuota habis! Hanya tersedia untuk 500 peserta pertama.' }}</p>
                </div>
                <form class="space-y-6">
                    <div class="relative"><input type="text" placeholder="Nama Lengkap" class="w-full p-5 rounded-2xl border-0 bg-white/90 backdrop-blur-sm text-gray-900 placeholder-gray-500 font-medium text-lg focus:ring-4 focus:ring-purple-300 focus:outline-none transition-all"><div class="absolute right-5 top-1/2 transform -translate-y-1/2 text-purple-500">👤</div></div>
                    <div class="relative"><input type="email" placeholder="Alamat Email" class="w-full p-5 rounded-2xl border-0 bg-white/90 backdrop-blur-sm text-gray-900 placeholder-gray-500 font-medium text-lg focus:ring-4 focus:ring-purple-300 focus:outline-none transition-all"><div class="absolute right-5 top-1/2 transform -translate-y-1/2 text-purple-500">✉️</div></div>
                    <div class="relative"><input type="tel" placeholder="Nomor WhatsApp" class="w-full p-5 rounded-2xl border-0 bg-white/90 backdrop-blur-sm text-gray-900 placeholder-gray-500 font-medium text-lg focus:ring-4 focus:ring-purple-300 focus:outline-none transition-all"><div class="absolute right-5 top-1/2 transform -translate-y-1/2 text-purple-500">📱</div></div>
                    <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-pink-500 text-white font-black py-5 px-8 rounded-2xl text-xl hover:from-yellow-500 hover:to-pink-600 transform hover:scale-105 transition-all duration-300 shadow-2xl pulse-glow">🎉 {{ $content['register_button_text'] ?? 'Daftar Sekarang - GRATIS!' }}</button>
                    <p class="text-center text-white/80 text-sm drop-shadow-sm">{{ $content['register_note'] ?? 'Dengan mendaftar, Anda menyetujui untuk menerima update acara via email & WhatsApp' }}</p>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-6">
                <h3 class="text-2xl font-bold mb-2">{{ $content['footer_title'] ?? 'Ada Pertanyaan?' }}</h3>
                <p class="text-gray-400">{{ $content['footer_contact_text'] ?? 'Hubungi kami di' }} <a href="mailto:{{ $content['footer_email'] ?? 'info@webinar.com' }}" class="text-purple-400 hover:text-purple-300">{{ $content['footer_email'] ?? 'info@webinar.com' }}</a></p>
            </div>
            <div class="border-t border-gray-800 pt-6">
                <p class="text-gray-500">{{ $content['footer_copyright'] ?? '&copy; 2025 Webinar Event. Semua hak dilindungi.' }}</p>
            </div>
        </div>
    </footer>
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuBtn.addEventListener('click', function() { mobileMenu.classList.toggle('hidden'); });
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => { anchor.addEventListener('click', function (e) { e.preventDefault(); document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' }); }); });
    </script>
</body>
</html>