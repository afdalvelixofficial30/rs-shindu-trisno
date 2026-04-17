@extends('layouts.app')
@section('title', 'Visi, Misi & Motto PASTI - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -top-20 right-0 w-96 h-96 bg-emerald-700/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><a href="{{ route('profil') }}" class="hover:text-emerald-200 transition-colors">Tentang Kami</a>
                    <span>/</span><span class="text-emerald-300">Visi, Misi & Motto</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Identitas Organisasi</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Visi, Misi &<br><span class="text-emerald-400">Motto PASTI</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Fondasi nilai dan arah strategis RS Tkt. III Dr. Sindhu Trisno dalam memberikan pelayanan kesehatan terbaik.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-5xl space-y-14">

            {{-- VISI --}}
            <div class="reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Vision Statement</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Visi Kami</h2>
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 md:p-10 relative overflow-hidden group hover:border-emerald-200 hover:shadow-md transition-all">
                    <div class="absolute left-0 top-0 bottom-0 w-1 bg-emerald-500 rounded-r-full"></div>
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-emerald-50 rounded-full pointer-events-none"></div>
                    <div class="flex items-start gap-6 relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                        </div>
                        <blockquote class="text-xl md:text-2xl font-bold text-gray-800 leading-relaxed italic border-none p-0">
                            "Menjadi Rumah Sakit Unggulan bagi Prajurit TNI AD, PNS, dan Keluarga serta masyarakat umum di wilayah Provinsi Sulawesi Tengah."
                        </blockquote>
                    </div>
                </div>
            </div>

            {{-- MISI --}}
            <div class="reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Mission Statement</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Misi Kami</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    @foreach([
                        ['num'=>'01','text'=>'Memberikan pelayanan kesehatan yang prima kepada seluruh pasien tanpa terkecuali.','icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                        ['num'=>'02','text'=>'Memberikan pelayanan kesehatan yang paripurna dilandasi Profesionalisme, Disiplin, Bermoral, dan Soliditas.','icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                        ['num'=>'03','text'=>'Meningkatkan SDM yang profesional, bermoral, dan memiliki budaya organisasi sebagai pelayan yang prima.','icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                        ['num'=>'04','text'=>'Mengelola seluruh sumber daya secara efektif, efisien, dan akuntabel demi keberlanjutan institusi.','icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                    ] as $m)
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 flex gap-4 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                        <span class="absolute -top-2 -right-1 text-[56px] font-black text-gray-50 leading-none select-none group-hover:text-emerald-50 transition-colors pointer-events-none">{{ $m['num'] }}</span>
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all shrink-0 relative z-10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $m['icon'] }}"/></svg>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed relative z-10">{{ $m['text'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- MOTTO PASTI --}}
            <div class="reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Motto</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Motto <span class="text-emerald-700">PASTI</span></h2>
                <div class="bg-emerald-950 rounded-2xl p-8 md:p-12 relative overflow-hidden">
                    <div class="absolute -top-16 -right-16 w-64 h-64 bg-emerald-700/20 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-emerald-900/40 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="relative z-10">
                        <div class="text-center mb-10">
                            <p class="text-6xl md:text-8xl font-black text-white tracking-[0.15em] drop-shadow-lg">PASTI</p>
                            <p class="text-emerald-400/60 text-xs font-semibold tracking-widest mt-3 uppercase">Motto Pelayanan RS Tkt. III Dr. Sindhu Trisno</p>
                        </div>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
                            @foreach([
                                ['letter'=>'P','word'=>'Profesional','desc'=>'Tenaga medis terlatih dengan standar kompetensi tinggi'],
                                ['letter'=>'A','word'=>'Akurat','desc'=>'Diagnosa tepat berbasis data klinis yang valid'],
                                ['letter'=>'S','word'=>'Selaras','desc'=>'Harmoni antara pasien, keluarga, dan tim medis'],
                                ['letter'=>'T','word'=>'Terarah','desc'=>'Pelayanan terprogram sesuai standar prosedur'],
                                ['letter'=>'I','word'=>'Ikhlas','desc'=>'Melayani dengan hati dan dedikasi tanpa pamrih'],
                            ] as $p)
                            <div class="bg-white/[0.05] border border-white/10 rounded-xl p-5 hover:bg-white/[0.08] hover:border-emerald-500/30 transition-all text-center group">
                                <div class="w-10 h-10 rounded-full bg-emerald-500 text-white font-black text-lg flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">{{ $p['letter'] }}</div>
                                <p class="text-white font-bold text-sm mb-1">{{ $p['word'] }}</p>
                                <p class="text-emerald-400/60 text-[11px] leading-snug">{{ $p['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- NILAI INTI --}}
            <div class="reveal">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Core Values</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Nilai-Nilai Inti</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    @foreach([
                        ['icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z','label'=>'Empati','desc'=>'Mengutamakan kepedulian dalam setiap pelayanan','color'=>'red'],
                        ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','label'=>'Profesional','desc'=>'Standar pelayanan tertinggi & etika profesi','color'=>'emerald'],
                        ['icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6','label'=>'Inovatif','desc'=>'Teknologi medis terkini untuk mutu terbaik','color'=>'blue'],
                        ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z','label'=>'Kolaboratif','desc'=>'Sinergi tim medis untuk hasil optimal','color'=>'violet'],
                    ] as $v)
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-{{ $v['color'] }}-200 shadow-sm hover:shadow-md p-6 text-center transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-{{ $v['color'] }}-50 group-hover:bg-{{ $v['color'] }}-500 flex items-center justify-center text-{{ $v['color'] }}-500 group-hover:text-white transition-all mx-auto mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $v['icon'] }}"/></svg>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 mb-2">{{ $v['label'] }}</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">{{ $v['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>
    @include('partials.footer')
@endsection
