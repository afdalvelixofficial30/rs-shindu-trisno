@extends('layouts.app')
@section('title', 'Kapasitas Rawat Inap - RS Tkt. III Dr. Sindhu Trisno Palu')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -top-20 -right-20 w-96 h-96 bg-emerald-700/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span>
                    <span class="text-emerald-300">Rawat Inap</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Layanan Medis</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Kapasitas <span class="text-emerald-400">Rawat Inap</span>
                </h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed mb-8">
                    Tersedia fasilitas tempat tidur dengan berbagai tingkatan kelas perawatan medis yang dapat disesuaikan dengan kebutuhan pemulihan kesehatan Anda.
                </p>
                <div class="flex flex-wrap gap-6">
                    @foreach([['num'=>'116','label'=>'Total Tempat Tidur'],['num'=>'4','label'=>'Pilihan Kelas'],['num'=>'12','label'=>'Bed ICU']] as $s)
                    <div class="flex items-center gap-2">
                        <p class="text-xl font-black text-emerald-400">{{ $s['num'] }}</p>
                        <p class="text-[10px] font-bold text-emerald-300/60 tracking-widest uppercase">{{ $s['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── MAIN CONTENT ── --}}
        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                
                {{-- VVIP & VIP --}}
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-amber-200 p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-amber-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 group-hover:bg-amber-500 text-amber-600 group-hover:text-white flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-amber-700 transition-colors">VVIP & VIP</h3>
                            <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase">Penyusutan</p>
                        </div>
                    </div>
                    <div class="mt-auto grid grid-cols-2 gap-3">
                        <div class="bg-amber-50/50 rounded-xl p-4 border border-amber-50 text-center">
                            <span class="block text-3xl font-black text-amber-900">6</span>
                            <span class="block text-[10px] font-bold text-amber-700/70 mt-1 tracking-widest uppercase">Bed VVIP</span>
                        </div>
                        <div class="bg-amber-50/50 rounded-xl p-4 border border-amber-50 text-center">
                            <span class="block text-3xl font-black text-amber-900">3</span>
                            <span class="block text-[10px] font-bold text-amber-700/70 mt-1 tracking-widest uppercase">Bed VIP</span>
                        </div>
                    </div>
                </div>

                {{-- Kelas 1 --}}
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-emerald-300 p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 text-emerald-600 group-hover:text-white flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Kelas 1</h3>
                            <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase">Ruang Perawatan</p>
                        </div>
                    </div>
                    <div class="mt-auto bg-emerald-50/50 rounded-xl p-5 border border-emerald-50 relative overflow-hidden">
                        <div class="relative z-10">
                            <span class="block text-4xl font-black text-emerald-900">18</span>
                            <span class="block text-[10px] font-bold text-emerald-700/70 mt-1 tracking-widest uppercase">Tempat Tidur</span>
                        </div>
                        <svg class="absolute -right-4 -bottom-4 w-24 h-24 text-emerald-100/50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    </div>
                </div>

                {{-- Kelas 2 --}}
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-emerald-300 p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 text-emerald-600 group-hover:text-white flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Kelas 2</h3>
                            <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase">Ruang Perawatan</p>
                        </div>
                    </div>
                    <div class="mt-auto bg-emerald-50/50 rounded-xl p-5 border border-emerald-50 relative overflow-hidden">
                        <div class="relative z-10">
                            <span class="block text-4xl font-black text-emerald-900">43</span>
                            <span class="block text-[10px] font-bold text-emerald-700/70 mt-1 tracking-widest uppercase">Tempat Tidur</span>
                        </div>
                        <svg class="absolute -right-4 -bottom-4 w-24 h-24 text-emerald-100/50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    </div>
                </div>

                {{-- Kelas 3 --}}
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-emerald-300 p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col lg:col-start-1">
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 text-emerald-600 group-hover:text-white flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Kelas 3</h3>
                            <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase">Ruang Perawatan</p>
                        </div>
                    </div>
                    <div class="mt-auto bg-emerald-50/50 rounded-xl p-5 border border-emerald-50 relative overflow-hidden">
                        <div class="relative z-10">
                            <span class="block text-4xl font-black text-emerald-900">32</span>
                            <span class="block text-[10px] font-bold text-emerald-700/70 mt-1 tracking-widest uppercase">Tempat Tidur</span>
                        </div>
                        <svg class="absolute -right-4 -bottom-4 w-24 h-24 text-emerald-100/50" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    </div>
                </div>

                {{-- Intensif & Isolasi --}}
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-rose-200 p-6 sm:p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col lg:col-span-2">
                    <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-rose-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                    <div class="flex items-start md:items-center gap-4 mb-6 flex-col md:flex-row">
                        <div class="w-12 h-12 rounded-xl bg-rose-50 group-hover:bg-rose-600 text-rose-600 group-hover:text-white flex items-center justify-center transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-rose-700 transition-colors">Perawatan Intensif Khusus</h3>
                            <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase mt-0.5">Ruang ICU & Isolasi Ketat</p>
                        </div>
                    </div>
                    
                    <div class="mt-auto grid grid-cols-2 gap-3">
                        <div class="bg-rose-50/50 rounded-xl p-5 border border-rose-50 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center md:justify-between">
                            <div class="relative z-10 text-center md:text-left">
                                <span class="block text-4xl font-black text-rose-900">12</span>
                                <span class="block text-[10px] font-bold text-rose-700/70 mt-1 tracking-widest uppercase">Bed ICU</span>
                            </div>
                            <svg class="hidden md:block w-12 h-12 text-rose-100/60" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                        </div>
                        <div class="bg-gray-50/50 rounded-xl p-5 border border-gray-100 relative overflow-hidden text-center md:text-left flex flex-col md:flex-row items-center md:justify-between group-hover:bg-slate-50 transition-colors">
                            <div class="relative z-10 text-center md:text-left">
                                <span class="block text-4xl font-black text-gray-800">2</span>
                                <span class="block text-[10px] font-bold text-gray-500 mt-1 tracking-widest uppercase">Ruang Isolasi</span>
                            </div>
                            <svg class="hidden md:block w-12 h-12 text-gray-200" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ── CTA INFO ── --}}
            <div class="bg-emerald-950 rounded-2xl p-7 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-6 border border-white/5 mt-10 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-800/50 flex items-center justify-center shrink-0 border border-emerald-700/50">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-extrabold text-white mb-1">Informasi Ketersediaan Kamar</h3>
                        <p class="text-emerald-300/70 text-sm max-w-md">Kapasitas tempat tidur dapat berubah sewaktu-waktu. Hubungi pusat informasi pendaftaran untuk cek ketersediaan kamar secara real-time.</p>
                    </div>
                </div>
                <div class="flex shrink-0">
                    <a href="https://wa.me/6285397616993" target="_blank"
                       class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-white font-bold text-xs tracking-widest px-6 py-4 rounded-xl transition-all shadow-xl shadow-emerald-900/50 hover:-translate-y-0.5">
                        <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771z"/></svg>
                        HUBUNGI INFORMASI
                    </a>
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
