<!-- Section: Trust Badges -->
<section id="trust-badges" class="py-10 bg-gradient-to-b from-emerald-50/60 via-white to-emerald-50/40 border-b border-emerald-100/50">
    <div class="container mx-auto px-4 md:px-8">
        <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 lg:gap-24 mb-10">
            @foreach([
                ['img' => 'palaka.png', 'title' => 'Kodam XXIII Palaka Wira'],
                ['img' => 'puskesad.png', 'title' => 'Puskesad'],
                ['img' => 'lafki.png', 'title' => 'Akreditasi Utama (LAFKI)'],
                ['img' => 'BSRE.png', 'title' => 'Tersertifikasi BSrE']
            ] as $badge)
                <div class="group flex flex-col items-center gap-3 reveal">
                    <div class="h-12 md:h-16 w-auto overflow-hidden">
                        <img src="{{ asset('assets/images/' . $badge['img']) }}" 
                             alt="{{ $badge['title'] }}" 
                             title="{{ $badge['title'] }}"
                             class="h-full w-auto object-contain group-hover:scale-110 transition-all duration-500">
                    </div>
                    <span class="text-[10px] font-bold text-gray-400 group-hover:text-emerald-700 transition-colors  tracking-widest">{{ $badge['title'] }}</span>
                </div>
            @endforeach
        </div>

        <!-- Payment/Insurance Accepted -->
        <div class="mt-8 md:mt-12 text-center reveal">
            <p class="text-[11px] font-bold tracking-[0.3em] text-gray-400 mb-4 uppercase">Melayani Pasien</p>
            <div class="inline-flex flex-wrap justify-center items-center gap-6 sm:gap-8 px-6 sm:px-10 py-5 bg-white rounded-2xl md:rounded-full border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)]">
                
                <!-- BPJS Kesehatan -->
                <div class="flex items-center justify-center group cursor-default">
                    <img src="{{ asset('assets/images/bpjs-kesehatan.png') }}" 
                         alt="BPJS Kesehatan" 
                         title="BPJS Kesehatan"
                         class="h-8 sm:h-9 w-auto object-contain group-hover:scale-105 transition-all duration-300">
                </div>
                
                <div class="w-px h-8 bg-gray-200 hidden sm:block"></div>

                <!-- BPJS Ketenagakerjaan -->
                <div class="flex items-center justify-center group cursor-default">
                    <img src="{{ asset('assets/images/bpjs-ketenagakerjaan.png') }}" 
                         alt="BPJS Ketenagakerjaan" 
                         title="BPJS Ketenagakerjaan"
                         class="h-8 sm:h-9 w-auto object-contain group-hover:scale-105 transition-all duration-300">
                </div>
                
                <div class="w-px h-8 bg-gray-200 hidden sm:block"></div>

                <!-- Jasa Raharja -->
                <div class="flex items-center justify-center group cursor-default">
                    <img src="{{ asset('assets/images/jasa-raharja-logo.png') }}" 
                         alt="Jasa Raharja" 
                         title="Jasa Raharja"
                         class="h-8 sm:h-9 w-auto object-contain group-hover:scale-105 transition-all duration-300">
                </div>

                <div class="w-px h-8 bg-gray-200 hidden sm:block"></div>

                <!-- Pasien Umum -->
                <div class="flex items-center justify-center gap-2 group cursor-default transition-all duration-300 group-hover:scale-105">
                    <!-- Icon shape matching logo proportions -->
                    <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center shadow-sm">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-[14px] sm:text-[16px] font-extrabold text-gray-700 leading-none tracking-wide">UMUM</span>
                        <span class="text-[8px] sm:text-[9px] font-medium text-gray-500 uppercase tracking-widest mt-0.5">Pasien Mandiri</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
