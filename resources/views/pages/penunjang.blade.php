@extends('layouts.app')
@section('title', 'Layanan Penunjang Medis - RS Tkt. III Dr. Sindhu Trisno')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-emerald-700/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="opacity-80">Layanan</span>
                    <span>/</span><span class="text-emerald-300">Penunjang Medis</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Fasilitas Penunjang</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Layanan <span class="text-emerald-400">Penunjang Medis</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Fasilitas diagnostik dan penunjang klinis berteknologi modern untuk memastikan akurasi diagnosa dan kecepatan penanganan medis.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">

            @php
            $services = [
                [
                    'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                    'title' => 'Laboratorium Klinik',
                    'sub'   => 'Patologi & Analisis Spesimen',
                    'desc'  => 'Unit laboratorium klinik kami dilengkapi dengan peralatan analitik modern untuk pemeriksaan darah, urine, feses, dan berbagai spesimen biologis lainnya dengan hasil akurat dan cepat.',
                    'items' => ['Darah Rutin (Hematologi Lengkap)','Kimia Darah (Gula Darah, Kolesterol, Asam Urat)','Fungsi Ginjal & Hati','Urinalisis & Feses Rutin','Elektrolit (Natrium, Kalium, Klorida)','Serologi & Imunologi','Kultur Bakteri (Swab)'],
                    'jam'   => '24 Jam (termasuk cito)','bpjs'=>true,
                ],
                [
                    'icon'  => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                    'title' => 'Radiologi',
                    'sub'   => 'Pencitraan & Diagnostik Imajing',
                    'desc'  => 'Unit Radiologi dilengkapi dengan perangkat pencitraan diagnostik yang memungkinkan dokter mendapatkan gambaran detail kondisi organ dalam pasien secara non-invasif.',
                    'items' => ['Rontgen (X-Ray) Konvensional','USG Abdomen & Transvaginal','USG Muskuloskeletal','Rontgen Thorax (Dada)','Rontgen Ekstremitas','Pemeriksaan Radiologi Cito (Darurat)'],
                    'jam'   => '07.00–21.00 (Cito 24 Jam)','bpjs'=>true,
                ],
                [
                    'icon'  => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                    'title' => 'Instalasi Farmasi / Apotek',
                    'sub'   => 'Penyediaan Obat 24 Jam',
                    'desc'  => 'Apotek RS menyediakan obat-obatan resep dokter yang lengkap sesuai formularium nasional dan formularium RS, melayani pasien BPJS maupun Umum selama 24 jam penuh.',
                    'items' => ['Obat resep dokter spesialis & umum','Obat formularium nasional (BPJS)','Obat ethical & generik','Alat kesehatan dasar','Konseling penggunaan obat','Layanan obat pulang pasien rawat inap'],
                    'jam'   => '24 Jam Non-Stop','bpjs'=>true,
                ],
                [
                    'icon'  => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'title' => 'Rekam Medis',
                    'sub'   => 'Manajemen Data Klinis Pasien',
                    'desc'  => 'Unit Rekam Medis mengelola data riwayat medis pasien secara tertib, aman, dan dapat diakses oleh tenaga medis yang berwenang untuk kesinambungan pelayanan.',
                    'items' => ['Pendaftaran & registrasi pasien','Penyimpanan rekam medis','Pembuatan resume medis','Surat keterangan medis resmi','Legalisasi dokumen medis','Pengajuan visum et repertum'],
                    'jam'   => '07.30–15.00 (Hari Kerja)','bpjs'=>false,
                ],
            ];
            @endphp

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($services as $s)
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg p-7 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                    <span class="absolute -top-3 -right-2 text-[64px] font-black text-gray-50 leading-none select-none pointer-events-none group-hover:text-emerald-50 transition-colors">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>

                    <div class="flex items-start gap-4 mb-5 relative z-10">
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all duration-300 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/></svg>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-base font-extrabold text-gray-900 group-hover:text-emerald-800 transition-colors">{{ $s['title'] }}</h3>
                            <p class="text-xs text-emerald-600 font-semibold">{{ $s['sub'] }}</p>
                        </div>
                        @if($s['bpjs'])
                        <span class="shrink-0 text-[9px] font-bold tracking-widest text-emerald-700 bg-emerald-50 border border-emerald-100 px-2 py-1 rounded-md uppercase">BPJS ✓</span>
                        @endif
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed mb-5 relative z-10">{{ $s['desc'] }}</p>

                    <div class="space-y-1.5 mb-5 relative z-10">
                        @foreach($s['items'] as $item)
                        <div class="flex items-center gap-2 text-xs text-gray-600">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>{{ $item }}
                        </div>
                        @endforeach
                    </div>

                    <div class="pt-4 border-t border-gray-50 flex items-center gap-2 relative z-10">
                        <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span class="text-[11px] font-semibold text-gray-500">{{ $s['jam'] }}</span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- ── CTA ── --}}
            <div class="mt-12 bg-emerald-950 rounded-2xl p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-5 border border-white/5">
                <div>
                    <h3 class="text-base font-extrabold text-white mb-1">Informasi Lebih Lanjut</h3>
                    <p class="text-emerald-300/70 text-xs">Hubungi kami atau kunjungi langsung setiap unit layanan.</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('jadwal-poliklinik') }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        Jadwal Poliklinik
                    </a>
                    <a href="https://wa.me/6285397616993" class="inline-flex items-center gap-2 border border-emerald-700 text-emerald-400 hover:bg-emerald-900 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        Hubungi Kami
                    </a>
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
