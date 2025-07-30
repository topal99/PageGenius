<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Agen Properti Terpercaya' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        * { font-family: 'Inter', sans-serif; }
        .property-gradient { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%); }
        .glass-effect { backdrop-filter: blur(20px); background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.2); }
        .floating-animation { animation: floating 4s ease-in-out infinite; }
        @keyframes floating { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
        .card-hover { transition: all 0.4s ease; }
        .card-hover:hover { transform: translateY(-10px) scale(1.02); box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.25); }
        .parallax-bg { background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; }
        @media (max-width: 768px) { .parallax-bg { background-attachment: scroll; } }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="fixed top-0 w-full z-50 border-b property-gradient border-white/20">
        <div class="container mx-auto px-4 sm:px-6 py-3 sm:py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2 sm:space-x-3">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 property-gradient rounded-xl flex items-center justify-center">
                        <span class="text-white font-black text-lg sm:text-xl">🏠</span>
                    </div>
                    <div>
                        <h1 class="text-white font-black text-lg sm:text-xl">{{ $content['nav_brand_name'] ?? 'PropertyPro' }}</h1>
                        <p class="text-white/70 text-xs hidden sm:block">{{ $content['nav_tagline'] ?? 'Trusted Agent' }}</p>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-white/90 hover:text-white transition-all font-medium hover:scale-105">{{ $content['nav_link_1'] ?? 'Beranda' }}</a>
                    <a href="#services" class="text-white/90 hover:text-white transition-all font-medium hover:scale-105">{{ $content['nav_link_2'] ?? 'Layanan' }}</a>
                    <a href="#properties" class="text-white/90 hover:text-white transition-all font-medium hover:scale-105">{{ $content['nav_link_3'] ?? 'Properti' }}</a>
                    <a href="#contact" class="bg-white/20 text-white px-6 py-2 rounded-full hover:bg-white/30 transition-all font-medium">{{ $content['nav_link_cta'] ?? 'Kontak' }}</a>
                </div>
                <button id="mobile-menu-btn" class="md:hidden text-white p-2"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></button>
            </div>
        </div>
    </nav>

    <section id="home" class="relative h-screen parallax-bg" style="background-image: url('{{ $content['hero_bg_image'] ?? 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=1920&h=1080&fit=crop' }}')">
        <div class="absolute inset-0 property-gradient opacity-80"></div>
        <div class="relative z-10 h-full flex items-center">
            <div class="container mx-auto px-4 sm:px-6 text-center text-white">
                <div class="glass-effect rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-16 max-w-4xl mx-auto">
                    <h1 class="text-3xl sm:text-5xl md:text-7xl font-black leading-tight mb-4 sm:mb-6 drop-shadow-lg">
                        {{ $content['hero_title'] ?? 'Temukan Properti' }} <span class="text-cyan-300">{{ $content['hero_title_highlight'] ?? 'Impian' }}</span> Anda
                    </h1>
                    <p class="text-base sm:text-xl md:text-2xl text-white/90 max-w-3xl mx-auto mb-6 sm:mb-8 font-light drop-shadow-md px-4">
                        {{ $content['hero_subtitle'] ?? 'Kami membantu Anda menemukan rumah, apartemen, dan investasi properti terbaik dengan layanan profesional dan terpercaya.' }}
                    </p>
                    <div class="grid grid-cols-3 gap-3 sm:gap-6 mb-6 sm:mb-10">
                        @for ($i = 1; $i <= 3; $i++)
                        <div class="stats-counter" style="animation-delay: {{ ($i - 1) * 0.2 }}s;">
                            <div class="text-2xl sm:text-3xl md:text-4xl font-black text-cyan-300">{{ $content["stat_{$i}_number"] ?? '500+' }}</div>
                            <div class="text-xs sm:text-sm text-white/80 font-medium">{{ $content["stat_{$i}_label"] ?? 'Properti Terjual' }}</div>
                        </div>
                        @endfor
                    </div>
                    <button class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-bold py-3 sm:py-5 px-6 sm:px-12 rounded-full text-base sm:text-xl hover:from-cyan-600 hover:to-blue-600 transform hover:scale-105 transition-all duration-300 shadow-2xl">
                        🏡 {{ $content['hero_cta_button'] ?? 'Lihat Properti' }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-12 sm:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-8 sm:mb-16">
                <h2 class="text-3xl sm:text-5xl font-black text-gray-900 mb-4">
                    {{ $content['services_title'] ?? 'Layanan' }} <span class="bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">{{ $content['services_title_highlight'] ?? 'Premium' }}</span> Kami
                </h2>
                <p class="text-base sm:text-xl text-gray-600 max-w-3xl mx-auto px-4">
                    {{ $content['services_subtitle'] ?? 'Solusi lengkap untuk semua kebutuhan properti Anda dengan pelayanan yang personal dan profesional' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="card-hover bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl sm:rounded-3xl p-6 sm:p-8 text-center border border-blue-100">
                    <div class="w-16 sm:w-20 h-16 sm:h-20 property-gradient rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6">
                        <span class="text-2xl sm:text-3xl">{{ $content["service_{$i}_icon"] ?? '🏠' }}</span>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-gray-900 mb-3 sm:mb-4">{{ $content["service_{$i}_title"] ?? 'Jual Beli Properti' }}</h3>
                    <p class="text-sm sm:text-base text-gray-600">{{ $content["service_{$i}_description"] ?? 'Bantuan lengkap dalam proses jual beli properti dengan harga terbaik.' }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="properties" class="py-12 sm:py-20 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="text-center mb-8 sm:mb-16">
                <h2 class="text-3xl sm:text-5xl font-black text-gray-900 mb-4">
                    {{ $content['properties_title'] ?? 'Listing' }} <span class="bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">{{ $content['properties_title_highlight'] ?? 'Unggulan' }}</span> Kami
                </h2>
                <p class="text-base sm:text-xl text-gray-600 max-w-3xl mx-auto px-4">
                    {{ $content['properties_subtitle'] ?? 'Pilihan properti terbaik dengan lokasi strategis dan harga yang kompetitif' }}
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="card-hover bg-white rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="{{ $content["property_{$i}_image"] ?? 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=600&h=400&fit=crop' }}" alt="Property Image" class="w-full h-48 sm:h-64 object-cover">
                        <div class="absolute top-3 sm:top-4 left-3 sm:left-4"><span class="bg-red-500 text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">{{ $content["property_{$i}_badge"] ?? '🔥 Hot Deal' }}</span></div>
                    </div>
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-2xl font-bold text-gray-900 mb-2">{{ $content["property_{$i}_name"] ?? 'Rumah Modern di Pusat Kota' }}</h3>
                        <div class="price-tag text-lg sm:text-2xl mb-3 sm:mb-4">{{ $content["property_{$i}_price"] ?? 'Rp 1.2 M' }}</div>
                        <div class="flex items-center space-x-3 sm:space-x-4 text-gray-600 mb-3 sm:mb-4">
                            <div class="flex items-center space-x-1"><span class="text-sm sm:text-base">🛏️</span><span class="text-xs sm:text-sm">{{ $content["property_{$i}_spec_1"] ?? '3 KT' }}</span></div>
                            <div class="flex items-center space-x-1"><span class="text-sm sm:text-base">🚿</span><span class="text-xs sm:text-sm">{{ $content["property_{$i}_spec_2"] ?? '2 KM' }}</span></div>
                            <div class="flex items-center space-x-1"><span class="text-sm sm:text-base">📐</span><span class="text-xs sm:text-sm">{{ $content["property_{$i}_spec_3"] ?? '150 m²' }}</span></div>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500 mb-3 sm:mb-4"><span class="text-sm">📍</span><span class="text-xs sm:text-sm">{{ $content["property_{$i}_location"] ?? 'Jakarta Selatan' }}</span></div>
                        <button class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white font-bold py-2 sm:py-3 rounded-xl hover:from-blue-600 hover:to-cyan-600 transition-all text-sm sm:text-base">{{ $content["property_{$i}_button"] ?? 'Lihat Detail' }}</button>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-8 sm:mt-12">
                <button class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-3 sm:py-4 px-8 sm:px-12 rounded-full text-base sm:text-lg hover:from-blue-700 hover:to-cyan-700 transform hover:scale-105 transition-all duration-300 shadow-lg">{{ $content['properties_cta_button'] ?? 'Lihat Semua Properti →' }}</button>
            </div>
        </div>
    </section>

    <section id="contact" class="py-12 sm:py-20 property-gradient relative overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="glass-effect rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-16 max-w-4xl mx-auto text-center">
                <div class="mb-6 sm:mb-8">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 mx-auto mb-4 sm:mb-6 relative">
                        <img src="{{ $content['agent_avatar'] ?? 'https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=400&h=400&fit=crop' }}" alt="Agent Avatar" class="w-full h-full rounded-full object-cover border-4 border-white shadow-2xl">
                    </div>
                    <h3 class="text-2xl sm:text-4xl font-black text-white mb-2 drop-shadow-lg">{{ $content['agent_name'] ?? 'John Doe' }}</h3>
                    <p class="text-cyan-200 text-lg sm:text-xl font-semibold mb-3 sm:mb-4 drop-shadow-md">{{ $content['agent_title'] ?? 'Agen Properti Profesional' }}</p>
                    <p class="text-white/90 max-w-2xl mx-auto mb-6 sm:mb-8 drop-shadow-sm text-sm sm:text-base px-4">{{ $content['agent_description'] ?? 'Dengan pengalaman 15+ tahun di industri properti, saya berkomitmen membantu Anda menemukan properti impian.' }}</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 mb-6 sm:mb-10">
                    <div class="glass-effect rounded-xl sm:rounded-2xl p-4 sm:p-6"><div class="text-2xl sm:text-3xl mb-2">📞</div><h4 class="font-bold text-white mb-1 sm:mb-2 text-sm sm:text-base">{{ $content['contact_box_1_title'] ?? 'Telepon' }}</h4><p class="text-white/80 text-xs sm:text-sm">{{ $content['contact_box_1_content'] ?? '0812-3456-7890' }}</p></div>
                    <div class="glass-effect rounded-xl sm:rounded-2xl p-4 sm:p-6"><div class="text-2xl sm:text-3xl mb-2">💬</div><h4 class="font-bold text-white mb-1 sm:mb-2 text-sm sm:text-base">{{ $content['contact_box_2_title'] ?? 'WhatsApp' }}</h4><p class="text-white/80 text-xs sm:text-sm">{{ $content['contact_box_2_content'] ?? 'Chat Langsung' }}</p></div>
                    <div class="glass-effect rounded-xl sm:rounded-2xl p-4 sm:p-6"><div class="text-2xl sm:text-3xl mb-2">✉️</div><h4 class="font-bold text-white mb-1 sm:mb-2 text-sm sm:text-base">{{ $content['contact_box_3_title'] ?? 'Email' }}</h4><p class="text-white/80 text-xs sm:text-sm">{{ $content['contact_box_3_content'] ?? 'john@property.com' }}</p></div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                    <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 sm:py-4 px-6 sm:px-8 rounded-full text-base sm:text-lg transition-all transform hover:scale-105 shadow-lg">💬 {{ $content['agent_cta_whatsapp'] ?? 'Chat WhatsApp' }}</button>
                    <button class="bg-white/20 hover:bg-white/30 text-white font-bold py-3 sm:py-4 px-6 sm:px-8 rounded-full text-base sm:text-lg transition-all transform hover:scale-105 border border-white/30">📞 {{ $content['agent_cta_phone'] ?? 'Telepon Sekarang' }}</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-8 sm:py-12">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 mb-6 sm:mb-8">
                <div>
                    <div class="flex items-center space-x-2 sm:space-x-3 mb-3 sm:mb-4">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 property-gradient rounded-xl flex items-center justify-center"><span class="text-white font-black text-sm sm:text-base">🏠</span></div>
                        <h3 class="font-black text-lg sm:text-xl">{{ $content['footer_brand_name'] ?? 'PropertyPro' }}</h3>
                    </div>
                    <p class="text-gray-400 text-sm">{{ $content['footer_description'] ?? 'Agen properti terpercaya dengan layanan profesional.' }}</p>
                </div>
                <div>
                    <h4 class="font-bold mb-3 sm:mb-4 text-base sm:text-lg">{{ $content['footer_links_1_title'] ?? 'Layanan' }}</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_1_item_1'] ?? 'Jual Beli Rumah' }}</a></li>
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_1_item_2'] ?? 'Sewa Properti' }}</a></li>
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_1_item_3'] ?? 'Konsultasi Investasi' }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3 sm:mb-4 text-base sm:text-lg">{{ $content['footer_links_2_title'] ?? 'Area Layanan' }}</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_2_item_1'] ?? 'Jakarta' }}</a></li>
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_2_item_2'] ?? 'Bogor' }}</a></li>
                        <li><a href="#" class="hover:text-white">{{ $content['footer_links_2_item_3'] ?? 'Tangerang' }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3 sm:mb-4 text-base sm:text-lg">{{ $content['footer_links_3_title'] ?? 'Kontak' }}</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>{{ $content['footer_contact_phone'] ?? '📞 0812-3456-7890' }}</li>
                        <li>{{ $content['footer_contact_email'] ?? '✉️ john@property.com' }}</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 sm:pt-8 text-center">
                <p class="text-gray-500 text-xs sm:text-sm">{{ $content['footer_copyright'] ?? '&copy; 2025 PropertyPro. Semua hak dilindungi.' }}</p>
            </div>
        </div>
    </footer>
    <script>
    // Menunggu seluruh halaman dimuat sebelum menjalankan script
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- KODE UNTUK MENU MOBILE ---
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOverlay = document.getElementById('menu-overlay');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        // Fungsi untuk membuka menu
        function openMenu() {
            if (mobileMenu && menuOverlay) {
                mobileMenu.classList.add('active');
                menuOverlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // Mencegah scroll di belakang menu
            }
        }

        // Fungsi untuk menutup menu
        function closeMenu() {
            if (mobileMenu && menuOverlay) {
                mobileMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.style.overflow = 'auto'; // Mengaktifkan kembali scroll
            }
        }

        // Menambahkan event listener ke tombol-tombol
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', openMenu);
        }
        if (closeMenuBtn) {
            closeMenuBtn.addEventListener('click', closeMenu);
        }
        if (menuOverlay) {
            menuOverlay.addEventListener('click', closeMenu);
        }
        
        // Menutup menu saat salah satu link di dalamnya diklik
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        // --- KODE LAINNYA UNTUK TEMPLATE (JANGAN DIHAPUS) ---
                if ('ontouchstart' in window) {
            document.documentElement.classList.add('touch-device');
        }
        
        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth > 768) {
                    closeMenu();
                }
            }, 250);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 70; // Memberi jarak dari navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Counter animation
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stats-counter');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target.querySelector('div:first-child');
                        const text = counter.textContent;
                        const number = parseInt(text.replace(/\D/g, ''), 10);
                        const suffix = text.replace(/[0-9]/g, '');
                        let count = 0;
                        const increment = Math.ceil(number / 50);
                        
                        const interval = setInterval(() => {
                            count += increment;
                            if (count >= number) {
                                count = number;
                                clearInterval(interval);
                            }
                            counter.textContent = count + suffix;
                        }, 30);
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            counters.forEach(counter => {
                observer.observe(counter);
            });
        };
        
        animateCounters();
    });
</script>

</body>
</html>