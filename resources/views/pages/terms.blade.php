<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - PageGenius</title>
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
                Terms of Service
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
                        Selamat datang di PageGenius! Syarat dan Ketentuan ("Terms") ini mengatur penggunaan Anda atas layanan PageGenius, 
                        termasuk website, aplikasi, dan semua produk atau layanan terkait (secara kolektif disebut "Layanan").
                    </p>
                    <p class="text-white opacity-90 leading-relaxed">
                        Dengan menggunakan Layanan kami, Anda menyetujui untuk terikat oleh Terms ini. Jika Anda tidak setuju dengan 
                        bagian mana pun dari persyaratan ini, maka Anda tidak boleh mengakses Layanan.
                    </p>
                </div>

                <!-- Account Terms -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">2. Ketentuan Akun</h2>
                    <ul class="space-y-3 text-white opacity-90">
                        <li class="flex items-start">
                            <span class="text-purple-300 mr-2">•</span>
                            <span>Anda harus berusia minimal 18 tahun untuk menggunakan Layanan ini.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-300 mr-2">•</span>
                            <span>Anda harus memberikan informasi yang akurat dan lengkap saat mendaftar.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-300 mr-2">•</span>
                            <span>Anda bertanggung jawab untuk menjaga keamanan akun dan password Anda.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-300 mr-2">•</span>
                            <span>Anda bertanggung jawab atas semua aktivitas yang terjadi di bawah akun Anda.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-300 mr-2">•</span>
                            <span>Anda harus segera memberitahu kami jika ada penggunaan tidak sah atas akun Anda.</span>
                        </li>
                    </ul>
                </div>

                <!-- Acceptable Use -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">3. Penggunaan yang Dapat Diterima</h2>
                    <p class="text-white opacity-90 leading-relaxed mb-4">
                        Anda setuju untuk tidak menggunakan Layanan untuk:
                    </p>
                    <ul class="space-y-3 text-white opacity-90">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">✗</span>
                            <span>Melanggar hukum atau peraturan yang berlaku</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">✗</span>
                            <span>Mengirimkan atau menyebarkan virus atau kode berbahaya lainnya</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">✗</span>
                            <span>Melakukan aktivitas penipuan atau menyesatkan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">✗</span>
                            <span>Melanggar hak kekayaan intelektual pihak lain</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">✗</span>
                            <span>Mengumpulkan informasi pengguna lain tanpa izin</span>
                        </li>
                    </ul>
                </div>

                <!-- Payment Terms -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">4. Pembayaran dan Penagihan</h2>
                    <div class="space-y-4 text-white opacity-90">
                        <p class="leading-relaxed">
                            <strong class="text-white">4.1 Biaya Berlangganan:</strong> Beberapa fitur Layanan memerlukan pembayaran biaya berlangganan. 
                            Anda akan ditagih sesuai dengan paket yang Anda pilih.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">4.2 Pembaruan Otomatis:</strong> Langganan Anda akan diperpanjang secara otomatis pada akhir 
                            periode berlangganan kecuali Anda membatalkannya.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">4.3 Kebijakan Refund:</strong> Kami menawarkan jaminan uang kembali 30 hari untuk semua paket berbayar. 
                            Permintaan refund harus diajukan dalam 30 hari sejak pembelian.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">4.4 Perubahan Harga:</strong> Kami berhak mengubah harga dengan pemberitahuan 30 hari sebelumnya.
                        </p>
                    </div>
                </div>

                <!-- Intellectual Property -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">5. Hak Kekayaan Intelektual</h2>
                    <div class="space-y-4 text-white opacity-90">
                        <p class="leading-relaxed">
                            <strong class="text-white">5.1 Konten PageGenius:</strong> Semua konten yang disediakan oleh PageGenius, termasuk teks, 
                            grafik, logo, dan software, adalah milik PageGenius dan dilindungi oleh hukum hak cipta.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">5.2 Konten Pengguna:</strong> Anda mempertahankan semua hak atas konten yang Anda buat menggunakan 
                            Layanan kami. Namun, Anda memberikan PageGenius lisensi untuk menggunakan konten tersebut untuk menyediakan Layanan.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">5.3 Template dan Desain:</strong> Template yang disediakan oleh PageGenius dapat digunakan untuk 
                            proyek komersial Anda, tetapi tidak dapat dijual kembali sebagai template terpisah.
                        </p>
                    </div>
                </div>

                <!-- Privacy -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">6. Privasi</h2>
                    <p class="text-white opacity-90 leading-relaxed">
                        Penggunaan Layanan kami juga diatur oleh Kebijakan Privasi kami. Silakan tinjau 
                        <a href="/privacy" class="text-purple-300 hover:text-purple-200 underline">Kebijakan Privasi</a> kami, 
                        yang juga mengatur penggunaan Anda atas Layanan kami.
                    </p>
                </div>

                <!-- Termination -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">7. Pengakhiran</h2>
                    <div class="space-y-4 text-white opacity-90">
                        <p class="leading-relaxed">
                            <strong class="text-white">7.1 Oleh Anda:</strong> Anda dapat menghentikan penggunaan Layanan kami kapan saja dengan 
                            membatalkan akun Anda.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">7.2 Oleh Kami:</strong> Kami dapat menangguhkan atau menghentikan akun Anda jika Anda melanggar 
                            Terms ini atau terlibat dalam aktivitas yang merugikan Layanan atau pengguna lain.
                        </p>
                        <p class="leading-relaxed">
                            <strong class="text-white">7.3 Efek Pengakhiran:</strong> Setelah pengakhiran, hak Anda untuk menggunakan Layanan akan 
                            segera berhenti. Data Anda akan disimpan selama 30 hari sebelum dihapus permanen.
                        </p>
                    </div>
                </div>

                <!-- Disclaimer -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">8. Penafian</h2>
                    <div class="glass-effect bg-yellow-500 bg-opacity-20 rounded-xl p-6 mb-6">
                        <p class="text-white leading-relaxed">
                            LAYANAN DISEDIAKAN "SEBAGAIMANA ADANYA" DAN "SEBAGAIMANA TERSEDIA" TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN TERSIRAT. 
                            PAGEGENIUS TIDAK MENJAMIN BAHWA LAYANAN AKAN BEBAS DARI KESALAHAN ATAU GANGGUAN.
                        </p>
                    </div>
                </div>

                <!-- Limitation of Liability -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">9. Batasan Tanggung Jawab</h2>
                    <p class="text-white opacity-90 leading-relaxed">
                        Dalam keadaan apa pun PageGenius tidak akan bertanggung jawab atas kerusakan tidak langsung, insidental, khusus, 
                        konsekuensial, atau hukuman, termasuk namun tidak terbatas pada kehilangan keuntungan, data, penggunaan, goodwill, 
                        atau kerugian tidak berwujud lainnya.
                    </p>
                </div>

                <!-- Changes to Terms -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-4">10. Perubahan Terms</h2>
                    <p class="text-white opacity-90 leading-relaxed">
                        Kami berhak untuk memodifikasi atau mengganti Terms ini kapan saja. Jika revisi bersifat material, kami akan 
                        memberikan pemberitahuan setidaknya 30 hari sebelum terms baru berlaku. Penggunaan Layanan yang berkelanjutan 
                        setelah perubahan tersebut merupakan persetujuan Anda terhadap terms baru.
                    </p>
                </div>

                <!-- Contact Information -->
                <div class="glass-effect bg-purple-600 bg-opacity-20 rounded-xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">11. Hubungi Kami</h2>
                    <p class="text-white opacity-90 leading-relaxed mb-4">
                        Jika Anda memiliki pertanyaan tentang Terms of Service ini, silakan hubungi kami:
                    </p>
                    <div class="space-y-2 text-white opacity-90">
                        <p>📧 Email: legal@pagegenius.com</p>
                        <p>📱 Telepon: +62 21 1234 5678</p>
                        <p>📍 Alamat: Jl. Sudirman No. 123, Jakarta Pusat, Indonesia 10220</p>
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
                        <a href="/privacy" class="hover:opacity-100 transition-opacity">Privacy</a>
                        <a href="/terms" class="hover:opacity-100 transition-opacity">Terms</a>
                        <a href="/support" class="hover:opacity-100 transition-opacity">Support</a>
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