<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - PageGenius</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.6s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' }
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
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
                Privacy Policy
            </h1>
            <p class="text-xl text-white opacity-90 mb-8 animate-fade-in" style="animation-delay: 0.2s;">
                Terakhir diperbarui: 31 Juli 2025
            </p>
        </div>
    </section>

    <!-- Content -->
    <section class="relative z-10 px-6 pb-20">
        <div class="max-w-4xl mx-auto">
            <div class="glass-effect rounded-3xl p-8 md:p-12 animate-fade-in" style="animation-delay: 0.3s;">
                
                <!-- Introduction -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">1. Pendahuluan</h2>
                    <p class="text-white opacity-90 leading-relaxed mb-4">
                        Di PageGenius, kami sangat menghargai privasi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, 
                        menggunakan, mengungkapkan, dan melindungi informasi Anda ketika Anda menggunakan layanan kami.
                    </p>
                    <p class="text-white opacity-90 leading-relaxed">
                        Dengan menggunakan PageGenius, Anda menyetujui pengumpulan dan penggunaan informasi sesuai dengan kebijakan ini.
                    </p>
                </div>

                <!-- Information We Collect -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">2. Informasi yang Kami Kumpulkan</h2>
                    
                    <div class="space-y-6">
                        <div class="glass-effect bg-blue-500 bg-opacity-20 rounded-xl p-6">
                            <h3 class="text-xl font-semibold text-white mb-3">2.1 Informasi yang Anda Berikan</h3>
                            <ul class="space-y-2 text-white opacity-90">
                                <li>• Informasi akun (nama, email, password)</li>
                                <li>• Informasi profil bisnis</li>
                                <li>• Konten yang Anda buat menggunakan layanan kami</li>
                                <li>• Komunikasi dengan tim support kami</li>
                                <li>• Informasi pembayaran (diproses melalui payment gateway aman)</li>
                            </ul>
                        </div>
                        
                        <div class="glass-effect bg-green-500 bg-opacity-20 rounded-xl p-6">
                            <h3 class="text-xl font-semibold text-white mb-3">2.2 Informasi yang Dikumpulkan Otomatis</h3>
                            <ul class="space-y-2 text-white opacity-90">
                                <li>• Log data (IP address, browser type, halaman yang dikunjungi)</li>
                                <li>• Cookies dan teknologi pelacakan serupa</li>
                                <li>• Informasi perangkat (OS, versi browser)</li>
                                <li>• Data penggunaan layanan</li>
                                <li>• Analytics data</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- How We Use Information -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">3. Bagaimana Kami Menggunakan Informasi</h2>
                    <p class="text-white opacity-90 mb-4">Kami menggunakan informasi yang dikumpulkan untuk:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Menyediakan dan memelihara layanan</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Memproses transaksi pembayaran</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Mengirim update dan notifikasi</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Meningkatkan layanan kami</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Memberikan customer support</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <p class="text-white opacity-90">✓ Mencegah fraud dan abuse</p>
                        </div>
                    </div>
                </div>

                <!-- Data Sharing -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">4. Berbagi Data</h2>
                    <p class="text-white opacity-90 mb-4">
                        Kami tidak menjual, menyewakan, atau membagikan informasi pribadi Anda kepada pihak ketiga untuk tujuan pemasaran mereka. 
                        Kami hanya membagikan informasi dalam situasi berikut:
                    </p>
                    <ul class="space-y-3 text-white opacity-90">
                        <li class="flex items-start">
                            <span class="text-green-400 mr-2">✓</span>
                            <span><strong>Dengan persetujuan Anda:</strong> Kami akan membagikan informasi dengan persetujuan eksplisit Anda.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-400 mr-2">✓</span>
                            <span><strong>Service Providers:</strong> Dengan vendor terpercaya yang membantu kami menyediakan layanan (hosting, payment processing, analytics).</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-400 mr-2">✓</span>
                            <span><strong>Kepatuhan Hukum:</strong> Jika diperlukan oleh hukum atau untuk melindungi hak dan keselamatan.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-400 mr-2">✓</span>
                            <span><strong>Business Transfer:</strong> Dalam hal merger, akuisisi, atau penjualan aset.</span>
                        </li>
                    </ul>
                </div>

                <!-- Data Security -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">5. Keamanan Data</h2>
                    <div class="glass-effect bg-purple-600 bg-opacity-20 rounded-xl p-6">
                        <p class="text-white opacity-90 mb-4">
                            Kami menerapkan langkah-langkah keamanan industry-standard untuk melindungi data Anda:
                        </p>
                        <ul class="space-y-2 text-white opacity-90">
                            <li>🔒 Enkripsi SSL/TLS untuk semua transmisi data</li>
                            <li>🔐 Enkripsi data sensitif saat disimpan</li>
                            <li>🛡️ Firewall dan sistem deteksi intrusi</li>
                            <li>🔑 Akses terbatas ke data pribadi</li>
                            <li>📊 Audit keamanan regular</li>
                            <li>🚨 Monitoring 24/7 untuk aktivitas mencurigakan</li>
                        </ul>
                    </div>
                </div>

                <!-- Your Rights -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">6. Hak-Hak Anda</h2>
                    <p class="text-white opacity-90 mb-4">Anda memiliki hak-hak berikut terkait data pribadi Anda:</p>
                    <div class="space-y-4">
                        <div class="glass-effect rounded-lg p-4">
                            <h4 class="text-white font-semibold mb-2">📋 Hak Akses</h4>
                            <p class="text-white opacity-80 text-sm">Anda dapat meminta salinan data pribadi yang kami miliki tentang Anda.</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <h4 class="text-white font-semibold mb-2">✏️ Hak Koreksi</h4>
                            <p class="text-white opacity-80 text-sm">Anda dapat memperbarui atau memperbaiki informasi yang tidak akurat.</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <h4 class="text-white font-semibold mb-2">🗑️ Hak Penghapusan</h4>
                            <p class="text-white opacity-80 text-sm">Anda dapat meminta penghapusan data pribadi Anda dalam kondisi tertentu.</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <h4 class="text-white font-semibold mb-2">📤 Hak Portabilitas</h4>
                            <p class="text-white opacity-80 text-sm">Anda dapat meminta data Anda dalam format yang dapat dibaca mesin.</p>
                        </div>
                        <div class="glass-effect rounded-lg p-4">
                            <h4 class="text-white font-semibold mb-2">🚫 Hak Keberatan</h4>
                            <p class="text-white opacity-80 text-sm">Anda dapat keberatan terhadap pemrosesan data tertentu.</p>
                        </div>
                    </div>
                </div>

                <!-- Cookies -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">7. Cookies dan Teknologi Pelacakan</h2>
                    <p class="text-white opacity-90 mb-4">
                        Kami menggunakan cookies dan teknologi pelacakan serupa untuk:
                    </p>
                    <ul class="space-y-2 text-white opacity-90 mb-4">
                        <li>• Menjaga sesi login Anda</li>
                        <li>• Mengingat preferensi Anda</li>
                        <li>• Menganalisis penggunaan layanan</li>
                        <li>• Meningkatkan pengalaman pengguna</li>
                    </ul>
                    <p class="text-white opacity-90">
                        Anda dapat mengatur browser untuk menolak cookies, namun beberapa fitur layanan mungkin tidak berfungsi dengan baik.
                    </p>
                </div>

                <!-- Data Retention -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">8. Penyimpanan Data</h2>
                    <p class="text-white opacity-90 mb-4">
                        Kami menyimpan data Anda selama:
                    </p>
                    <div class="glass-effect bg-orange-500 bg-opacity-20 rounded-xl p-6">
                        <ul class="space-y-3 text-white opacity-90">
                            <li>• <strong>Data Akun:</strong> Selama akun Anda aktif + 30 hari setelah penghapusan</li>
                            <li>• <strong>Data Transaksi:</strong> 7 tahun untuk keperluan akuntansi dan pajak</li>
                            <li>• <strong>Log Data:</strong> 90 hari untuk analisis dan keamanan</li>
                            <li>• <strong>Backup:</strong> Maksimal 90 hari dalam sistem backup</li>
                        </ul>
                    </div>
                </div>

                <!-- Children's Privacy -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">9. Privasi Anak-Anak</h2>
                    <p class="text-white opacity-90">
                        Layanan kami tidak ditujukan untuk anak-anak di bawah 18 tahun. Kami tidak secara sengaja mengumpulkan 
                        informasi pribadi dari anak-anak. Jika Anda mengetahui bahwa anak Anda telah memberikan informasi pribadi 
                        kepada kami, silakan hubungi kami.
                    </p>
                </div>

                <!-- International Data Transfers -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">10. Transfer Data Internasional</h2>
                    <p class="text-white opacity-90">
                        Data Anda mungkin ditransfer dan diproses di negara lain di mana kami atau service provider kami beroperasi. 
                        Kami memastikan bahwa transfer tersebut dilakukan dengan perlindungan yang memadai sesuai dengan hukum yang berlaku.
                    </p>
                </div>

                <!-- Changes to Privacy Policy -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">11. Perubahan Kebijakan Privasi</h2>
                    <p class="text-white opacity-90">
                        Kami dapat memperbarui Kebijakan Privasi ini dari waktu ke waktu. Kami akan memberitahu Anda tentang 
                        perubahan dengan memposting kebijakan baru di halaman ini dan memperbarui tanggal "Terakhir diperbarui". 
                        Untuk perubahan material, kami akan memberikan pemberitahuan yang lebih menonjol.
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="glass-effect bg-purple-600 bg-opacity-20 rounded-xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">12. Hubungi Kami</h2>
                    <p class="text-white opacity-90 leading-relaxed mb-4">
                        Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi ini atau praktik data kami, 
                        silakan hubungi Data Protection Officer kami:
                    </p>
                    <div class="space-y-2 text-white opacity-90">
                        <p>📧 Email: privacy@pagegenius.com</p>
                        <p>📱 Telepon: +62 21 1234 5678</p>
                        <p>📍 Alamat: Jl. Sudirman No. 123, Jakarta Pusat, Indonesia 10220</p>
                    </div>
                    <div class="mt-4 p-4 bg-white bg-opacity-10 rounded-lg">
                        <p class="text-white text-sm opacity-90">
                            Waktu respons: Kami akan merespons permintaan Anda dalam 30 hari kerja.
                        </p>
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

</body>
</html>