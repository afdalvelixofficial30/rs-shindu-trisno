<!-- Section: Tata Tertib & Jam Besuk -->
<section id="faq" class="py-20 relative overflow-hidden bg-emerald-50/50 border-y border-emerald-100/30">

    <div class="container mx-auto px-4 md:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Left: Header + Jam Besuk -->
            <div class="lg:col-span-4 reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Informasi Pengunjung</p>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight mb-4">
                    Kenyamanan &amp;<br>
                    <span class="text-emerald-700">Keamanan Pasien</span>
                </h2>
                <p class="text-gray-500 text-sm leading-relaxed mb-8">
                    Standar operasional ketat demi mendukung pemulihan pasien dan ketertiban lingkungan rumah sakit.
                </p>

                <!-- Jam Besuk Card -->
                <div class="bg-emerald-950 rounded-2xl p-6 text-white border border-white/5">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500/20 flex items-center justify-center text-emerald-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <span class="text-xs font-bold tracking-widest text-emerald-400 uppercase">Jam Berkunjung</span>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-4 border-b border-white/10">
                            <span class="text-[10px] font-semibold text-emerald-400/70 uppercase tracking-widest">Sesi Siang</span>
                            <span class="text-lg font-bold tracking-tight">10.00 – 12.00 <span class="text-[10px] text-emerald-500/50 font-normal">WITA</span></span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-semibold text-emerald-400/70 uppercase tracking-widest">Sesi Malam</span>
                            <span class="text-lg font-bold tracking-tight">16.00 – 22.00 <span class="text-[10px] text-emerald-500/50 font-normal">WITA</span></span>
                        </div>
                    </div>

                    <p class="mt-5 text-[9px] text-emerald-400/40 font-semibold tracking-widest uppercase text-center">
                        * Dilarang berkunjung di luar jam tersebut
                    </p>
                </div>
            </div>

            <!-- Right: Accordion Rules -->
            <div class="lg:col-span-8 reveal delay-200">
                <div class="space-y-2" x-data="{ active: 1 }">
                    @foreach([
                        ['t' => 'Aturan Pendamping Pasien',     'c' => 'Pasien selama dalam masa perawatan maksimal didampingi oleh 2 (dua) orang dari keluarga terdekat demi menjaga ketenangan ruangan.'],
                        ['t' => 'Batasan Usia Pengunjung',       'c' => 'Anak-anak di bawah umur 12 tahun dilarang masuk ke area perawatan demi keamanan kesehatan anak tersebut.'],
                        ['t' => 'Kawasan Bebas Rokok',           'c' => 'Dilarang merokok di seluruh area Rumah Sakit Tentara Dr. Sindhu Trisno, baik di dalam gedung maupun di area terbuka.'],
                        ['t' => 'Barang Bawaan & Keamanan',     'c' => 'Dilarang membawa senjata tajam, senjata api, serta barang berharga berlebihan ke dalam area perawatan.'],
                        ['t' => 'Kebersihan & Ketertiban',       'c' => 'Pengunjung wajib menjaga kebersihan lingkungan dengan membuang sampah pada tempatnya dan tidak membuat kegaduhan yang dapat mengganggu pasien lain.'],
                    ] as $idx => $r)
                    <div class="bg-white rounded-2xl border overflow-hidden transition-all duration-300"
                         :class="active === {{ $idx+1 }} ? 'border-emerald-200 shadow-sm' : 'border-gray-100 hover:border-emerald-100'">

                        <button @click="active = (active === {{ $idx+1 }} ? 0 : {{ $idx+1 }})"
                                class="w-full px-5 py-4 flex items-center justify-between gap-4 text-left">
                            <div class="flex items-center gap-4">
                                <span class="text-sm font-black tabular-nums"
                                      :class="active === {{ $idx+1 }} ? 'text-emerald-600' : 'text-gray-200'">
                                    0{{ $idx+1 }}
                                </span>
                                <span class="text-sm font-bold text-gray-800 transition-colors"
                                      :class="active === {{ $idx+1 }} ? 'text-emerald-700' : ''">
                                    {{ $r['t'] }}
                                </span>
                            </div>
                            <div class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-all"
                                 :class="active === {{ $idx+1 }} ? 'bg-emerald-600 text-white rotate-180' : 'bg-gray-50 text-gray-400'">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </button>

                        <div x-show="active === {{ $idx+1 }}" x-collapse>
                            <div class="px-5 pb-4 pl-14 text-sm text-gray-500 leading-relaxed">
                                {{ $r['c'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
