@extends('layouts.app')
@section('title', 'Tata Tertib & Jam Besuk - RS Tkt. III Dr. Sindhu Trisno Palu')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-emerald-700/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span>
                    <span class="text-emerald-400">Informasi Pasien</span>
                    <span>/</span>
                    <span class="text-emerald-300">Tata Tertib & Jam Besuk</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Informasi Pasien</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Tata Tertib &<br><span class="text-emerald-400">Jam Besuk</span>
                </h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">
                    Panduan lengkap bagi pengunjung dan keluarga pasien RS Dr. Sindhu Trisno demi kenyamanan dan keselamatan bersama.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-4xl space-y-8">

            {{-- ── JAM BESUK ── --}}
            <div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Jadwal Kunjungan</p>
                <h2 class="text-xl font-extrabold text-gray-900 mb-5">Jam Besuk Pasien Rawat Inap</h2>

                <div class="grid sm:grid-cols-2 gap-5">
                    {{-- Sesi Siang --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-8 text-center transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                        <span class="absolute -top-2 -right-1 text-[72px] font-black text-gray-50 leading-none select-none pointer-events-none group-hover:text-emerald-50 transition-colors">1</span>
                        <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-teal-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        <div class="w-12 h-12 rounded-xl bg-teal-50 group-hover:bg-teal-500 flex items-center justify-center text-teal-600 group-hover:text-white transition-all mx-auto mb-4 relative z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-13l-.87.5M4.21 17.5l-.87.5M20.66 17.5l-.87-.5M4.21 6.5l-.87-.5M21 12h-1M4 12H3"/>
                                <circle cx="12" cy="12" r="4" stroke-width="2"/>
                            </svg>
                        </div>
                        <p class="text-[10px] font-black tracking-widest text-teal-600 uppercase mb-2 relative z-10">Sesi Siang</p>
                        <p class="text-4xl font-extrabold text-gray-900 mb-1 relative z-10">10.00 <span class="text-teal-400">–</span> 12.00</p>
                        <p class="text-xs font-bold text-gray-400 tracking-widest relative z-10">WITA</p>
                    </div>

                    {{-- Sesi Malam --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-indigo-200 shadow-sm hover:shadow-md p-8 text-center transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                        <span class="absolute -top-2 -right-1 text-[72px] font-black text-gray-50 leading-none select-none pointer-events-none group-hover:text-indigo-50 transition-colors">2</span>
                        <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-indigo-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 group-hover:bg-indigo-500 flex items-center justify-center text-indigo-600 group-hover:text-white transition-all mx-auto mb-4 relative z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                            </svg>
                        </div>
                        <p class="text-[10px] font-black tracking-widest text-indigo-600 uppercase mb-2 relative z-10">Sesi Malam</p>
                        <p class="text-4xl font-extrabold text-gray-900 mb-1 relative z-10">16.00 <span class="text-indigo-400">–</span> 22.00</p>
                        <p class="text-xs font-bold text-gray-400 tracking-widest relative z-10">WITA</p>
                    </div>
                </div>

                {{-- Info tambahan jam besuk --}}
                <div class="mt-4 bg-amber-50 border border-amber-100 rounded-xl p-4 flex gap-3">
                    <svg class="w-4 h-4 text-amber-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-xs text-amber-700 leading-relaxed">
                        Jam besuk berlaku setiap hari termasuk hari libur dan hari raya. Pengunjung wajib menunjukkan identitas diri kepada petugas jaga sebelum memasuki ruang perawatan.
                    </p>
                </div>
            </div>

            {{-- ── PERATURAN PENGUNJUNG ── --}}
            <div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Ketentuan Berkunjung</p>
                <h2 class="text-xl font-extrabold text-gray-900 mb-5">Peraturan Pendamping & Pengunjung</h2>

                <div class="space-y-3">
                    @php
                    $rules = [
                        [
                            'icon'  => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
                            'color' => 'red',
                            'title' => 'Kawasan Bebas Asap Rokok',
                            'desc'  => 'Sangat dilarang merokok atau menggunakan vape di seluruh area rumah sakit, baik di dalam maupun di luar gedung perawatan.',
                            'num'   => '01',
                        ],
                        [
                            'icon'  => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                            'color' => 'emerald',
                            'title' => 'Batas Maksimal Penunggu',
                            'desc'  => 'Pasien di ruang rawat inap hanya dapat ditunggu oleh maksimal 2 (dua) orang anggota keluarga terdekat menggunakan kartu tunggu yang berlaku.',
                            'num'   => '02',
                        ],
                        [
                            'icon'  => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                            'color' => 'orange',
                            'title' => 'Larangan Area untuk Anak-anak',
                            'desc'  => 'Demi kesehatan & keselamatan, anak di bawah umur 12 tahun dilarang masuk bertamu ke Instalasi Gawat Darurat, Rawat Inap, maupun Ruang Perawatan Intensif.',
                            'num'   => '03',
                        ],
                        [
                            'icon'  => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                            'color' => 'red',
                            'title' => 'Keamanan Dasar Lingkungan',
                            'desc'  => 'Dilarang membawa senjata api, senjata tajam, minuman keras, binatang peliharaan, serta dilarang membawa uang dan barang berharga dalam jumlah berlebihan.',
                            'num'   => '04',
                        ],
                        [
                            'icon'  => 'M5 13l4 4L19 7',
                            'color' => 'emerald',
                            'title' => 'Ketertiban Area Keperawatan',
                            'desc'  => 'Pengunjung, pendamping, dan pasien wajib senantiasa memelihara kebersihan, ketertiban fasilitas alat rawat, dan menjaga ketenangan di ruang perawatan.',
                            'num'   => '05',
                        ],
                        [
                            'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                            'color' => 'emerald',
                            'title' => 'Wajib Lapor Petugas',
                            'desc'  => 'Setiap pengunjung wajib melapor dan mencatat identitas diri di pos jaga / petugas keamanan sebelum memasuki area perawatan pasien.',
                            'num'   => '06',
                        ],
                    ];
                    @endphp

                    @foreach($rules as $rule)
                    <div class="group flex gap-4 bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-5 transition-all duration-300 hover:-translate-y-0.5 relative overflow-hidden">
                        <span class="absolute -top-2 -right-1 text-[52px] font-black text-gray-50 leading-none select-none pointer-events-none group-hover:text-emerald-50 transition-colors">{{ $rule['num'] }}</span>
                        <span class="absolute left-0 top-5 bottom-5 w-[3px] bg-{{ $rule['color'] }}-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>

                        <div class="w-10 h-10 rounded-xl bg-{{ $rule['color'] }}-50 group-hover:bg-{{ $rule['color'] }}-500 flex items-center justify-center text-{{ $rule['color'] }}-500 group-hover:text-white transition-all shrink-0 relative z-10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $rule['icon'] }}"/>
                            </svg>
                        </div>

                        <div class="relative z-10">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="text-[9px] font-black text-emerald-600 tracking-widest">{{ $rule['num'] }}</span>
                                <h3 class="text-sm font-bold text-gray-900 group-hover:text-emerald-700 transition-colors">{{ $rule['title'] }}</h3>
                            </div>
                            <p class="text-xs text-gray-500 leading-relaxed">{{ $rule['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ── SANKSI ── --}}
            <div class="bg-red-50 border border-red-100 rounded-2xl p-6 flex gap-4">
                <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-red-500 shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm font-extrabold text-red-800 mb-1">Peringatan Penting</h4>
                    <p class="text-xs text-red-700 leading-relaxed">
                        Pelanggaran terhadap tata tertib ini dapat mengakibatkan <strong>penghentian kunjungan</strong> oleh petugas keamanan RS. Pihak RS berhak menindak tegas setiap pelanggaran yang mengganggu ketertiban dan keselamatan pasien lain.
                    </p>
                </div>
            </div>

            {{-- ── CTA ── --}}
            <div class="bg-emerald-950 rounded-2xl p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-5 border border-white/5">
                <div>
                    <h3 class="text-base font-extrabold text-white mb-1">Lihat Informasi Pasien Lainnya</h3>
                    <p class="text-emerald-300/70 text-xs">Panduan lengkap mulai dari pendaftaran hingga jaminan layanan.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('alur-pendaftaran') }}"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        Alur Pendaftaran
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="{{ route('jaminan-layanan') }}"
                       class="inline-flex items-center gap-2 border border-emerald-700 text-emerald-400 hover:bg-emerald-900 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        Jaminan Layanan
                    </a>
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
