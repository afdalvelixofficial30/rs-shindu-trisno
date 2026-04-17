<!-- Section 2: Hero — Light Modern Military -->
<section id="beranda" class="relative min-h-screen flex items-center pt-24 pb-20 overflow-hidden">

    <!-- Soft Ambient Glows -->
    <div
        class="absolute top-0 right-0 w-[600px] h-[600px] bg-emerald-200/30 rounded-full blur-3xl -translate-y-1/4 translate-x-1/4 z-0 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-100/40 rounded-full blur-3xl translate-y-1/4 -translate-x-1/4 z-0 pointer-events-none">
    </div>

    <div class="container mx-auto px-4 md:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 xl:gap-16 items-center">

            <!-- ───── Left: Text Content ───── -->
            <div class="lg:col-span-6 reveal">
                <!-- Badge -->
                <div
                    class="inline-flex items-center gap-3 bg-white text-emerald-800 text-[10px] font-bold tracking-widest px-5 py-2.5 rounded-full mb-8 border border-emerald-100 shadow-sm">
                    <span
                        class="rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.8)] animate-pulse inline-block"
                        style="width:8px;height:8px;"></span>
                    Akreditasi UTAMA (LAFKI) &amp; Member TTE (BSrE)
                </div>

                <!-- Headline -->
                <h1
                    class="text-4xl md:text-5xl xl:text-7xl font-extrabold leading-[1.05] mb-6 tracking-tight text-gray-900 drop-shadow-sm">
                    Pusat Layanan <br>
                    <span class="text-emerald-700">Kesehatan Militer</span>
                </h1>

                <!-- Sub-text -->
                <p class="text-gray-600 text-lg md:text-xl leading-relaxed mb-10 max-w-lg font-medium">
                    Melayani Prajurit, ASN, Keluarga, dan Masyarakat Umum dengan Motto PASTI (Profesional, Akurat,
                    Selaras, Terarah, Ikhlas).
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4">
                    <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" target="_blank"
                        class="bg-emerald-700 hover:bg-emerald-800 text-white px-8 py-4 rounded-2xl font-bold text-xs tracking-widest inline-flex items-center gap-3 shadow-xl shadow-emerald-700/20 transition-all hover:-translate-y-1 active:scale-95 group border border-emerald-600">
                        <svg class="w-5 h-5 group-hover:-translate-y-1 transition-transform" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                        Daftar Mobile JKN
                    </a>
                    <a href="https://wa.me/6285397616993" target="_blank"
                        class="bg-white border-2 border-emerald-700 text-emerald-800 px-8 py-4 rounded-2xl font-bold text-xs tracking-widest inline-flex items-center gap-3 hover:bg-emerald-50 transition-all hover:-translate-y-1 active:scale-95 shadow-md group">
                        <svg class="w-6 h-6 group-hover:translate-x-1 transition-all" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z" />
                        </svg>
                        WA Pendaftaran
                    </a>
                </div>
            </div>

            <!-- ───── Right: Image + Overlapping Stats Card ───── -->
            <div class="lg:col-span-6 reveal delay-200">

                {{-- Outer wrapper: image + stats overlap --}}
                <div class="relative pb-25">

                    <!-- Hospital Photo — clean, no overlay -->
                    <div
                        class="relative w-full aspect-[4/3] rounded-[2.5rem] overflow-hidden shadow-2xl shadow-emerald-900/15 border-4 border-white group bg-gray-100">
                        <img src="{{ asset('assets/images/footage-rumkit.png') }}" alt="RS Dr. Sindhu Trisno"
                            class="w-full h-full object-cover object-bottom group-hover:scale-105 transition-transform duration-700">
                    </div>

                    <!-- Stats Card — overlapping, emerging from bottom of image -->
                    <div
                        class="absolute bottom-0 left-4 right-4 z-20 bg-emerald-950 rounded-[1.75rem] px-5 py-5 md:px-7 md:py-6 shadow-2xl shadow-emerald-950/50 border border-white/5 overflow-hidden">
                        <!-- Dot Pattern -->
                        <div class="absolute inset-0 opacity-[0.07] pointer-events-none"
                            style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 14px 14px;">
                        </div>
                        <!-- Glow accents -->
                        <div
                            class="absolute -top-10 left-1/4 w-40 h-40 bg-emerald-500/10 rounded-full blur-2xl pointer-events-none">
                        </div>

                        <div class="relative z-10 grid grid-cols-4 divide-x divide-white/10 text-white">
                            <!-- Patients -->
                            <div class="flex flex-col items-center justify-center text-center px-2 md:px-3">
                                <div class="w-8 h-8 rounded-xl bg-emerald-400/15 flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <span class="text-xl md:text-2xl font-black tracking-tight leading-none mb-1">250<span
                                        class="text-emerald-400">K+</span></span>
                                <span class="text-[8px] font-semibold text-white/50 tracking-widest uppercase">Total
                                    Pasien</span>
                            </div>
                            <!-- Doctors -->
                            <div class="flex flex-col items-center justify-center text-center px-2 md:px-3">
                                <div class="w-8 h-8 rounded-xl bg-emerald-400/15 flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </div>
                                <span class="text-xl md:text-2xl font-black tracking-tight leading-none mb-1">{{ \App\Models\Doctor::where('is_active', true)->count() }}<span
                                        class="text-emerald-400">+</span></span>
                                <span class="text-[8px] font-semibold text-white/50 tracking-widest uppercase">Tim
                                    Dokter</span>
                            </div>
                            <!-- Poliklinik -->
                            <div class="flex flex-col items-center justify-center text-center px-2 md:px-3">
                                <div class="w-8 h-8 rounded-xl bg-emerald-400/15 flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <span class="text-xl md:text-2xl font-black tracking-tight leading-none mb-1">{{ \App\Models\Poliklinik::count() }}</span>
                                <span
                                    class="text-[8px] font-semibold text-white/50 tracking-widest uppercase">Poliklinik</span>
                            </div>
                            <!-- Beds -->
                            <div class="flex flex-col items-center justify-center text-center px-2 md:px-3">
                                <div class="w-8 h-8 rounded-xl bg-emerald-400/15 flex items-center justify-center mb-2">
                                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 4v16"></path>
                                        <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                                        <path d="M2 17h20"></path>
                                        <path d="M6 8v9"></path>
                                    </svg>
                                </div>
                                <span class="text-xl md:text-2xl font-black tracking-tight leading-none mb-1">116</span>
                                <span class="text-[8px] font-semibold text-white/50 tracking-widest uppercase">Kapasitas
                                    Bed</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>