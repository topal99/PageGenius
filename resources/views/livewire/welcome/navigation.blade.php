<nav class="relative z-50 px-4 sm:px-6 py-4">
    @auth
    <div class="max-w-7xl mx-auto">
        <div class="glass-effect rounded-2xl px-4 sm:px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl flex items-center justify-center animate-glow">
                        <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-xl sm:text-2xl font-bold text-white">PageGenius</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#features" class="text-white hover:text-purple-200 transition-colors duration-300">Fitur</a>
                    <a href="#templates" class="text-white hover:text-purple-200 transition-colors duration-300">Template</a>
                    <a href="#pricing" class="text-white hover:text-purple-200 transition-colors duration-300">Harga</a>
                    <a href="#contact" class="text-white hover:text-purple-200 transition-colors duration-300">Kontak</a>
                </div>
                
                <!-- Desktop Auth Buttons -->
                <div class="hidden sm:flex items-center space-x-4">
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-purple-200 transition-colors duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white hover:text-purple-200 transition-colors duration-300">
                            Keluar
                        </button>
                    </form>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="flex items-center space-x-2 sm:hidden">
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-purple-200 transition-colors duration-300 text-sm">
                        Dashboard
                    </a>
                    <button id="mobile-menu-button" class="text-white hover:text-purple-200 transition-colors duration-300 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="close-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Large Screen Mobile Menu Button (for medium screens) -->
                <div class="hidden sm:flex lg:hidden items-center space-x-4">
                    <button id="tablet-menu-button" class="text-white hover:text-purple-200 transition-colors duration-300 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="tablet-menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="tablet-close-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="sm:hidden mt-4 pt-4 border-t border-white/20 hidden">
                <div class="flex flex-col space-y-3">
                    <a href="#features" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Fitur</a>
                    <a href="#templates" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Template</a>
                    <a href="#pricing" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Harga</a>
                    <a href="#contact" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Kontak</a>
                    <form method="POST" action="{{ route('logout') }}" class="pt-2 border-t border-white/20">
                        @csrf
                        <button type="submit" class="text-white hover:text-purple-200 transition-colors duration-300 py-2 text-left w-full">
                            Keluar
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Tablet Menu -->
            <div id="tablet-menu" class="hidden sm:block lg:hidden mt-4 pt-4 border-t border-white/20" style="display: none;">
                <div class="flex flex-col space-y-3">
                    <a href="#features" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Fitur</a>
                    <a href="#templates" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Template</a>
                    <a href="#pricing" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Harga</a>
                    <a href="#contact" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Kontak</a>
                </div>
            </div>
        </div>
    </div>
    
    @else
    
    <div class="max-w-7xl mx-auto">
        <div class="glass-effect rounded-2xl px-4 sm:px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl flex items-center justify-center animate-glow">
                        <svg class="w-4 h-4 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-xl sm:text-2xl font-bold text-white">PageGenius</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#features" class="text-white hover:text-purple-200 transition-colors duration-300">Fitur</a>
                    <a href="#templates" class="text-white hover:text-purple-200 transition-colors duration-300">Template</a>
                    <a href="#pricing" class="text-white hover:text-purple-200 transition-colors duration-300">Harga</a>
                    <a href="#contact" class="text-white hover:text-purple-200 transition-colors duration-300">Kontak</a>
                </div>
                
                <!-- Desktop Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-white hover:text-purple-200 transition-colors duration-300">
                        Masuk
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-white text-purple-600 px-4 sm:px-6 py-2 rounded-xl font-semibold hover:bg-purple-50 transition-all duration-300 hover:scale-105 text-sm sm:text-base">
                        Daftar Sekarang
                    </a>
                    @endif
                </div>
                                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden ml-4">
                    <button id="guest-mobile-menu-button" class="text-white hover:text-purple-200 transition-colors duration-300 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="guest-menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="guest-close-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                        </svg>
                    </button>
                </div>
            </div>
        
            <!-- Mobile Menu for Guests -->
             <div id="guest-mobile-menu" class="lg:hidden mt-4 pt-4 border-t border-white/20 hidden">
                <div class="flex flex-col space-y-3">
                    <a href="#features" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Fitur</a>
                    <a href="#templates" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Template</a>
                    <a href="#pricing" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Harga</a>
                    <a href="#contact" class="text-white hover:text-purple-200 transition-colors duration-300 py-2">Kontak</a>
                    
                    <!-- Auth links in mobile menu -->
                    <div class="pt-3 border-t border-white/20 flex flex-col items-center space-y-3">
                        <a href="{{ route('login') }}" class="block text-purple-600 rounded-lg w-1/2 text-center bg-white hover:bg-purple-50 transition-colors duration-300 py-2">
                            Masuk
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block bg-white w-1/2 text-purple-600 px-4 py-3 rounded-lg font-semibold hover:bg-purple-50 transition-all duration-300 text-center w-full">
                            Daftar Sekarang
                        </a>
                        @endif
                    </div>
                </div>
        </div>
    </div>
    
    @endauth
