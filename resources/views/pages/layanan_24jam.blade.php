@extends('layouts.app')
@section('title', 'Layanan 24 Jam - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-red-900/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="opacity-80">Layanan</span>
                    <span>/</span><span class="text-emerald-300">Layanan 24 Jam</span>
                </div>
                <div class="flex items-center gap-3 mb-3">
                    <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse"></span>
                    <p class="text-[11px] font-bold tracking-[0.3em] text-red-400 uppercase">Beroperasi 24 Jam Penuh</p>
                </div>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Layanan <span class="text-emerald-400">24 Jam</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Tim medis dan fasilitas kami siaga penuh 24 jam, 7 hari seminggu, 365 hari setahun — tidak terkecuali hari libur dan hari raya.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-5xl space-y-10">

            {{-- Emergency Call Banner --}}
            <div class="shimmer-auto bg-red-600 rounded-2xl p-6 flex flex-col sm:flex-row items-center justify-between gap-4 reveal">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div>
                        <p class="text-white/70 text-xs font-semibold">Nomor Darurat IGD</p>
                        <p class="text-white text-2xl font-extrabold tracking-tight">0812-1375-6763</p>
                    </div>
                </div>
                <a href="https://wa.me/6281213756763" target="_blank" class="bg-white text-red-600 font-extrabold text-xs tracking-widest px-7 py-3.5 rounded-xl hover:bg-red-50 transition-all">
                    HUBUNGI SEKARANG
                </a>
            </div>

            {{-- IGD --}}
            <div class="group bg-white rounded-2xl border border-gray-100 hover:border-red-200 shadow-sm hover:shadow-lg p-7 transition-all duration-300 reveal relative overflow-hidden">
                <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-red-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                <div class="flex items-start gap-5">
                    <div class="w-14 h-14 rounded-xl bg-red-50 group-hover:bg-red-500 flex items-center justify-center text-red-500 group-hover:text-white transition-all shrink-0">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div class="flex-grow">
                        <div class="flex items-center gap-3 mb-2 flex-wrap">
                            <h2 class="text-lg font-extrabold text-gray-900">Instalasi Gawat Darurat (IGD)</h2>
                            <span class="text-[9px] font-bold tracking-widest text-red-600 bg-red-50 border border-red-100 px-2.5 py-1 rounded-full uppercase">24 JAM · 7 HARI</span>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">Unit gawat darurat yang dilengkapi peralatan resusitasi, monitoring vital, dan tim medis terlatih untuk penanganan kondisi kritis, trauma, kecelakaan, dan kegawatan medis lainnya secara cepat dan tepat.</p>
                        <div class="grid sm:grid-cols-2 gap-3">
                            @foreach(['Penanganan trauma & kecelakaan lalu lintas','Resusitasi jantung paru (RJP/CPR)','Penanganan luka bakar & kritis','Stabilisasi pasien sebelum rawat inap','Pemeriksaan cito (Lab & Radiologi)','Layanan ambulans & rujukan darurat'] as $item)
                            <div class="flex items-center gap-2 text-xs text-gray-600">
                                <div class="w-1.5 h-1.5 rounded-full bg-red-400 shrink-0"></div>{{ $item }}
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-5 pt-4 border-t border-gray-50 flex flex-wrap gap-3">
                            <a href="https://wa.me/6281213756763" target="_blank" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white text-[10px] font-bold tracking-widest px-4 py-2.5 rounded-lg transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                Hubungi IGD
                            </a>
                            <a href="{{ route('alur-pendaftaran') }}#igd" class="inline-flex items-center gap-2 border border-red-200 text-red-600 hover:bg-red-50 text-[10px] font-bold tracking-widest px-4 py-2.5 rounded-lg transition-all">
                                Alur IGD
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Apotek & Persalinan --}}
            <div class="grid md:grid-cols-2 gap-5">

                {{-- Apotek --}}
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1 reveal relative overflow-hidden">
                    <span class="absolute left-0 top-5 bottom-5 w-[3px] bg-emerald-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-600 group-hover:text-white transition-all shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <h3 class="font-extrabold text-gray-900">Instalasi Farmasi / Apotek</h3>
                                <span class="text-[9px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded-full">24 JAM</span>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed mb-4">Apotek RS menyediakan obat-obatan resep dokter lengkap (formularium nasional & RS) untuk pasien BPJS dan Umum selama 24 jam penuh.</p>
                            <ul class="space-y-1.5">
                                @foreach(['Obat resep dokter spesialis & umum','Formularium BPJS Kesehatan','Obat generik & branded','Alat kesehatan dasar','Konseling penggunaan obat'] as $item)
                                <li class="flex items-center gap-2 text-xs text-gray-600">
                                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>{{ $item }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Persalinan --}}
                <div class="group bg-white rounded-2xl border border-gray-100 hover:border-pink-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1 reveal delay-100 relative overflow-hidden">
                    <span class="absolute left-0 top-5 bottom-5 w-[3px] bg-pink-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-pink-50 group-hover:bg-pink-500 flex items-center justify-center text-pink-500 group-hover:text-white transition-all shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <h3 class="font-extrabold text-gray-900">Kamar Bersalin (VK)</h3>
                                <span class="text-[9px] font-bold text-pink-600 bg-pink-50 border border-pink-100 px-2 py-0.5 rounded-full">24 JAM</span>
                            </div>
                            <p class="text-gray-500 text-xs leading-relaxed mb-4">Fasilitas kamar bersalin (Verlos Kamer) siaga 24 jam didampingi bidan profesional dan dokter spesialis kandungan on-call.</p>
                            <ul class="space-y-1.5">
                                @foreach(['Persalinan normal & SC','Didampingi bidan & SpOG','Perawatan bayi baru lahir','Inisiasi Menyusu Dini (IMD)','Tersedia untuk BPJS & Umum'] as $item)
                                <li class="flex items-center gap-2 text-xs text-gray-600">
                                    <div class="w-1.5 h-1.5 rounded-full bg-pink-400 shrink-0"></div>{{ $item }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Jadwal Ringkas --}}
            <div class="bg-emerald-950 rounded-2xl p-7 reveal">
                <h3 class="text-base font-extrabold text-white mb-5">Ringkasan Jam Operasional</h3>
                <div class="grid sm:grid-cols-3 gap-4">
                    @foreach([
                        ['unit'=>'IGD','jam'=>'24 Jam / 7 Hari','color'=>'text-red-400','bg'=>'bg-red-500/10 border-red-500/20'],
                        ['unit'=>'Apotek RS','jam'=>'24 Jam / 7 Hari','color'=>'text-emerald-400','bg'=>'bg-emerald-500/10 border-emerald-500/20'],
                        ['unit'=>'Kamar Bersalin','jam'=>'24 Jam / 7 Hari','color'=>'text-pink-400','bg'=>'bg-pink-500/10 border-pink-500/20'],
                    ] as $j)
                    <div class="border {{ $j['bg'] }} rounded-xl p-4 text-center">
                        <p class="{{ $j['color'] }} text-[10px] font-bold tracking-widest uppercase mb-1">{{ $j['unit'] }}</p>
                        <p class="text-white font-extrabold">{{ $j['jam'] }}</p>
                    </div>
                    @endforeach
                </div>
                <p class="text-emerald-400/50 text-[11px] text-center mt-4 font-semibold">Termasuk hari libur nasional & hari raya</p>
            </div>

            {{-- CTA --}}
            <div class="flex flex-wrap gap-3 reveal">
                <a href="{{ route('alur-pendaftaran') }}" class="inline-flex items-center gap-2 bg-emerald-700 hover:bg-emerald-600 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Alur Pendaftaran <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                </a>
                <a href="{{ route('jaminan-layanan') }}" class="inline-flex items-center gap-2 border border-emerald-200 text-emerald-700 hover:bg-emerald-50 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Jaminan Layanan
                </a>
                <a href="{{ route('penunjang') }}" class="inline-flex items-center gap-2 border border-gray-200 text-gray-600 hover:bg-gray-50 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Semua Fasilitas
                </a>
            </div>

        </div>
    </main>
    @include('partials.footer')
@endsection
