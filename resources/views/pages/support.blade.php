<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Center - PageGenius</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-up': 'slideUp 0.8s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    
    <!-- Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 2s;"></div>
    </div>

    <!-- Navigation -->
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif

    <!-- Header -->
    <section class="relative z-10 px-6 py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 animate-fade-in">
                Support Center
            </h1>
            <p class="text-xl text-white opacity-90 mb-8 animate-fade-in" style="animation-delay: 0.2s;">
                Kami siap membantu Anda 24/7. Temukan jawaban atau hubungi tim support kami.
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto animate-fade-in" style="animation-delay: 0.3s;">
                <div class="glass-effect rounded-2xl p-2">
                    <form class="flex items-center">
                        <input type="text" placeholder="Cari artikel bantuan..." 
                               class="flex-1 bg-transparent text-white placeholder-white placeholder-opacity-60 px-6 py-3 focus:outline-none">
                        <button type="submit" class="bg-white text-purple-600 px-6 py-3 rounded-xl font-semibold hover:bg-purple-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="relative z-10 px-6 pb-20">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
                <!-- Getting Started -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Getting Started</h3>
                    <p class="text-gray-600 mb-6">Panduan lengkap untuk memulai dengan PageGenius</p>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Cara membuat akun
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Membuat landing page pertama
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Memilih template yang tepat
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Menggunakan AI Generator
                        </a></li>
                    </ul>
                </div>

                <!-- Account & Billing -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Account & Billing</h3>
                    <p class="text-gray-600 mb-6">Kelola akun dan subscription Anda</p>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Upgrade atau downgrade plan
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Metode pembayaran
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Cara mendapatkan invoice
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Kebijakan refund
                        </a></li>
                    </ul>
                </div>

                <!-- Technical Support -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Technical Support</h3>
                    <p class="text-gray-600 mb-6">Bantuan teknis dan troubleshooting</p>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Custom domain setup
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> SSL certificate issues
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Integration dengan tools lain
                        </a></li>
                        <li><a href="#" class="text-purple-600 hover:text-purple-800 flex items-center">
                            <span class="mr-2">→</span> Performance optimization
                        </a></li>
                    </ul>
                </div>
            </div>

            <!-- Popular Articles -->
            <div class="mb-20">
                <h2 class="text-3xl font-bold text-white text-center mb-12 animate-slide-up">
                    Artikel Populer
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-5xl mx-auto">
                    <div class="glass-effect rounded-2xl p-6 hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-yellow-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Panduan Lengkap SEO untuk Landing Page</h4>
                                <p class="text-white opacity-80 text-sm mb-2">
                                    Pelajari cara mengoptimalkan landing page Anda untuk mesin pencari dan meningkatkan organic traffic.
                                </p>
                                <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm font-medium">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>

                    <div class="glass-effect rounded-2xl p-6 hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Tips Meningkatkan Conversion Rate</h4>
                                <p class="text-white opacity-80 text-sm mb-2">
                                    10 strategi terbukti untuk meningkatkan conversion rate landing page Anda hingga 300%.
                                </p>
                                <a href="#" class="text-pink-400 hover:text-pink-300 text-sm font-medium">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>

                    <div class="glass-effect rounded-2xl p-6 hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Cara Menggunakan Template Effectively</h4>
                                <p class="text-white opacity-80 text-sm mb-2">
                                    Maksimalkan penggunaan template PageGenius dengan customization yang tepat untuk brand Anda.
                                </p>
                                <a href="#" class="text-green-400 hover:text-green-300 text-sm font-medium">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>

                    <div class="glass-effect rounded-2xl p-6 hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-white font-semibold mb-2">Analytics dan Tracking Setup Guide</h4>
                                <p class="text-white opacity-80 text-sm mb-2">
                                    Panduan lengkap setup Google Analytics, Facebook Pixel, dan tools tracking lainnya.
                                </p>
                                <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium">Baca selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Support -->
            <div class="max-w-5xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-12 animate-slide-up">
                    Butuh Bantuan Lebih Lanjut?
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Live Chat -->
                    <div class="glass-effect rounded-2xl p-8 text-center hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in">
                        <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Live Chat</h3>
                        <p class="text-white opacity-80 mb-6">Chat langsung dengan tim support kami. Respons dalam 2 menit.</p>
                        <button class="bg-green-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-600 transition-colors">
                            Mulai Chat
                        </button>
                    </div>

                    <!-- Email Support -->
                    <div class="glass-effect rounded-2xl p-8 text-center hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Email Support</h3>
                        <p class="text-white opacity-80 mb-6">Kirim email untuk masalah kompleks. Respons dalam 24 jam.</p>
                        <a href="mailto:support@pagegenius.com" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-600 transition-colors">
                            Kirim Email
                        </a>
                    </div>

                    <!-- Priority Support -->
                    <div class="glass-effect rounded-2xl p-8 text-center hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Priority Support</h3>
                        <p class="text-white opacity-80 mb-6">Untuk Pro & Enterprise users. Dedicated support line.</p>
                        <button class="bg-purple-500 text-white px-6 py-3 rounded-xl font-semibold hover:bg-purple-600 transition-colors">
                            Call Support
                        </button>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-20 max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-12 animate-slide-up">
                    Frequently Asked Questions
                </h2>
                
                <div class="space-y-4">
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden animate-fade-in">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Bagaimana cara reset password?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Klik "Lupa Password" di halaman login, masukkan email Anda, dan ikuti instruksi yang dikirim ke email. 
                                Link reset password berlaku selama 24 jam.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden animate-fade-in" style="animation-delay: 0.1s;">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Apakah saya bisa export landing page saya?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Ya! Pada paket Pro dan Enterprise, Anda bisa export landing page sebagai HTML/CSS/JS files. 
                                Fitur ini tersedia di dashboard dengan klik tombol "Export" pada setiap project.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden animate-fade-in" style="animation-delay: 0.2s;">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Bagaimana cara menghubungkan custom domain?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Masuk ke Settings > Domain, klik "Add Custom Domain", masukkan domain Anda, dan ikuti instruksi 
                                untuk update DNS records. Proses propagasi DNS biasanya memakan waktu 24-48 jam.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden animate-fade-in" style="animation-delay: 0.3s;">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Apakah ada API untuk integrasi?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Ya, PageGenius API tersedia untuk paket Enterprise. Anda bisa mengakses dokumentasi API lengkap 
                                di dashboard setelah upgrade ke Enterprise plan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Tutorials -->
            <div class="mt-20 max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-12 animate-slide-up">
                    Video Tutorial
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="glass-effect rounded-2xl overflow-hidden hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in">
                        <div class="aspect-video bg-gradient-to-br from-purple-600 to-indigo-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h4 class="text-white font-semibold mb-2">Getting Started with PageGenius</h4>
                            <p class="text-white opacity-70 text-sm">5:23</p>
                        </div>
                    </div>
                    
                    <div class="glass-effect rounded-2xl overflow-hidden hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.1s;">
                        <div class="aspect-video bg-gradient-to-br from-pink-600 to-rose-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h4 class="text-white font-semibold mb-2">Advanced Customization Tips</h4>
                            <p class="text-white opacity-70 text-sm">8:45</p>
                        </div>
                    </div>
                    
                    <div class="glass-effect rounded-2xl overflow-hidden hover:bg-white hover:bg-opacity-20 transition-all duration-300 animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="aspect-video bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-80" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h4 class="text-white font-semibold mb-2">SEO Best Practices</h4>
                            <p class="text-white opacity-70 text-sm">12:10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative z-10 px-6 py-12">
        <div class="max-w-7xl mx-auto">
            <div class="glass-effect rounded-2xl p-8">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center space-x-3 mb-4 md:mb-0">
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="text-2xl font-bold text-white">PageGenius</span>
                    </div>
                    
                    <div class="flex items-center space-x-6 text-white opacity-80">
                        <a href="{{ route('privacy') }}" class="hover:opacity-100 transition-opacity">Privacy</a>
                        <a href="{{ route('terms') }}" class="hover:opacity-100 transition-opacity">Terms</a>
                        <a href="{{ route('support') }}" class="hover:opacity-100 transition-opacity">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>