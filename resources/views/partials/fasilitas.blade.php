<!-- Section 4: Layanan Unggulan & Fasilitas -->
<section id="layanan" class="py-24 relative z-10 w-full overflow-hidden bg-transparent">

    <div class="container mx-auto px-4 md:px-8 relative z-10">

        <!-- Section Header -->
        <div class="mb-14 reveal">
            <div class="max-w-2xl">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Kapasitas & Layanan
                </p>
                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">Layanan Medis
                    <br /><span class="text-emerald-700">Utama & Penunjang</span></h2>
            </div>
        </div>

        <!-- Services Grid — Minimalist & Uniform -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 reveal">

            @php
                $facilities = [
                    [
                        'title' => 'IGD 24 Jam',
                        'desc' => 'Tim medis siaga penuh nonstop 24 jam untuk penanganan darurat cepat dan tepat.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                        'link' => route('layanan-24-jam'),
                        'btn' => 'Lihat Fasilitas',
                        'tag' => '24 Jam',
                    ],
                    [
                        'title' => 'Persalinan',
                        'desc' => 'Fasilitas kamar bersalin (VK) lengkap didukung bidan dan dokter spesialis kandungan.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                        'link' => route('layanan-24-jam'),
                        'btn' => 'Info Lengkap',
                    ],
                    [
                        'title' => 'Apotek',
                        'desc' => 'Penyediaan obat-obatan resep dokter melayani BPJS & Umum nonstop 24 jam.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>',
                        'link' => route('penunjang'),
                        'btn' => 'Lihat Layanan',
                    ],
                    [
                        'title' => 'Radiologi',
                        'desc' => 'Pemeriksaan USG, Rontgen (X-Ray), dan cito darurat untuk diagnosa medis akurat.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>',
                        'link' => route('penunjang'),
                        'btn' => 'Cek Fasilitas',
                    ],
                    [
                        'title' => 'Laboratorium',
                        'desc' => 'Pemeriksaan darah rutin, patologi klinik, dan uji spesimen medis akurasi tinggi.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
                        'link' => route('penunjang'),
                        'btn' => 'Lihat Prosedur',
                    ],
                    [
                        'title' => 'Rawat Inap',
                        'desc' => '116 Bed tersedia dari Kelas 3 hingga VVIP yang nyaman dan representatif.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
                        'link' => route('rawat-inap'),
                        'btn' => 'Info Kamar',
                    ],
                    [
                        'title' => 'Rawat Jalan',
                        'desc' => 'Poliklinik Spesialis lengkap melayani BPJS & Umum setiap hari kerja.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
                        'link' => route('jadwal-poliklinik'),
                        'btn' => 'Jadwal Dokter',
                    ],
                ];
            @endphp

            @foreach($facilities as $f)
                <div class="reveal group">
                    <a href="{{ $f['link'] }}"
                        class="flex flex-col h-full bg-white/80 backdrop-blur-xl rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md hover:border-emerald-100 hover:-translate-y-1 transition-all duration-300">

                        <!-- Icon + Tag Row -->
                        <div class="flex items-start justify-between mb-5">
                            <div
                                class="w-11 h-11 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-700 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    {!! $f['icon'] !!}
                                </svg>
                            </div>
                            @if(isset($f['tag']))
                                <span
                                    class="text-[9px] font-bold tracking-widest text-emerald-600 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-full uppercase">{{ $f['tag'] }}</span>
                            @endif
                        </div>

                        <!-- Title -->
                        <h3 class="text-base font-bold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">
                            {{ $f['title'] }}</h3>

                        <!-- Description -->
                        <p class="text-gray-500 text-sm leading-relaxed flex-grow">{{ $f['desc'] }}</p>

                        <!-- Link -->
                        <div
                            class="mt-5 flex items-center gap-1.5 text-[10px] font-bold tracking-widest text-emerald-700 uppercase group-hover:gap-3 transition-all">
                            {{ $f['btn'] }}
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7" />
                            </svg>
                        </div>

                    </a>
                </div>
            @endforeach

        </div>

    </div>
</section>