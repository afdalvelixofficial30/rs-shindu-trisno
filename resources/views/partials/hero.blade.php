<!-- Section 2: Hero Section -->
<section id="beranda" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden overflow-x-hidden min-h-[90vh] flex items-center">
    <!-- Background elements -->
    <div class="absolute inset-0 z-0">
        <!-- Main background image (simulated with placeholder/gradient for now) -->
        <div class="absolute inset-0 bg-slate-50"></div>
        <div class="absolute right-0 top-0 w-1/2 h-full opacity-60 rounded-l-full bg-emerald-100 blur-3xl transform translate-x-1/4"></div>
        <div class="absolute -left-10 bottom-0 w-96 h-96 opacity-40 rounded-full bg-emerald-200 blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Content -->
            <div class="max-w-2xl reveal mx-auto lg:mx-0 text-center lg:text-left">
                <!-- Tag -->
                <div class="inline-flex items-center gap-2 bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full font-medium text-sm mb-6 animate-fade-in">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse-green"></span>
                    Rumah Sakit Terpercaya di Palu
                </div>
                
                <!-- Headline -->
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-emerald-800 leading-[1.1] mb-6 font-serif">
                    Kesehatan Anda, <br class="hidden md:block"/>Prioritas Kami
                </h2>
                
                <!-- Body Text -->
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Memberikan pelayanan kesehatan komprehensif, paripurna, dan terpercaya untuk masyarakat Palu dan sekitarnya dengan fasilitas modern serta tenaga medis profesional.
                </p>
                
                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="btn-green text-white px-8 py-3.5 rounded-full font-semibold text-lg flex items-center justify-center gap-2">
                        Daftar Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                    <a href="#layanan" class="btn-outline-green px-8 py-3.5 rounded-full font-semibold text-lg flex items-center justify-center">
                        Lihat Layanan
                    </a>
                </div>

                <!-- Akses Cepat Quick Links -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <p class="text-sm text-gray-500 font-medium mb-4 uppercase tracking-wider">Akses Cepat</p>
                    <div class="flex flex-wrap justify-center lg:justify-start gap-6">
                        <a href="#dokter" class="group flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <span class="font-medium text-gray-700 group-hover:text-emerald-800 transition-colors">Jadwal Dokter</span>
                        </a>
                        <a href="#" class="group flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <span class="font-medium text-gray-700 group-hover:text-emerald-800 transition-colors">Fasilitas RS</span>
                        </a>
                        <a href="#faq" class="group flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-100 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <span class="font-medium text-gray-700 group-hover:text-emerald-800 transition-colors">Pusat Bantuan</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Hero Images Block -->
            <div class="relative reveal delay-200">
                <div class="relative z-10 w-full rounded-2xl overflow-hidden shadow-2xl p-2 bg-white/50 backdrop-blur-md">
                    <!-- Placeholder/Image spot -->
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=800&auto=format&fit=crop" alt="Hospital Front" class="w-full h-[500px] object-cover rounded-xl" />
                </div>
                
                <!-- Floating Info Card -->
                <div class="absolute -bottom-6 -left-6 z-20 bg-white p-5 rounded-2xl shadow-xl border border-emerald-50 max-w-[240px] animate-float">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="bg-emerald-100 p-3 rounded-full text-emerald-600">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Pasien Terlayani</p>
                            <p class="text-xs text-gray-500">Tahun 2023 - 2024</p>
                        </div>
                    </div>
                    <!-- Bottom Statistic Bar Background -->
                    <div class="bg-emerald-50 py-2 px-3 rounded-lg flex items-center justify-between">
                        <span class="font-bold text-emerald-800 text-lg">+<span class="counter-num" data-target="15000">0</span></span>
                        <span class="text-xs font-semibold text-emerald-800">Orang</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
