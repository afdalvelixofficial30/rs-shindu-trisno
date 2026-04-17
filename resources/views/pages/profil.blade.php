@extends('layouts.app')
@section('title', 'Profil & Organisasi - RS Tkt. III Dr. Sindhu Trisno Palu')

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
                    <a href="#" class="hover:text-emerald-200 transition-colors">Tentang Kami</a>
                    <span>/</span>
                    <span class="text-emerald-300">Profil & Organisasi</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Identitas & Organisasi</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Profil <span class="text-emerald-400">Rumah Sakit</span>
                </h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed mb-8">
                    Mengenal lebih dekat Rumah Sakit Tingkat III 13.06.01 Dr. Sindhu Trisno Palu beserta struktur komando, visi, misi, dan nilai-nilai inti pelayanannya.
                </p>
                <div class="flex flex-wrap gap-6">
                    @foreach([['num'=>'TIPE C','label'=>'Klasifikasi RS'],['num'=>'UTAMA','label'=>'Akreditasi LAFKI'],['num'=>'BSrE','label'=>'TTE Tersertifikasi']] as $s)
                    <div class="flex items-center gap-2">
                        <p class="text-xl font-black text-emerald-400">{{ $s['num'] }}</p>
                        <p class="text-[10px] font-bold text-emerald-300/60 tracking-widest uppercase">{{ $s['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── PROFIL KARUMKIT ── --}}
        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
                {{-- Kiri: Foto Karumkit --}}
                <div class="relative flex justify-center lg:justify-start group">
                    <div class="absolute -inset-4 bg-emerald-200/40 rounded-[3rem] blur-2xl group-hover:bg-emerald-300/40 transition-colors duration-700"></div>
                    <div class="relative bg-gradient-to-t from-emerald-950 via-emerald-800 to-emerald-600 rounded-[2.5rem] overflow-hidden shadow-2xl border border-emerald-700/50 w-full max-w-[360px] mx-auto h-[480px] sm:h-[520px]">
                        <img src="{{ asset('assets/images/karumkit.png') }}" alt="KARUMKIT RS Dr. Sindhu Trisno"
                             class="w-full h-[100%] sm:h-[150%] absolute bottom-0 left-5 right-0 object-contain object-bottom scale-110 hover:scale-115 origin-bottom transition-transform duration-700 z-0">
                        {{-- Floating Label --}}
                        <div class="absolute z-10 bottom-8 left-1/2 -translate-x-1/2 w-[85%] bg-white/95 backdrop-blur-md rounded-2xl p-5 shadow-xl border border-white/50">
                            <h4 class="text-gray-900 font-extrabold text-sm text-center leading-snug">Letnan Kolonel Ckm<br>dr. Marles Edy Wanto Haloho, M.Kes.</h4>
                            <p class="text-emerald-700 font-bold text-[9px] text-center tracking-[0.2em] mt-2 uppercase">Kepala Rumah Sakit (KARUMKIT)</p>
                        </div>
                    </div>
                </div>

                {{-- Kanan: Detail Profil --}}
                <div class="flex flex-col justify-center">
                    <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-4 uppercase">Sambutan & Dedikasi</p>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8">
                        Menjunjung Tinggi <br><span class="text-emerald-700">Profesionalisme & Ikhlas</span>
                    </h2>
                    <p class="text-gray-600 text-base leading-relaxed mb-8">
                        Rumah Sakit Tentara (RS Tkt. III 13.06.01) Dr. Sindhu Trisno Palu merupakan institusi kesehatan militer di bawah naungan Kodam XXIII Palaka Wira. Kami berdedikasi kuat untuk memberikan pelayanan medis yang prima, akurat, dan terarah bagi Prajurit TNI AD, PNS, Keluarga, serta Masyarakat Umum di wilayah Provinsi Sulawesi Tengah.
                    </p>
                    
                    {{-- Motto Mini Grid --}}
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-y-4 gap-x-6 mb-10 pt-8 border-t border-gray-100">
                        @foreach(['Profesional', 'Akurat', 'Selaras', 'Terarah', 'Ikhlas'] as $motto)
                        <div class="flex items-center gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0"></div>
                            <span class="text-xs font-bold text-gray-800 tracking-widest uppercase">{{ $motto }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ── VISI & MISI ── --}}
            <div class="mb-20">
                <div class="text-center mb-12">
                    <p class="text-sm font-bold tracking-[0.2em] text-emerald-600 mb-3 uppercase">Identitas Utama</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Visi & Misi</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    {{-- Visi --}}
                    <div class="group bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                        <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center shrink-0 transition-colors text-emerald-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                            </div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Visi Kami</h3>
                        </div>
                        <blockquote class="border-l-4 border-emerald-500 pl-5 text-gray-700 text-lg leading-relaxed font-medium mt-auto mb-auto">
                            "Menjadi Rumah Sakit Unggulan bagi Prajurit TNI AD, PNS, dan Keluarga serta masyarakat umum di wilayah Provinsi Sulawesi Tengah."
                        </blockquote>
                    </div>

                    {{-- Misi --}}
                    <div class="group bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md hover:border-emerald-200 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                        <span class="absolute left-0 top-6 bottom-6 w-[3px] bg-emerald-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center shrink-0 transition-colors text-emerald-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                            </div>
                            <h3 class="text-xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">Misi Kami</h3>
                        </div>
                        <ul class="space-y-4">
                            @foreach([
                                'Memberikan pelayanan kesehatan yang prima.',
                                'Memberikan pelayanan keparipurnaan yang dilandasi Profesionalisme, Disiplin, Bermoral, dan Soliditas.',
                                'Meningkatkan SDM yang handal, dan memiliki budaya organisasi sebagai pelayan prima.',
                                'Mengelola seluruh sumber daya secara efektif, efisien, dan akuntabel.'
                            ] as $misi)
                            <li class="flex items-start gap-3 text-sm text-gray-700 leading-relaxed font-medium">
                                <span class="w-6 h-6 rounded-full bg-emerald-50 border border-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                {{ $misi }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- ── MOTTO PASTI ── --}}
            <div class="mb-20">
                <div class="bg-emerald-950 rounded-[2.5rem] p-10 md:p-16 text-center shadow-lg relative overflow-hidden border border-emerald-800">
                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-emerald-700/20 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-emerald-400/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <div class="relative z-10">
                        <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-4 uppercase">Motto Pelayanan</p>
                        <h3 class="text-5xl md:text-7xl font-black text-white mb-10 tracking-tight">PASTI</h3>
                        
                        <div class="flex flex-wrap justify-center gap-3 md:gap-5">
                            @foreach([['P','Profesional'],['A','Akurat'],['S','Selaras'],['T','Terarah'],['I','Ikhlas']] as $item)
                            <div class="flex items-center gap-3 bg-emerald-900/50 border border-emerald-800/50 px-5 md:px-6 py-2.5 rounded-2xl hover:bg-emerald-800 hover:border-emerald-700 transition-colors">
                                <span class="w-8 h-8 rounded-full bg-emerald-500 text-white font-black text-sm flex items-center justify-center shadow-inner">{{ $item[0] }}</span>
                                <span class="text-sm font-bold text-emerald-100 tracking-widest uppercase">{{ $item[1] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ── NILAI-NILAI INTI ── --}}
            <div class="mb-20">
                <div class="text-center mb-12">
                    <p class="text-sm font-bold tracking-[0.2em] text-emerald-600 mb-3 uppercase">Pilar Organisasi</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Nilai-Nilai Inti</h2>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    @php
                        $nilais = [
                            ['title'=>'Empati',     'desc'=>'Mengutamakan kepedulian dalam pelayanan.', 'color'=>'rose',   'icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['title'=>'Profesional','desc'=>'Pelayanan terbaik & etika profesi tinggi.', 'color'=>'emerald','icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                            ['title'=>'Inovatif',   'desc'=>'Berinovasi dengan teknologi medis terkini.','color'=>'sky',    'icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'],
                            ['title'=>'Kolaboratif','desc'=>'Sinergi solid antar departemen medis.',      'color'=>'violet', 'icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'],
                        ];
                    @endphp

                    @foreach($nilais as $n)
                    <div class="group bg-white rounded-2xl border border-gray-100 p-6 shadow-sm hover:shadow-md hover:border-{{$n['color']}}-200 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">
                        <span class="absolute left-0 top-5 bottom-5 w-[3px] bg-{{$n['color']}}-400 rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                        <div class="w-12 h-12 rounded-xl bg-{{$n['color']}}-50 flex items-center justify-center mb-5 text-{{$n['color']}}-600 group-hover:bg-{{$n['color']}}-500 group-hover:text-white transition-colors shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $n['icon'] }}"/></svg>
                        </div>
                        <h4 class="text-base font-extrabold text-gray-900 mb-2 group-hover:text-{{$n['color']}}-700 transition-colors">{{ $n['title'] }}</h4>
                        <p class="text-gray-500 text-xs leading-relaxed font-medium">{{ $n['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ── STRUKTUR BAGAN ── --}}
            <div class="mb-10">
                <div class="text-center mb-12">
                    <p class="text-sm font-bold tracking-[0.2em] text-emerald-600 mb-3 uppercase">Mekanisme & Komando</p>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">Struktur Organisasi</h2>
                </div>
                <div class="bg-white p-5 md:p-8 rounded-3xl shadow-sm border border-gray-100 flex items-center justify-center overflow-hidden hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/bagan.png') }}" alt="Struktur Organisasi RS Dr. Sindhu Trisno"
                         class="w-full h-auto object-contain hover:scale-[1.02] transition-transform duration-500">
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
