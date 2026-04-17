{{-- ══════════════════════════════════════════════════════
     TOPBAR — Informasi Cepat & Akses Eksternal
══════════════════════════════════════════════════════ --}}
<div class="bg-emerald-950 text-white py-2 text-[10px] font-semibold tracking-[0.15em] relative z-[60] border-b border-white/5">
    <div class="container mx-auto px-4 md:px-8 flex flex-col sm:flex-row justify-between items-center gap-1.5">
        <div class="flex items-center gap-2 text-emerald-400/80">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
            <span class="hidden sm:inline">RS Umum Tipe C · Akreditasi UTAMA (LAFKI) · BSrE Tersertifikasi</span>
            <span class="sm:hidden">RS Tkt. III Dr. Sindhu Trisno</span>
        </div>
        <div class="flex items-center gap-4 md:gap-5">
            <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" target="_blank"
               class="flex items-center gap-1.5 text-emerald-300/70 hover:text-emerald-200 transition-colors">
                <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                Mobile JKN
            </a>
            <span class="w-px h-3 bg-white/10"></span>
            <a href="https://wa.me/6285367919663" target="_blank"
               class="flex items-center gap-1.5 text-emerald-300/70 hover:text-emerald-200 transition-colors">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z"/></svg>
                WA Pendaftaran
            </a>
            <span class="w-px h-3 bg-white/10"></span>
            <a href="https://sipandurumkit.com/" target="_blank"
               class="text-emerald-300/70 hover:text-emerald-200 transition-colors border border-emerald-500/20 px-2 py-0.5 rounded hover:border-emerald-400/40">
                Sipandurumkit
            </a>
        </div>
    </div>
</div>

