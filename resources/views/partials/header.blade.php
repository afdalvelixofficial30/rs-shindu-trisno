<!-- Section 1: Sticky Header & Nav -->
<header id="main-nav" class="fixed top-0 w-full z-50 transition-all duration-300 bg-white shadow-sm py-4">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3">
                <div class="bg-emerald-800 text-white p-2 rounded-lg">
                    <!-- Red Cross / Hospital Logo SVG -->
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14h-2v-4H6v-2h4V7h2v4h4v2h-4v4z"/></svg>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900 leading-tight font-serif">RS Dr. Sindhu Trisno</h1>
                    <p class="text-xs text-emerald-800 font-medium tracking-wider">MELAYANI DENGAN HATI</p>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="#beranda" class="nav-link text-gray-600 hover:text-emerald-800 font-medium transition-colors">Beranda</a>
                <a href="#tentang" class="nav-link text-gray-600 hover:text-emerald-800 font-medium transition-colors">Tentang Kami</a>
                <a href="#layanan" class="nav-link text-gray-600 hover:text-emerald-800 font-medium transition-colors">Layanan & Fasilitas</a>
                <a href="#dokter" class="nav-link text-gray-600 hover:text-emerald-800 font-medium transition-colors">Jadwal Dokter</a>
                
                <a href="tel:0451421XXX" class="bg-red-700 hover:bg-red-800 text-white px-6 py-2.5 rounded-full font-semibold transition-colors shadow-lg shadow-red-700/30 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    UGD 24 Jam
                </a>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" class="md:hidden text-gray-600 hover:text-emerald-800 focus:outline-none p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="mobile-menu" class="mobile-menu md:hidden bg-white border-t mt-4 border-gray-100 px-4 shadow-inner">
        <div class="flex flex-col py-4 gap-4">
            <a href="#beranda" class="text-gray-600 font-medium py-2">Beranda</a>
            <a href="#tentang" class="text-gray-600 font-medium py-2">Tentang Kami</a>
            <a href="#layanan" class="text-gray-600 font-medium py-2">Layanan & Fasilitas</a>
            <a href="#dokter" class="text-gray-600 font-medium py-2">Jadwal Dokter</a>
            <a href="tel:0451421XXX" class="bg-red-700 text-white text-center py-3 rounded-xl font-bold mt-2">
                UGD 24 Jam
            </a>
        </div>
    </div>
</header>
