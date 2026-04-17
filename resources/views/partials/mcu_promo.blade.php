<!-- Section: MCU Promo -->
<section id="mcu-promo" class="py-20 relative bg-gradient-to-br from-emerald-50/60 via-white to-emerald-50/40 border-y border-emerald-100/50 overflow-hidden">

    <!-- Decorative Glow -->
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-emerald-100/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-emerald-100/30 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-4 md:px-8 relative z-10">

        <div class="grid lg:grid-cols-2 gap-12 xl:gap-20 items-center">

            <!-- ── Left: Info & CTA ── -->
            <div class="reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-4 uppercase">Layanan Terbaru</p>
                <h2 class="text-3xl md:text-4xl xl:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight mb-5">
                    Medical Check-Up &<br><span class="text-emerald-700">Surat Keterangan</span>
                </h2>
                <p class="text-gray-500 text-base leading-relaxed mb-8 max-w-md">
                    Paket pemeriksaan kesehatan menyeluruh dan penerbitan Surat Keterangan Resmi tersertifikasi oleh tenaga medis profesional.
                </p>

                <!-- Key Services -->
                <div class="space-y-3 mb-10">
                    @foreach([
                        ['label' => 'Surat Bebas Narkoba', 'sub' => 'Untuk keperluan melamar kerja & instansi'],
                        ['label' => 'Surat Berbadan Sehat', 'sub' => 'Standar resmi pemeriksaan fisik'],
                        ['label' => 'Surat Keterangan Psikologi', 'sub' => 'Evaluasi kondisi mental & psikologis'],
                    ] as $s)
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-800">{{ $s['label'] }}</p>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $s['sub'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- CTA -->
                <div class="flex flex-wrap items-center gap-4">
                    <a href="https://wa.me/6285236522263" target="_blank"
                        class="inline-flex items-center gap-2.5 bg-emerald-700 hover:bg-emerald-800 text-white px-6 py-3.5 rounded-xl font-bold text-xs tracking-widest uppercase transition-all hover:-translate-y-0.5 shadow-lg shadow-emerald-700/20 group">
                        <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z"/></svg>
                        Reservasi via WA
                    </a>
                    <p class="text-xs text-gray-400">Ns. Fahrul Rohman, S.Kep<br><span class="font-semibold text-gray-500">0852-3652-2263</span></p>
                </div>
            </div>

            <!-- ── Right: Package Cards (Stacked) ── -->
            <div class="space-y-4 reveal delay-200">

                <!-- Paket MCU 1 -->
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg p-6 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all duration-300 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Paket MCU 1 — Lengkap</h3>
                                <p class="text-xs text-gray-400 mt-0.5">Evaluasi menyeluruh, deteksi dini penyakit kronis</p>
                            </div>
                        </div>
                        <span class="shrink-0 text-[9px] font-bold tracking-widest text-emerald-700 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-full uppercase">Rekomendasi</span>
                    </div>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 mt-4 mb-4 pl-1">
                        @foreach(['Laboratorium & Radiologi', 'USG Abdomen & EKG', 'Pemeriksaan Fisik Lengkap', 'THT, Mata, Gigi, Jiwa'] as $item)
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>
                            <span class="text-xs text-gray-500">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-gray-50">
                        <a href="https://wa.me/6285236522263" class="text-[10px] font-bold tracking-widest text-emerald-700 uppercase inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Reservasi Sekarang <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </a>
                        <span class="text-[10px] text-gray-300 font-medium">Sen – Jum · 08.00–15.00</span>
                    </div>
                </div>

                <!-- Paket MCU 2 -->
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg p-6 transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <div class="flex items-start gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Paket MCU 2 — Dasar</h3>
                            <p class="text-xs text-gray-400 mt-0.5">Skrining vital esensial, prosedur cepat</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 mt-4 mb-4 pl-1">
                        @foreach(['Laboratorium (Darah Rutin)', 'Pemeriksaan Fisik & THT', 'Kesehatan Mata & Gigi', 'Konsultasi Dokter Umum'] as $item)
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>
                            <span class="text-xs text-gray-500">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between pt-3 border-t border-gray-50">
                        <a href="https://wa.me/6285236522263" class="text-[10px] font-bold tracking-widest text-emerald-700 uppercase inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Reservasi Sekarang <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </a>
                        <span class="text-[10px] text-gray-300 font-medium">Sen – Jum · 08.00–15.00</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
