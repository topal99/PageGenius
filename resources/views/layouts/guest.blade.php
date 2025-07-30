<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PageGenius - Autentikasi Modern' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Konfigurasi Tailwind dan Style dari file Anda --}}
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: { 'float': 'float 6s ease-in-out infinite', 'glow': 'glow 2s ease-in-out infinite alternate', 'slide-in': 'slideIn 0.5s ease-out', 'fade-in': 'fadeIn 0.6s ease-out' },
                    keyframes: {
                        float: { '0%, 100%': { transform: 'translateY(0px)' }, '50%': { transform: 'translateY(-20px)' } },
                        glow: { '0%': { boxShadow: '0 0 20px rgba(147, 51, 234, 0.5)' }, '100%': { boxShadow: '0 0 30px rgba(147, 51, 234, 0.8)' } },
                        slideIn: { '0%': { transform: 'translateX(100%)', opacity: '0' }, '100%': { transform: 'translateX(0)', opacity: '1' } },
                        fadeIn: { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg { background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c); background-size: 400% 400%; animation: gradientShift 15s ease infinite; }
        @keyframes gradientShift { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        .glass-effect { background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .input-glow:focus { box-shadow: 0 0 0 3px rgba(147, 51, 234, 0.1), 0 0 20px rgba(147, 51, 234, 0.3); }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-40 left-40 w-80 h-80 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative w-full max-w-4xl mx-auto">
        <div class="glass-effect rounded-3xl shadow-2xl overflow-hidden">
            <div class="flex flex-col lg:flex-row min-h-[500px]">
                
                <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-purple-600 via-purple-700 to-indigo-800 p-8 lg:p-12 flex-col justify-center items-center text-white relative overflow-hidden">                    
                    <div class="absolute inset-0 bg-black opacity-20"></div>
                    <div class="relative z-10 text-center">
                        <div class="mb-8">
                             <div class="w-20 h-20 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4 animate-glow">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h1 class="text-4xl lg:text-5xl font-bold mb-4 animate-fade-in">Selamat Datang!</h1>
                            <p class="text-lg lg:text-xl opacity-90 animate-fade-in" style="animation-delay: 0.2s;">Bergabunglah dengan platform modern kami dan nikmati pengalaman terbaik</p>
                        </div>
                    </div>
                </div>

                {{ $slot }}

            </div>
        </div>
    </div>
</body>
</html>