{{-- ══════════════════════════════════════════════════════
     MAIN HEADER — Enterprise Navigation
══════════════════════════════════════════════════════ --}}
<header id="main-nav"
    class="sticky top-0 w-full z-[100] bg-white/95 backdrop-blur-xl border-b border-gray-100 shadow-sm py-0 transition-all duration-300"
    x-data="{
        mobileMenu: false,
        mobileAbout: false,
        mobileLayanan: false,
        mobileInfo: false,
        mobileBerita: false,
    }">

    <div class="container mx-auto px-4 md:px-8">
        <div class="flex items-center justify-between h-[60px] md:h-[64px]">

            {{-- ── LEFT: Logo & Brand ── --}}
            <a href="{{ url('/') }}" class="flex items-center gap-3 shrink-0 group">
                <div class="w-10 h-10 rounded-full bg-emerald-50 border border-emerald-200 flex items-center justify-center shadow-sm overflow-hidden p-1 group-hover:border-emerald-400 transition-all">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo RS Dr. Sindhu Trisno" class="w-full h-full object-contain">
                </div>
                <div class="hidden sm:block">
                    <p class="text-sm font-extrabold text-gray-900 leading-tight tracking-tight group-hover:text-emerald-700 transition-colors">RS Dr. Sindhu Trisno</p>
                    <p class="text-[9px] font-semibold text-emerald-600 tracking-[0.2em] leading-none mt-0.5">Palu, Sulawesi Tengah</p>
                </div>
            </a>

            {{-- ── CENTER: Desktop Navigation ── --}}
            <nav class="hidden lg:flex items-center gap-0.5 xl:gap-1">

                {{-- Beranda --}}
                <a href="{{ url('/') }}"
                   class="px-3 py-2 text-[11px] font-semibold text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all duration-200 tracking-wide {{ request()->is('/') ? 'text-emerald-700 bg-emerald-50' : '' }}">
                    Beranda
                </a>

                {{-- Tentang Kami --}}
                <a href="{{ route('profil') }}"
                   class="px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide
                   {{ request()->routeIs('profil','tentang*','organisasi*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}">
                    Tentang Kami
                </a>

                {{-- Layanan Dropdown --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                    <button class="flex items-center gap-1 px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide outline-none
                        {{ request()->routeIs('fasilitas','rawat-inap','mcu*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}"
                        :class="open ? 'text-emerald-700 bg-emerald-50' : ''">
                        Layanan
                        <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 pt-2 w-[280px]"
                         style="display:none;">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden py-1.5">
                            @foreach([
                                ['href'=>route('layanan-24-jam'),        'icon'=>'M13 10V3L4 14h7v7l9-11h-7z',                                          'label'=>'Layanan 24 Jam',         'sub'=>'IGD, Apotek & Persalinan'],

                                ['href'=>route('rawat-inap'),          'icon'=>'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'label'=>'Rawat Inap',              'sub'=>'116 Bed, Kelas 3 – VVIP'],
                                ['href'=>route('mcu'),                 'icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'label'=>'Medical Check-Up',       'sub'=>'Paket MCU Lengkap & Dasar'],
                                ['href'=>route('penunjang'),           'icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'label'=>'Penunjang Medis',         'sub'=>'Lab, Radiologi, Apotek'],
                            ] as $item)
                            <a href="{{ $item['href'] }}" class="flex items-start gap-3 px-4 py-2.5 hover:bg-emerald-50 group/item transition-colors">
                                <div class="w-7 h-7 rounded-lg bg-gray-50 group-hover/item:bg-emerald-100 flex items-center justify-center shrink-0 transition-colors mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-gray-400 group-hover/item:text-emerald-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-gray-800 group-hover/item:text-emerald-700 transition-colors">{{ $item['label'] }}</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">{{ $item['sub'] }}</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Informasi Pasien Dropdown --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                    <button class="flex items-center gap-1 px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide outline-none
                        {{ request()->routeIs('tata-tertib','alur*','jaminan*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}"
                        :class="open ? 'text-emerald-700 bg-emerald-50' : ''">
                        Informasi Pasien
                        <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 pt-2 w-[280px]"
                         style="display:none;">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden py-1.5">
                            @foreach([
                                ['href'=>route('alur-pendaftaran'),  'icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01', 'label'=>'Alur Pendaftaran',        'sub'=>'Langkah daftar BPJS & Umum'],
                                ['href'=>route('jaminan-layanan'),   'icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',                                                    'label'=>'Jaminan Layanan',          'sub'=>'BPJS, Jasa Raharja & Umum'],
                                ['href'=>route('tata-tertib'),       'icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',                                                     'label'=>'Tata Tertib & Jam Besuk',  'sub'=>'Aturan kunjungan pasien'],
                            ] as $item)
                            <a href="{{ $item['href'] }}" class="flex items-start gap-3 px-4 py-2.5 hover:bg-emerald-50 group/item transition-colors">
                                <div class="w-7 h-7 rounded-lg bg-gray-50 group-hover/item:bg-emerald-100 flex items-center justify-center shrink-0 transition-colors mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-gray-400 group-hover/item:text-emerald-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-gray-800 group-hover/item:text-emerald-700 transition-colors">{{ $item['label'] }}</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">{{ $item['sub'] }}</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Tim Dokter --}}
                <a href="{{ route('dokter') }}"
                   class="px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide
                   {{ request()->routeIs('dokter') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}">
                    Tim Dokter
                </a>

                {{-- Jadwal Poliklinik --}}
                <a href="{{ route('jadwal-poliklinik') }}"
                   class="px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide
                   {{ request()->routeIs('jadwal-poliklinik') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}">
                    Jadwal Poli
                </a>

                {{-- Berita & Edukasi Dropdown --}}
                <div class="relative" x-data="{ open: false }" @mouseenter="open=true" @mouseleave="open=false">
                    <button class="flex items-center gap-1 px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide outline-none
                        {{ request()->routeIs('berita*') ? 'text-emerald-700 bg-emerald-50' : 'text-gray-600 hover:text-emerald-700 hover:bg-emerald-50' }}"
                        :class="open ? 'text-emerald-700 bg-emerald-50' : ''">
                        Berita
                        <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-100"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-1"
                         class="absolute top-full left-0 pt-2 w-[260px]"
                         style="display:none;">
                        <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden py-1.5">
                            @foreach([
                                ['href'=>route('pengumuman'),   'icon'=>'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z', 'label'=>'Pengumuman Resmi',    'sub'=>'Info terkini dari manajemen RS'],
                                ['href'=>route('artikel'),      'icon'=>'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'label'=>'Artikel Kesehatan',    'sub'=>'Edukasi medis & tips sehat'],
                                ['href'=>route('galeri'),       'icon'=>'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'label'=>'Galeri Kegiatan',      'sub'=>'Dokumentasi kegiatan RS'],
                            ] as $item)
                            <a href="{{ $item['href'] }}" class="flex items-start gap-3 px-4 py-2.5 hover:bg-emerald-50 group/item transition-colors">
                                <div class="w-7 h-7 rounded-lg bg-gray-50 group-hover/item:bg-emerald-100 flex items-center justify-center shrink-0 transition-colors mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-gray-400 group-hover/item:text-emerald-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/></svg>
                                </div>
                                <div>
                                    <p class="text-[11px] font-bold text-gray-800 group-hover/item:text-emerald-700 transition-colors">{{ $item['label'] }}</p>
                                    <p class="text-[10px] text-gray-400 mt-0.5">{{ $item['sub'] }}</p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Pengaduan --}}
                <a href="https://sipandurumkit.com/" target="_blank"
                   class="flex items-center gap-1.5 px-3 py-2 text-[11px] font-semibold rounded-lg transition-all duration-200 tracking-wide outline-none text-gray-600 hover:text-amber-700 hover:bg-amber-50 group">
                    <svg class="w-3.5 h-3.5 text-amber-500 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    Pengaduan
                </a>

            </nav>

            {{-- ── RIGHT: IGD Button + Mobile Toggle ── --}}
            <div class="flex items-center gap-2.5">

                {{-- IGD Emergency CTA — Always Visible, Auto-Shimmer --}}
                <a href="https://wa.me/6281213756763" target="_blank"
                   class="shimmer-auto flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white text-[10px] font-extrabold tracking-widest px-4 py-2.5 rounded-xl shadow-lg shadow-red-600/25 transition-all hover:scale-105 active:scale-95">
                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="hidden sm:inline">IGD 24 JAM</span>
                    <span class="sm:hidden">IGD</span>
                </a>

                {{-- Hamburger — Mobile Only --}}
                <button @click="mobileMenu = !mobileMenu"
                        class="lg:hidden w-9 h-9 flex flex-col items-center justify-center gap-1.5 rounded-lg border border-gray-200 hover:border-emerald-300 hover:bg-emerald-50 transition-all"
                        aria-label="Toggle Menu">
                    <span class="w-5 h-0.5 bg-gray-700 rounded-full transition-all duration-300" :class="mobileMenu ? 'rotate-45 translate-y-2' : ''"></span>
                    <span class="w-5 h-0.5 bg-gray-700 rounded-full transition-all duration-300" :class="mobileMenu ? 'opacity-0' : ''"></span>
                    <span class="w-5 h-0.5 bg-gray-700 rounded-full transition-all duration-300" :class="mobileMenu ? '-rotate-45 -translate-y-2' : ''"></span>
                </button>

            </div>
        </div>
    </div>

    {{-- ══════════════════════════════════════════════════════
         MOBILE MENU — Accordion Slide Down
    ══════════════════════════════════════════════════════ --}}
    <div x-show="mobileMenu"
         x-transition:enter="transition ease-out duration-250"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden border-t border-gray-100 bg-white shadow-xl"
         style="display:none;">

        <div class="container mx-auto px-4 md:px-8 py-4 flex flex-col gap-1">

            {{-- Beranda --}}
            <a href="{{ url('/') }}" @click="mobileMenu=false"
               class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                Beranda
            </a>

            {{-- Tentang Kami --}}
            <a href="{{ route('profil') }}" @click="mobileMenu=false"
               class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                Tentang Kami
            </a>

            {{-- Layanan --}}
            <div>
                <button @click="mobileLayanan = !mobileLayanan"
                        class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                    Layanan
                    <svg class="w-4 h-4 transition-transform" :class="mobileLayanan ? 'rotate-180 text-emerald-600' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="mobileLayanan" x-collapse class="pl-4 space-y-0.5 pb-1">
                    <a href="{{ route('layanan-24-jam') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Layanan 24 Jam</a>
                    <a href="{{ route('jadwal-poliklinik') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Poliklinik / Rawat Jalan</a>
                    <a href="{{ route('rawat-inap') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Rawat Inap</a>
                    <a href="{{ route('mcu') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Medical Check-Up</a>
                    <a href="{{ route('penunjang') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Penunjang Medis</a>
                </div>
            </div>

            {{-- Informasi Pasien --}}
            <div>
                <button @click="mobileInfo = !mobileInfo"
                        class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                    Informasi Pasien
                    <svg class="w-4 h-4 transition-transform" :class="mobileInfo ? 'rotate-180 text-emerald-600' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="mobileInfo" x-collapse class="pl-4 space-y-0.5 pb-1">
                    <a href="{{ route('alur-pendaftaran') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Alur Pendaftaran</a>
                    <a href="{{ route('jaminan-layanan') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Jaminan Layanan</a>
                    <a href="{{ route('tata-tertib') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Tata Tertib & Jam Besuk</a>
                </div>
            </div>

            {{-- Tim Dokter --}}
            <a href="{{ route('dokter') }}" @click="mobileMenu=false"
               class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                Tim Dokter
            </a>

            {{-- Jadwal Poliklinik --}}
            <a href="{{ route('jadwal-poliklinik') }}" @click="mobileMenu=false"
               class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                Jadwal Poliklinik
            </a>

            {{-- Berita --}}
            <div>
                <button @click="mobileBerita = !mobileBerita"
                        class="w-full flex items-center justify-between px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all">
                    Berita & Edukasi
                    <svg class="w-4 h-4 transition-transform" :class="mobileBerita ? 'rotate-180 text-emerald-600' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="mobileBerita" x-collapse class="pl-4 space-y-0.5 pb-1">
                    <a href="{{ route('pengumuman') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Pengumuman Resmi</a>
                    <a href="{{ route('artikel') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Artikel Kesehatan</a>
                    <a href="{{ route('galeri') }}" @click="mobileMenu=false" class="block px-4 py-2.5 text-xs font-medium text-gray-600 hover:text-emerald-700 hover:bg-emerald-50 rounded-lg transition-all">Galeri Kegiatan</a>
                </div>
            </div>

            {{-- Pengaduan --}}
            <a href="https://sipandurumkit.com/" target="_blank" @click="mobileMenu=false"
               class="flex items-center px-4 py-3 text-sm font-semibold text-gray-700 hover:text-emerald-700 hover:bg-emerald-50 rounded-xl transition-all border border-gray-100">
                Pengaduan (Sipandurumkit)
            </a>

            {{-- IGD CTA repeat in mobile for convenience --}}
            <a href="https://wa.me/6281213756763" target="_blank"
               class="shimmer-auto mt-2 flex items-center justify-center gap-2 bg-red-600 text-white font-extrabold text-xs tracking-widest py-4 rounded-xl shadow-lg shadow-red-500/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                IGD 24 JAM · 0812-1375-6763
            </a>

        </div>
    </div>

</header>
