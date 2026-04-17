@extends('layouts.app')
@section('title', 'Struktur Organisasi - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><a href="{{ route('profil') }}" class="hover:text-emerald-200 transition-colors">Tentang Kami</a>
                    <span>/</span><span class="text-emerald-300">Struktur Organisasi</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Tentang Kami</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Struktur <span class="text-emerald-400">Organisasi</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Bagan komando dan susunan manajemen RS Tkt. III Dr. Sindhu Trisno Palu.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">

            {{-- Org Tree --}}
            <div class="reveal mb-14">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Bagan Komando</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-10">Susunan Pejabat Struktural</h2>

                {{-- Top: Karumkit --}}
                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <div class="bg-emerald-950 text-white rounded-2xl px-8 py-5 text-center border border-emerald-700/50 shadow-lg shadow-emerald-900/20 min-w-[220px]">
                            <p class="text-[9px] font-bold tracking-widest text-emerald-400 uppercase mb-1">Pimpinan Tertinggi</p>
                            <p class="font-extrabold text-base">Kepala RS (Karumkit)</p>
                            <p class="text-emerald-300/70 text-xs mt-1">Kolonel Kes. (dokter)</p>
                        </div>
                        <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-0.5 h-8 bg-emerald-200"></div>
                    </div>
                </div>

                {{-- Level 2: Wakil & Komite --}}
                <div class="flex flex-wrap justify-center gap-4 mb-8 pt-4">
                    @foreach([
                        ['title'=>'Wakil Kepala RS','sub'=>'Letnan Kolonel Kes.','color'=>'border-emerald-200 bg-emerald-50'],
                        ['title'=>'Komite Medis','sub'=>'Ketua Komite','color'=>'border-blue-100 bg-blue-50'],
                        ['title'=>'Komite Keperawatan','sub'=>'Ketua Komite','color'=>'border-blue-100 bg-blue-50'],
                    ] as $node)
                    <div class="relative">
                        <div class="absolute -top-8 left-1/2 -translate-x-1/2 w-0.5 h-8 bg-emerald-200"></div>
                        <div class="bg-white rounded-xl px-6 py-4 text-center border {{ $node['color'] }} shadow-sm min-w-[160px]">
                            <p class="font-bold text-sm text-gray-900">{{ $node['title'] }}</p>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $node['sub'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Level 3: Instalasi / Bidang --}}
                <div class="mt-10">
                    <p class="text-[11px] font-bold tracking-widest text-gray-400 uppercase text-center mb-6">Instalasi & Bidang Pelayanan</p>
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach([
                            ['unit'=>'Instalasi Rawat Inap','icon'=>'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                            ['unit'=>'Instalasi Rawat Jalan','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                            ['unit'=>'Instalasi Gawat Darurat','icon'=>'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['unit'=>'Instalasi Bedah','icon'=>'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z'],
                            ['unit'=>'Instalasi Laboratorium','icon'=>'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'],
                            ['unit'=>'Instalasi Radiologi','icon'=>'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'],
                            ['unit'=>'Instalasi Farmasi','icon'=>'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                            ['unit'=>'Bidang Keperawatan','icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['unit'=>'Bidang Keuangan','icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['unit'=>'Bidang Personalia & SDM','icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                            ['unit'=>'Bidang Sarana & Prasarana','icon'=>'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z'],
                            ['unit'=>'Rekam Medis & Informasi','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                        ] as $inst)
                        <div class="group bg-white rounded-xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-4 flex items-center gap-3 transition-all duration-200 hover:-translate-y-0.5">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $inst['icon'] }}"/></svg>
                            </div>
                            <p class="text-xs font-semibold text-gray-700 group-hover:text-emerald-700 transition-colors">{{ $inst['unit'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Note --}}
            <div class="bg-amber-50 border border-amber-100 rounded-xl p-5 flex gap-3 reveal">
                <svg class="w-5 h-5 text-amber-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <p class="text-xs text-amber-700 leading-relaxed">Struktur organisasi dapat berubah sewaktu-waktu sesuai kebijakan komando atas. Untuk informasi terkini, silakan hubungi bagian Tata Usaha RS Dr. Sindhu Trisno.</p>
            </div>

        </div>
    </main>
    @include('partials.footer')
@endsection
