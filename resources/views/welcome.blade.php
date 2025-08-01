<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PageGenius - AI-Powered Landing Page Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'bounce-slow': 'bounce 3s infinite',
                        'pulse-slow': 'pulse 4s infinite',
                        'spin-slow': 'spin 20s linear infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(147, 51, 234, 0.5)' },
                            '100%': { boxShadow: '0 0 30px rgba(147, 51, 234, 0.8), 0 0 40px rgba(147, 51, 234, 0.4)' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
            /* background-size: 400% 400%;
            animation: gradientShift 15s ease infinite; */
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-dark {
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
        
        .feature-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen overflow-x-hidden">
    
    <!-- Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-40 left-1/2 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 4s;"></div>
    </div>

    <!-- Navigation -->
     @if (Route::has('login'))
     <livewire:welcome.navigation />
    @endif

    <!-- Hero Section -->
    <section class="relative z-10 px-6 py-20">
        <div class="max-w-7xl mx-auto text-center">
            <div class="animate-fade-in">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                    Buat Landing Page
                    <span class="block text-gradient">Menakjubkan</span>
                    dalam Hitungan Menit
                </h1>
                <p class="text-xl md:text-2xl text-white opacity-90 mb-12 max-w-3xl mx-auto leading-relaxed">
                    PageGenius menggunakan kekuatan AI untuk menghasilkan landing page yang conversion-optimized, 
                    responsive, dan siap pakai hanya dengan beberapa klik.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <button class="bg-white text-purple-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-purple-50 transition-all duration-300 transform hover:scale-105 shadow-2xl animate-glow">
                        🚀 Mulai Buat Landing Page
                    </button>
                    <button class="glass-effect text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300 flex items-center space-x-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293H15M9 10V9a2 2 0 012-2h2a2 2 0 012 2v1.042"></path>
                        </svg>
                        <span>Lihat Demo</span>
                    </button>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="glass-effect rounded-2xl p-6 hover-lift">
                        <div class="text-4xl font-bold text-white mb-2">10K+</div>
                        <div class="text-white opacity-80">Landing Pages Dibuat</div>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 hover-lift">
                        <div class="text-4xl font-bold text-white mb-2">95%</div>
                        <div class="text-white opacity-80">Tingkat Kepuasan</div>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 hover-lift">
                        <div class="text-4xl font-bold text-white mb-2">2 Min</div>
                        <div class="text-white opacity-80">Rata-rata Waktu Buat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="relative z-10 px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Mengapa Memilih PageGenius?
                </h2>
                <p class="text-xl text-white opacity-90 max-w-3xl mx-auto">
                    Kami menggabungkan teknologi AI terdepan dengan template design profesional 
                    untuk memberikan hasil terbaik bagi bisnis Anda.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 animate-pulse-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">AI-Powered Generation</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Teknologi AI canggih yang memahami kebutuhan bisnis Anda dan menghasilkan 
                        landing page yang conversion-optimized secara otomatis.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mb-6 animate-bounce-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Template Premium</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Koleksi template premium yang dirancang oleh designer profesional, 
                        siap disesuaikan dengan brand dan kebutuhan spesifik Anda.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 animate-spin-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fully Responsive</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Semua landing page yang dihasilkan otomatis responsive dan optimal 
                        di semua device - desktop, tablet, dan mobile.
                    </p>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6 animate-pulse-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">SEO Optimized</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Built-in SEO optimization dengan meta tags, structured data, 
                        dan performance optimization untuk ranking yang lebih baik.
                    </p>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 animate-bounce-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Analytics Ready</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Terintegrasi dengan Google Analytics, Facebook Pixel, dan tools tracking 
                        lainnya untuk monitoring performa yang akurat.
                    </p>
                </div>
                
                <!-- Feature 6 -->
                <div class="feature-card rounded-2xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 animate-spin-slow">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Easy Customization</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Drag & drop editor yang intuitif memungkinkan Anda mengustomisasi 
                        setiap elemen tanpa coding skills.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section id="templates" class="relative z-10 px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Template Premium Siap Pakai
                </h2>
                <p class="text-xl text-white opacity-90 max-w-3xl mx-auto">
                    Pilih dari koleksi template professional yang telah terbukti meningkatkan conversion rate
                </p>
            </div>
            
            <!-- Template Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="filterTemplates('all')" class="template-filter active bg-white text-purple-600 px-6 py-3 rounded-xl font-semibold hover:bg-purple-50 transition-all duration-300">
                    Semua Template
                </button>
                <button onclick="filterTemplates('saas')" class="template-filter glass-effect text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:bg-opacity-20 transition-all duration-300">
                    SaaS
                </button>
                <button onclick="filterTemplates('ecommerce')" class="template-filter glass-effect text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:bg-opacity-20 transition-all duration-300">
                    E-commerce
                </button>
                <button onclick="filterTemplates('agency')" class="template-filter glass-effect text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:bg-opacity-20 transition-all duration-300">
                    Agency
                </button>
                <button onclick="filterTemplates('startup')" class="template-filter glass-effect text-white px-6 py-3 rounded-xl font-semibold hover:bg-white hover:bg-opacity-20 transition-all duration-300">
                    Startup
                </button>
            </div>
            
            <!-- Template Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Template 1 -->
                <div class="template-card saas feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="h-2 bg-blue-500 rounded mb-2"></div>
                                <div class="h-2 bg-gray-300 rounded w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">TechFlow SaaS</h3>
                    <p class="text-gray-600 mb-4">Perfect untuk software as a service dengan focus pada conversion</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-purple-600 font-semibold">#SaaS #Tech</span>
                        <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
                
                <!-- Template 2 -->
                <div class="template-card ecommerce feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="h-48 bg-gradient-to-br from-pink-400 to-red-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="flex space-x-2 mb-2">
                                    <div class="w-8 h-6 bg-pink-500 rounded"></div>
                                    <div class="w-8 h-6 bg-gray-300 rounded"></div>
                                </div>
                                <div class="h-2 bg-gray-300 rounded w-2/3"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">ShopMaster Pro</h3>
                    <p class="text-gray-600 mb-4">Template e-commerce dengan product showcase yang menarik</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-pink-600 font-semibold">#Ecommerce #Retail</span>
                        <button class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
                
                <!-- Template 3 -->
                <div class="template-card agency feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-blue-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="flex space-x-1 mb-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                                </div>
                                <div class="h-2 bg-gray-300 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Creative Studio</h3>
                    <p class="text-gray-600 mb-4">Ideal untuk agency kreatif dengan portfolio showcase</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-green-600 font-semibold">#Agency #Creative</span>
                        <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
                
                <!-- Template 4 -->
                <div class="template-card startup feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="h-3 bg-yellow-500 rounded mb-2 w-1/2"></div>
                                <div class="h-2 bg-gray-300 rounded w-3/4"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">StartupLaunch</h3>
                    <p class="text-gray-600 mb-4">Template modern untuk startup dengan call-to-action kuat</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-orange-600 font-semibold">#Startup #Launch</span>
                        <button class="bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
                
                <!-- Template 5 -->
                <div class="template-card saas feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="flex space-x-2 mb-2">
                                    <div class="w-6 h-2 bg-indigo-500 rounded"></div>
                                    <div class="w-4 h-2 bg-gray-300 rounded"></div>
                                </div>
                                <div class="h-2 bg-gray-300 rounded w-5/6"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">AppLanding Pro</h3>
                    <p class="text-gray-600 mb-4">Showcase mobile app dengan download buttons yang prominent</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-indigo-600 font-semibold">#App #Mobile</span>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
                
                <!-- Template 6 -->
                <div class="template-card ecommerce feature-card rounded-2xl p-6 hover-lift animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="h-48 bg-gradient-to-br from-teal-400 to-cyan-600 rounded-xl mb-6 relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="bg-white bg-opacity-90 rounded-lg p-3">
                                <div class="grid grid-cols-3 gap-1 mb-2">
                                    <div class="h-3 bg-teal-500 rounded"></div>
                                    <div class="h-3 bg-teal-300 rounded"></div>
                                    <div class="h-3 bg-gray-300 rounded"></div>
                                </div>
                                <div class="h-2 bg-gray-300 rounded"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">MarketPlace</h3>
                    <p class="text-gray-600 mb-4">Multi-vendor marketplace dengan kategori produk lengkap</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-teal-600 font-semibold">#Marketplace #B2B</span>
                        <button class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition-colors">
                            Preview
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <button class="glass-effect text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-white hover:bg-opacity-20 transition-all duration-300">
                    Lihat Semua Template (50+)
                </button>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="relative z-10 px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Pilih Paket yang Tepat untuk Anda
                </h2>
                <p class="text-xl text-white opacity-90 max-w-3xl mx-auto">
                    Mulai gratis, upgrade kapan saja. Semua paket dilengkapi dengan fitur premium dan support terbaik.
                </p>
            </div>
            
            <!-- Pricing Toggle -->
            <div class="flex justify-center mb-12">
                <div class="glass-effect rounded-2xl p-2 flex">
                    <button onclick="togglePricing('monthly')" id="monthlyBtn" class="pricing-toggle active bg-white text-purple-600 px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                        Bulanan
                    </button>
                    <button onclick="togglePricing('yearly')" id="yearlyBtn" class="pricing-toggle text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                        Tahunan <span class="text-sm bg-green-500 text-white px-2 py-1 rounded-full ml-2">Save 20%</span>
                    </button>
                </div>
            </div>
            
            <!-- Pricing Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <!-- Starter Plan -->
                <div class="feature-card rounded-3xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Starter</h3>
                        <div class="pricing-amount mb-4">
                            <span class="text-4xl font-bold text-gray-800 monthly-price">Gratis</span>
                            <span class="text-4xl font-bold text-gray-800 yearly-price hidden">Gratis</span>
                        </div>
                        <p class="text-gray-600">Perfect untuk memulai</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">3 Landing Pages</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">10 Template Basic</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Basic Customization</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">PageGenius Branding</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-all duration-300">
                        Mulai Gratis
                    </button>
                </div>
                
                <!-- Pro Plan -->
                <div class="feature-card rounded-3xl p-8 hover-lift animate-fade-in relative" style="animation-delay: 0.2s;">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-purple-600 text-white px-6 py-2 rounded-full text-sm font-semibold">
                            Most Popular
                        </span>
                    </div>
                    
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Pro</h3>
                        <div class="pricing-amount mb-4">
                            <span class="monthly-price">
                                <span class="text-4xl font-bold text-gray-800">$29</span>
                                <span class="text-gray-600">/bulan</span>
                            </span>
                            <span class="yearly-price hidden">
                                <span class="text-4xl font-bold text-gray-800">$279</span>
                                <span class="text-gray-600">/tahun</span>
                            </span>
                        </div>
                        <p class="text-gray-600">Untuk business yang serius</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">25 Landing Pages</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">50+ Premium Templates</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Advanced AI Features</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Custom Domain</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Analytics & A/B Testing</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Priority Support</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Pilih Pro
                    </button>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="feature-card rounded-3xl p-8 hover-lift animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Enterprise</h3>
                        <div class="pricing-amount mb-4">
                            <span class="monthly-price">
                                <span class="text-4xl font-bold text-gray-800">$99</span>
                                <span class="text-gray-600">/bulan</span>
                            </span>
                            <span class="yearly-price hidden">
                                <span class="text-4xl font-bold text-gray-800">$949</span>
                                <span class="text-gray-600">/tahun</span>
                            </span>
                        </div>
                        <p class="text-gray-600">Untuk tim dan enterprise</p>
                    </div>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Unlimited Landing Pages</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">All Premium Templates</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">White Label Solution</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Team Collaboration</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">API Access</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">24/7 Dedicated Support</span>
                        </li>
                    </ul>
                    
                    <button class="w-full bg-gradient-to-r from-gray-800 to-gray-900 text-white py-3 rounded-xl font-semibold hover:from-gray-700 hover:to-gray-800 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        Hubungi Sales
                    </button>
                </div>
            </div>
            
            <!-- Money Back Guarantee -->
            <div class="text-center mt-12">
                <div class="glass-effect rounded-2xl p-6 max-w-md mx-auto">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-white font-semibold mb-2">30-Day Money Back Guarantee</h4>
                    <p class="text-white opacity-80 text-sm">Tidak puas? Dapatkan refund 100% dalam 30 hari</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative z-10 px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 animate-slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Hubungi Kami
                </h2>
                <p class="text-xl text-white opacity-90 max-w-3xl mx-auto">
                    Tim support kami siap membantu Anda 24/7. Jangan ragu untuk menghubungi kami kapan saja.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                
                <!-- Contact Info -->
                <div class="space-y-8 animate-fade-in">
                    <div class="glass-effect rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-white mb-6">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Alamat</h4>
                                    <p class="text-white opacity-80">
                                        Jl. Sudirman No. 123<br>
                                        Jakarta Pusat, Indonesia 10220
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Telepon</h4>
                                    <p class="text-white opacity-80">
                                        +62 21 1234 5678<br>
                                        +62 812 3456 7890
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Email</h4>
                                    <p class="text-white opacity-80">
                                        hello@pagegenius.com<br>
                                        support@pagegenius.com
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-semibold mb-1">Jam Operasional</h4>
                                    <p class="text-white opacity-80">
                                        Senin - Jumat: 09:00 - 18:00<br>
                                        Sabtu - Minggu: 10:00 - 16:00
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="mt-8 pt-8 border-t border-white border-opacity-20">
                            <h4 class="text-white font-semibold mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-700 transition-colors">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center hover:bg-blue-500 transition-colors">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center hover:bg-pink-700 transition-colors">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.347-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                                    </svg>
                                </a>
                                <a href="#" class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center hover:bg-blue-800 transition-colors">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="feature-card rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                        
                        <form class="space-y-6" id="contactForm">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300" placeholder="Nama Anda">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300" placeholder="email@example.com">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300" placeholder="+62 812 3456 7890">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Subjek</label>
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300">
                                        <option>Pertanyaan Umum</option>
                                        <option>Demo Request</option>
                                        <option>Technical Support</option>
                                        <option>Sales Inquiry</option>
                                        <option>Partnership</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                                <textarea rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300 resize-none" placeholder="Tulis pesan Anda di sini..."></textarea>
                            </div>
                            
                            <div class="flex items-center">
                                <input type="checkbox" id="agree" class="rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                                <label for="agree" class="ml-2 text-sm text-gray-600">
                                    Saya setuju dengan <a href="#" class="text-purple-600 hover:text-purple-800">kebijakan privasi</a> dan menerima komunikasi dari PageGenius
                                </label>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-indigo-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                <span class="flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Kirim Pesan
                                </span>
                            </button>
                        </form>
                        
                        <!-- Success Message -->
                        <div id="successMessage" class="hidden mt-6 p-4 bg-green-50 border border-green-200 rounded-xl">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <h4 class="text-green-800 font-semibold">Pesan Terkirim!</h4>
                                    <p class="text-green-700 text-sm">Terima kasih atas pesan Anda. Tim kami akan merespons dalam 24 jam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="mt-20">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-bold text-white mb-4">
                        Frequently Asked Questions
                    </h3>
                    <p class="text-white opacity-80 max-w-2xl mx-auto">
                        Pertanyaan yang sering diajukan oleh pengguna PageGenius
                    </p>
                </div>
                
                <div class="max-w-4xl mx-auto space-y-4">
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Apakah PageGenius cocok untuk pemula?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Absolutely! PageGenius dirancang untuk semua level pengguna. Interface drag-and-drop kami sangat intuitif, dan AI akan membantu Anda membuat landing page profesional tanpa perlu coding.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Berapa lama waktu yang dibutuhkan untuk membuat landing page?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Dengan AI kami, Anda bisa membuat landing page dalam 2-5 menit! Cukup input informasi bisnis Anda, pilih template, dan AI akan menghasilkan landing page yang siap publish.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Apakah saya bisa menggunakan domain sendiri?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Ya! Pada paket Pro dan Enterprise, Anda bisa menggunakan custom domain sendiri. Kami juga menyediakan subdomain gratis untuk paket Starter.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item glass-effect rounded-2xl overflow-hidden">
                        <button class="faq-question w-full px-6 py-4 text-left flex items-center justify-between text-white hover:bg-white hover:bg-opacity-10 transition-all duration-300" onclick="toggleFaq(this)">
                            <span class="font-semibold">Bagaimana dengan SEO optimization?</span>
                            <svg class="w-5 h-5 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4">
                            <p class="text-white opacity-80">
                                Semua landing page yang dibuat otomatis SEO-optimized dengan meta tags, structured data, sitemap, dan performance optimization untuk loading speed yang cepat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
        <div class="max-w-4xl mx-auto text-center">
            <div class="glass-dark rounded-3xl p-12 animate-slide-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Siap Membuat Landing Page Impian Anda?
                </h2>
                <p class="text-xl text-white opacity-90 mb-8 leading-relaxed">
                    Bergabunglah dengan ribuan entrepreneur yang telah mempercayai PageGenius 
                    untuk mengembangkan bisnis mereka.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button class="bg-white text-purple-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-purple-50 transition-all duration-300 transform hover:scale-105 shadow-2xl animate-glow">
                        Mulai Gratis Sekarang
                    </button>
                    <button class="text-white border-2 border-white px-10 py-4 rounded-2xl font-semibold text-lg hover:bg-white hover:text-purple-600 transition-all duration-300">
                        Lihat Pricing
                    </button>
                </div>
                
                <div class="mt-8 flex items-center justify-center space-x-6 text-white opacity-80">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>No Credit Card</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>14 Days Free Trial</span>
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
                
                <div class="border-t border-white border-opacity-20 mt-8 pt-8 text-center">
                    <p class="text-white opacity-60">
                        © 2025 PageGenius. All rights reserved. Made with ❤️ for entrepreneurs worldwide.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add scroll animation trigger
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
        
        // Add hover effects to cards
        document.querySelectorAll('.hover-lift').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Dynamic background elements
        function createFloatingElement() {
            const element = document.createElement('div');
            element.className = 'absolute w-4 h-4 bg-white rounded-full opacity-20 animate-float';
            element.style.left = Math.random() * 100 + '%';
            element.style.top = Math.random() * 100 + '%';
            element.style.animationDelay = Math.random() * 5 + 's';
            element.style.animationDuration = (Math.random() * 3 + 4) + 's';
            
            document.querySelector('.fixed.inset-0').appendChild(element);
            
            setTimeout(() => {
                element.remove();
            }, 8000);
        }
        
        // Create floating elements periodically
        setInterval(createFloatingElement, 3000);
        // Template filtering
        function filterTemplates(category) {
            const cards = document.querySelectorAll('.template-card');
            const filters = document.querySelectorAll('.template-filter');
            
            // Update active filter
            filters.forEach(filter => {
                filter.classList.remove('active', 'bg-white', 'text-purple-600');
                filter.classList.add('glass-effect', 'text-white');
            });
            
            event.target.classList.add('active', 'bg-white', 'text-purple-600');
            event.target.classList.remove('glass-effect', 'text-white');
            
            // Show/hide cards
            cards.forEach(card => {
                if (category === 'all' || card.classList.contains(category)) {
                    card.style.display = 'block';
                    card.classList.add('animate-fade-in');
                } else {
                    card.style.display = 'none';
                    card.classList.remove('animate-fade-in');
                }
            });
        }
        
        // Pricing toggle
        function togglePricing(type) {
            const monthlyBtn = document.getElementById('monthlyBtn');
            const yearlyBtn = document.getElementById('yearlyBtn');
            const monthlyPrices = document.querySelectorAll('.monthly-price');
            const yearlyPrices = document.querySelectorAll('.yearly-price');
            
            if (type === 'monthly') {
                monthlyBtn.classList.add('active', 'bg-white', 'text-purple-600');
                yearlyBtn.classList.remove('active', 'bg-white', 'text-purple-600');
                yearlyBtn.classList.add('text-white');
                
                monthlyPrices.forEach(price => price.classList.remove('hidden'));
                yearlyPrices.forEach(price => price.classList.add('hidden'));
            } else {
                yearlyBtn.classList.add('active', 'bg-white', 'text-purple-600');
                monthlyBtn.classList.remove('active', 'bg-white', 'text-purple-600');
                monthlyBtn.classList.add('text-white');
                
                yearlyPrices.forEach(price => price.classList.remove('hidden'));
                monthlyPrices.forEach(price => price.classList.add('hidden'));
            }
        }
        
        // FAQ toggle
        function toggleFaq(button) {
            const answer = button.nextElementSibling;
            const icon = button.querySelector('svg');
            
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.classList.add('hidden');
                answer.style.maxHeight = '0';
                icon.style.transform = 'rotate(0deg)';
            }
        }
        
        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            const button = this.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;
            
            button.innerHTML = '<svg class="w-5 h-5 animate-spin mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>';
            button.disabled = true;
            
            setTimeout(() => {
                this.style.display = 'none';
                document.getElementById('successMessage').classList.remove('hidden');
            }, 2000);
        });

    </script>
</body>
</html>