</nav>

<script>
// Mobile menu functionality for authenticated users
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.style.display = 'block';
                menuIcon.style.display = 'none';
                closeIcon.style.display = 'block';
            } else {
                mobileMenu.classList.add('hidden');
                mobileMenu.style.display = 'none';
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        });
    }
    
    // Tablet menu toggle
    const tabletMenuButton = document.getElementById('tablet-menu-button');
    const tabletMenu = document.getElementById('tablet-menu');
    const tabletMenuIcon = document.getElementById('tablet-menu-icon');
    const tabletCloseIcon = document.getElementById('tablet-close-icon');
    
    if (tabletMenuButton && tabletMenu) {
        tabletMenuButton.addEventListener('click', function() {
            const isHidden = tabletMenu.style.display === 'none' || tabletMenu.style.display === '';
            
            if (isHidden) {
                tabletMenu.style.display = 'block';
                tabletMenuIcon.style.display = 'none';
                tabletCloseIcon.style.display = 'block';
            } else {
                tabletMenu.style.display = 'none';
                tabletMenuIcon.style.display = 'block';
                tabletCloseIcon.style.display = 'none';
            }
        });
    }
    
    // Guest mobile menu toggle
    const guestMobileMenuButton = document.getElementById('guest-mobile-menu-button');
    const guestMobileMenu = document.getElementById('guest-mobile-menu');
    const guestMenuIcon = document.getElementById('guest-menu-icon');
    const guestCloseIcon = document.getElementById('guest-close-icon');
    
    if (guestMobileMenuButton && guestMobileMenu) {
        guestMobileMenuButton.addEventListener('click', function() {
            const isHidden = guestMobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                guestMobileMenu.classList.remove('hidden');
                guestMobileMenu.style.display = 'block';
                guestMenuIcon.style.display = 'none';
                guestCloseIcon.style.display = 'block';
            } else {
                guestMobileMenu.classList.add('hidden');
                guestMobileMenu.style.display = 'none';
                guestMenuIcon.style.display = 'block';
                guestCloseIcon.style.display = 'none';
            }
        });
    }
    
    // Close mobile menus when clicking on links
    const mobileLinks = document.querySelectorAll('#mobile-menu a, #tablet-menu a, #guest-mobile-menu a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Close all mobile menus
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
                mobileMenu.style.display = 'none';
                if (menuIcon && closeIcon) {
                    menuIcon.style.display = 'block';
                    closeIcon.style.display = 'none';
                }
            }
            
            if (tabletMenu) {
                tabletMenu.style.display = 'none';
                if (tabletMenuIcon && tabletCloseIcon) {
                    tabletMenuIcon.style.display = 'block';
                    tabletCloseIcon.style.display = 'none';
                }
            }
            
            if (guestMobileMenu) {
                guestMobileMenu.classList.add('hidden');
                guestMobileMenu.style.display = 'none';
                if (guestMenuIcon && guestCloseIcon) {
                    guestMenuIcon.style.display = 'block';
                    guestCloseIcon.style.display = 'none';
                }
            }
        });
    });
});
</script>