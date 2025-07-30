<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['meta_title'] ?? 'Platform SaaS Modern' }}</title>
    <meta name="description" content="{{ $content['meta_description'] ?? '' }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-text { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .floating { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-20px); } 100% { transform: translateY(0px); } }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 overflow-x-hidden">

    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold gradient-text">{{ $content['nav_brand_name'] ?? 'PageGenius' }}</div>
                <a href="#" class="px-5 py-2 gradient-bg text-white font-semibold rounded-lg text-sm">{{ $content['nav_button_text'] ?? 'Login' }}</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-24">
        <div class="absolute inset-0 bg-white"><div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-white to-blue-50"></div><div class="absolute top-0 right-0 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 floating"></div><div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 floating" style="animation-delay: 2s;"></div></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6">
                    <span class="gradient-text">{{ $content['hero_headline_1'] ?? 'Solusi Digital' }}</span><br>
                    <span class="text-gray-800">{{ $content['hero_headline_2'] ?? 'Untuk Bisnis Modern' }}</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-10 leading-relaxed">{{ $content['hero_subheadline'] ?? 'Tingkatkan produktivitas tim Anda dengan platform all-in-one yang dirancang khusus untuk kebutuhan bisnis digital.' }}</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white gradient-bg rounded-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200">{{ $content['hero_cta_primary'] ?? 'Mulai Gratis' }}</a>
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-gray-700 bg-white border-2 border-gray-200 rounded-xl hover:border-purple-500 hover:text-purple-600 transition-all duration-200">{{ $content['hero_cta_secondary'] ?? 'Lihat Demo' }}</a>
                </div>
                <div class="mt-16 flex flex-wrap justify-center items-center gap-8 text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Setup 5 Menit</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Tanpa Kartu Kredit</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span>Support 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="py-24 relative">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">{{ $content['features_title'] ?? 'Fitur' }} <span class="gradient-text">{{ $content['features_title_highlight'] ?? 'Unggulan' }}</span></h2>
                <p class="text-xl text-gray-600">{{ $content['features_subtitle'] ?? 'Semua yang Anda butuhkan untuk mengelola bisnis dalam satu platform' }}</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_1_title'] ?? 'Performa Cepat' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_1_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_2_title'] ?? 'Keamanan Terjamin' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_2_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_3_title'] ?? 'Analytics Real-time' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_3_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_4_title'] ?? 'Kolaborasi Tim' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_4_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_5_title'] ?? 'Otomasi Workflow' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_5_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
                    <div class="relative z-10">
                        <div class="w-14 h-14 gradient-bg rounded-xl flex items-center justify-center mb-6"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg></div>
                        <h3 class="text-2xl font-bold mb-3">{{ $content['feature_6_title'] ?? 'Mobile Friendly' }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $content['feature_6_description'] ?? 'Deskripsi singkat tentang fitur ini.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-white text-center">
                @for ($i = 1; $i <= 4; $i++)
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">{{ $content["stat_{$i}_number"] ?? '10K+' }}</div>
                    <div class="text-lg opacity-90">{{ $content["stat_{$i}_label"] ?? 'Label Statistik' }}</div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">{{ $content['testimonials_title'] ?? 'Dipercaya oleh' }} <span class="gradient-text">{{ $content['testimonials_title_highlight'] ?? 'Ribuan Bisnis' }}</span></h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex mb-4">
                        @for ($s = 0; $s < 5; $s++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-4">"{{ $content["testimonial_{$i}_quote"] ?? 'Platform ini benar-benar mengubah cara kami bekerja. Sangat direkomendasikan!' }}"</p>
                    <div class="flex items-center">
                        <img src="{{ $content["testimonial_{$i}_avatar"] ?? 'https://i.pravatar.cc/150?u=a042581f4e29026704d' }}" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold">{{ $content["testimonial_{$i}_name"] ?? 'Pengguna Setia' }}</div>
                            <div class="text-sm text-gray-500">{{ $content["testimonial_{$i}_title"] ?? 'CEO, Nama Perusahaan' }}</div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
    
    <section class="py-24">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">{{ $content['pricing_title'] ?? 'Harga yang' }} <span class="gradient-text">{{ $content['pricing_title_highlight'] ?? 'Transparan' }}</span></h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @for ($i = 1; $i <= 3; $i++)
                <div class="bg-white rounded-2xl shadow-lg p-8 relative">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-2">{{ $content["plan_{$i}_name"] ?? "Paket {$i}" }}</h3>
                        <p class="text-gray-600">{{ $content["plan_{$i}_description"] ?? 'Deskripsi singkat paket' }}</p>
                    </div>
                    <div class="mb-8">
                        <div class="text-4xl font-bold">{{ $content["plan_{$i}_price"] ?? 'Rp 99K' }}<span class="text-lg font-normal text-gray-600">/{{ $content["plan_{$i}_period"] ?? 'bulan' }}</span></div>
                    </div>
                    <ul class="space-y-4 mb-8">
                        @php
                            $features = explode("\n", $content["plan_{$i}_features"] ?? "Fitur 1\nFitur 2\nFitur 3");
                        @endphp
                        @foreach ($features as $feature)
                        <li class="flex items-start"><svg class="w-5 h-5 text-green-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span>{{ $feature }}</span></li>
                        @endforeach
                    </ul>
                    <button class="w-full py-3 px-6 border-2 border-gray-300 text-gray-700 font-semibold rounded-lg hover:border-purple-500 hover:text-purple-600 transition-colors">{{ $content["plan_{$i}_button"] ?? 'Mulai Trial' }}</button>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">{{ $content['faq_title'] ?? 'Pertanyaan yang' }} <span class="gradient-text">{{ $content['faq_title_highlight'] ?? 'Sering Diajukan' }}</span></h2>
            </div>
            <div class="max-w-3xl mx-auto space-y-6">
                @for ($i = 1; $i <= 4; $i++)
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-lg font-semibold mb-2">{{ $content["faq_{$i}_question"] ?? 'Apakah ada free trial?' }}</h3>
                    <p class="text-gray-600">{{ $content["faq_{$i}_answer"] ?? 'Ya, kami menawarkan 14 hari free trial untuk semua paket. Tidak perlu kartu kredit untuk memulai.' }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 gradient-bg"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">{{ $content['cta_title'] ?? 'Siap untuk Meningkatkan Bisnis Anda?' }}</h2>
                <p class="text-xl mb-8 opacity-90">{{ $content['cta_subtitle'] ?? 'Bergabung dengan ribuan perusahaan yang telah mempercayai PageGenius' }}</p>
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-purple-600 bg-white rounded-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200">{{ $content['cta_button'] ?? 'Mulai Free Trial' }}</a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-300 py-16">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">{{ $content['footer_brand_name'] ?? 'PageGenius' }}</h3>
                    <p class="text-gray-400">{{ $content['footer_description'] ?? 'Platform SaaS terpercaya untuk meningkatkan produktivitas bisnis Anda.' }}</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ $content['footer_links_1_title'] ?? 'Produk' }}</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_1_item_1'] ?? 'Features' }}</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_1_item_2'] ?? 'Pricing' }}</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_1_item_3'] ?? 'Integration' }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ $content['footer_links_2_title'] ?? 'Perusahaan' }}</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_2_item_1'] ?? 'Tentang Kami' }}</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_2_item_2'] ?? 'Blog' }}</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">{{ $content['footer_links_2_item_3'] ?? 'Kontak' }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-4">{{ $content['footer_social_title'] ?? 'Ikuti Kami' }}</h4>
                    <div class="flex space-x-4">
                        <a href="{{ $content['footer_social_link_1'] ?? '#' }}" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="{{ $content['footer_social_link_2'] ?? '#' }}" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-gray-700 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} {{ $content['footer_copyright'] ?? 'PageGenius' }}. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>