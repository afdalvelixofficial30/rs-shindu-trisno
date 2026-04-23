@extends('layouts.app')
@section('title', 'Tim Dokter Spesialis - RS Tkt. III Dr. Sindhu Trisno Palu')

@php
$allDoctors = \App\Models\Doctor::where('is_active', true)->with('poliklinik')->get();

// Map doctor → category (Hardened to prevent "non-object" errors)
function doctorCategory($doctor): string {
    if (!$doctor) return 'Umum & Lainnya';
    
    $s = is_object($doctor) ? strtolower($doctor->specialty ?? '') : strtolower($doctor);
    $p = (is_object($doctor) && $doctor->poliklinik) ? strtolower($doctor->poliklinik->name ?? '') : '';

    // Priority 1: IGD
    if (str_contains($s,'igd') || str_contains($p, 'igd')) return 'Dokter Umum IGD';
    
    if (str_contains($s,'bedah')    || str_contains($s,'orthopedi') || str_contains($s,'orto')     || str_contains($s,'sp.b') || str_contains($s,'sp.ot') || str_contains($s,'b-kbd'))  return 'Spesialis Bedah';
    if (str_contains($s,'dalam')    || str_contains($s,'sp.pd')     || str_contains($s,'finasim'))                                                                                      return 'Spesialis Penyakit Dalam';
    if (str_contains($s,'anak')     || str_contains($s,'sp.a')      || str_contains($s,'obgyn')    || str_contains($s,'sp.og') || str_contains($s,'kandungan'))                         return 'Anak & Kandungan';
    if (str_contains($s,'saraf')    || str_contains($s,'sp.s ')     || str_contains($s,'neurolog') || str_contains($s,'sp.n ') || str_contains($s,'jiwa') || str_contains($s,'psikologi') || str_contains($s,'psikiatri') || str_contains($s,'keswa')) return 'Neurologi & Jiwa';
    if (str_contains($s,'tht')      || str_contains($s,'telinga')   || str_contains($s,'sp.m ')    || str_contains($s,'mata') || str_contains($s,'kulit') || str_contains($s,'sp.kk') || str_contains($s,'kelamin'))                                    return 'Indera & Kulit';
    if (str_contains($s,'jantung')  || str_contains($s,'kardio')    || str_contains($s,'sp.jp')    || str_contains($s,'fiha') || str_contains($s,'paru'))                               return 'Jantung & Paru';
    if (str_contains($s,'radiolog') || str_contains($s,'sp.rad')    || str_contains($s,'anestesi') || str_contains($s,'sp.an') || str_contains($s,'sp.pk') || str_contains($s,'patolog')) return 'Penunjang & Diagnostik';
    if (str_contains($s,'gigi')     || str_contains($s,'sp.kg')     || str_contains($s,'periodonti') || str_contains($s,'drg.'))                                                        return 'Gigi & Mulut';
    if (str_contains($s,'rehabilit')|| str_contains($s,'fisio'))                                                                                                                        return 'Rehabilitasi Medik';
    
    return 'Umum & Lainnya';
}

$categorizedDoctors = $allDoctors->map(fn($d) => tap($d, fn($d) => $d->category = doctorCategory($d)));
$doctorsByCategory  = $categorizedDoctors->groupBy('category');

$categoryOrder = [
    'Dokter Umum IGD', 'Spesialis Bedah','Spesialis Penyakit Dalam','Anak & Kandungan',
    'Neurologi & Jiwa','Indera & Kulit','Jantung & Paru',
    'Penunjang & Diagnostik','Gigi & Mulut','Rehabilitasi Medik', 'Umum & Lainnya'
];

$orderedGroups = collect($categoryOrder)
    ->filter(fn($c) => $doctorsByCategory->has($c))
    ->mapWithKeys(fn($c) => [$c => $doctorsByCategory->get($c)]);

$categoryStyle = [
    'Dokter Umum IGD'          => ['dot'=>'bg-red-600',    'badge'=>'bg-red-50 text-red-700 border-red-100',         'bar'=>'bg-red-600', 'pulse' => true],
    'Spesialis Bedah'          => ['dot'=>'bg-orange-400', 'badge'=>'bg-orange-50 text-orange-700 border-orange-100',   'bar'=>'bg-orange-400'],
    'Spesialis Penyakit Dalam' => ['dot'=>'bg-sky-400',    'badge'=>'bg-sky-50 text-sky-700 border-sky-100',         'bar'=>'bg-sky-400'],
    'Anak & Kandungan'         => ['dot'=>'bg-pink-400',   'badge'=>'bg-pink-50 text-pink-700 border-pink-100',      'bar'=>'bg-pink-400'],
    'Neurologi & Jiwa'         => ['dot'=>'bg-violet-400', 'badge'=>'bg-violet-50 text-violet-700 border-violet-100','bar'=>'bg-violet-400'],
    'Indera & Kulit'           => ['dot'=>'bg-teal-400',   'badge'=>'bg-teal-50 text-teal-700 border-teal-100',      'bar'=>'bg-teal-400'],
    'Jantung & Paru'           => ['dot'=>'bg-rose-400',   'badge'=>'bg-rose-50 text-rose-700 border-rose-100',      'bar'=>'bg-rose-400'],
    'Penunjang & Diagnostik'   => ['dot'=>'bg-amber-400',  'badge'=>'bg-amber-50 text-amber-700 border-amber-100',   'bar'=>'bg-amber-400'],
    'Gigi & Mulut'             => ['dot'=>'bg-cyan-400',   'badge'=>'bg-cyan-50 text-cyan-700 border-cyan-100',      'bar'=>'bg-cyan-400'],
    'Rehabilitasi Medik'       => ['dot'=>'bg-emerald-400','badge'=>'bg-emerald-50 text-emerald-700 border-emerald-100','bar'=>'bg-emerald-400'],
    'Umum & Lainnya'           => ['dot'=>'bg-gray-400',   'badge'=>'bg-gray-50 text-gray-600 border-gray-200',      'bar'=>'bg-gray-400'],
];

// Alpine data — only what JS needs
$alpineDoctors = $allDoctors->map(fn($d) => [
    'name'           => $d->name,
    'specialty'      => $d->specialty,
    'poliklinik_name'=> $d->poliklinik ? $d->poliklinik->name : '-',
    'category'       => doctorCategory($d),
])->values();

// Filter based on Categories (More reliable than raw DB names for hosting)
$filterOptions = collect($categoryOrder)->map(fn($c) => [
    'value' => $c,
    'label' => str_replace(['Dokter Umum ', 'Spesialis '], '', $c)
])->values();
@endphp

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -top-20 -right-10 w-96 h-96 bg-emerald-700/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Tim Dokter</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Tim Medis Profesional</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Direktori <span class="text-emerald-400">Tim Dokter</span>
                </h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed mb-8">
                    Tenaga medis bersertifikasi dan berpengalaman, siap melayani pemulihan kesehatan Anda dengan penuh dedikasi dan profesionalisme.
                </p>
                <div class="flex flex-wrap gap-6">
                    @foreach([
                        ['num'=>$allDoctors->count(),       'label'=>'Dokter Aktif'],
                        ['num'=>$orderedGroups->count(),    'label'=>'Bidang Keahlian'],
                        ['num'=>$filterOptions->count(),    'label'=>'Kategori'],
                    ] as $s)
                    <div class="flex items-center gap-2">
                        <p class="text-xl font-black text-emerald-400">{{ $s['num'] }}</p>
                        <p class="text-[10px] font-bold text-emerald-300/60 tracking-widest uppercase leading-snug">{{ $s['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── ALPINE WRAPPER ── --}}
        <div class="container mx-auto px-4 md:px-8 py-12 max-w-7xl"
             x-data="{
                 search: '',
                 selectedSpecialty: 'Semua',
                 doctors: {{ \Illuminate\Support\Js::from($alpineDoctors) }},
                 matchDoctor(name, specialty, poliName, category) {
                     const matchSpec  = this.selectedSpecialty === 'Semua' || category === this.selectedSpecialty;
                     const q          = this.search.trim().toLowerCase();
                     const matchSearch= q === ''
                         || name.toLowerCase().includes(q)
                         || specialty.toLowerCase().includes(q);
                     return matchSpec && matchSearch;
                 },
                 get hasResults() {
                     return this.doctors.some(d => this.matchDoctor(d.name, d.specialty, d.poliklinik_name, d.category));
                 }
             }">

            {{-- ── FILTER BAR ── --}}
            <div class="flex flex-col sm:flex-row gap-3 mb-10 p-3 bg-white rounded-2xl border border-gray-100 shadow-sm relative z-10">
                {{-- Search --}}
                <div class="flex-grow relative">
                    <div class="absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <input x-model="search" type="text"
                           placeholder="Cari nama dokter atau spesialisasi…"
                           class="w-full pl-10 pr-4 py-2.5 text-sm border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-400 bg-gray-50 text-gray-700 placeholder-gray-400 transition-all"/>
                </div>
                {{-- Specialty --}}
                <div class="relative shrink-0">
                    <select x-model="selectedSpecialty"
                            class="appearance-none bg-gray-50 border border-gray-100 text-sm font-semibold text-gray-700 pl-4 pr-9 py-2.5 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500/30 cursor-pointer w-full sm:w-60">
                        <option value="Semua">Semua Kategori</option>
                        @foreach($filterOptions as $opt)
                        <option value="{{ $opt['value'] }}">{{ $opt['label'] }}</option>
                        @endforeach
                    </select>
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
                {{-- Live Count --}}
                <div class="flex items-center gap-2 shrink-0 bg-emerald-50 border border-emerald-100 rounded-xl px-4 py-2.5">
                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div>
                    <span class="text-[11px] font-bold text-emerald-700">
                        <span x-text="doctors.filter(d => matchDoctor(d.name, d.specialty, d.poliklinik_name, d.category)).length"></span>
                        dokter ditemukan
                    </span>
                </div>
            </div>

            {{-- ── CATEGORY SECTIONS ── --}}
            @foreach($orderedGroups as $category => $docs)
            @php
                $cs              = $categoryStyle[$category] ?? $categoryStyle['Umum & Lainnya'];
                $catSpecialties  = $docs->pluck('specialty')->unique()->values();
            @endphp

            {{-- Section visible when: dropdown matches OR is 'Semua' (individual doctor cards handle search) --}}
            <div class="mb-12"
                 x-show="selectedSpecialty === 'Semua' || selectedSpecialty === '{{ $category }}'">

                {{-- Section Header --}}
                <div class="flex items-center gap-3 mb-5">
                    <span class="w-2.5 h-2.5 rounded-full {{ $cs['dot'] }} shrink-0"></span>
                    <h2 class="text-base font-extrabold text-gray-900">{{ $category }}</h2>
                    <span class="text-[9px] font-bold tracking-widest border {{ $cs['badge'] }} px-3 py-1 rounded-full uppercase">
                        {{ $docs->count() }} Dokter
                    </span>
                </div>

                {{-- Doctor Cards --}}
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach($docs as $doctor)
                    <div x-show="matchDoctor('{{ addslashes($doctor->name) }}', '{{ addslashes($doctor->specialty) }}', '{{ addslashes($doctor->poliklinik ? $doctor->poliklinik->name : '-') }}', '{{ $category }}')"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="group bg-white rounded-3xl border border-gray-100 hover:border-emerald-300 shadow-sm hover:shadow-xl p-0 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden flex flex-col items-center">

                        {{-- Top banner (ID card lanyard effect) --}}
                        <div class="w-full h-16 {{ $cs['bar'] }} relative flex justify-center shrink-0">
                            {{-- Lanyard clip visual --}}
                            <div class="absolute -top-3 w-16 h-8 bg-white/20 blur-[2px] rounded-full"></div>
                        </div>

                        {{-- Photo --}}
                        <div class="relative -mt-10 mb-3 shrink-0 group-hover:scale-105 transition-transform duration-500 z-10">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden bg-white p-1.5 shadow-md">
                                <div class="w-full h-full rounded-full overflow-hidden bg-gray-50 border border-emerald-100">
                                    @if($doctor->photo)
                                        @php
                                            $photoPath = Str::startsWith($doctor->photo, ['http','//'])
                                                ? $doctor->photo
                                                : asset('assets/images/doctors/'.$doctor->photo);
                                        @endphp
                                        <img src="{{ $photoPath }}" alt="{{ $doctor->name }}"
                                             class="w-full h-full object-cover object-top">
                                    @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-emerald-50 to-emerald-100">
                                        @php
                                            $parts    = preg_split('/\s+/', preg_replace('/^(dr\.|drg\.|Dr\.)\s*/i','', $doctor->name));
                                            $initials = strtoupper(substr($parts[0]??'D',0,1).substr($parts[1]??'',0,1));
                                        @endphp
                                        <span class="text-xl font-black text-emerald-600">{{ $initials }}</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="absolute bottom-1 right-2 w-5 h-5 flex items-center justify-center rounded-full bg-white shadow-sm">
                                <div class="w-3.5 h-3.5 rounded-full {{ $cs['dot'] }} animate-pulse"></div>
                            </div>
                        </div>

                        {{-- Info --}}
                        <div class="flex-grow w-full flex flex-col items-center text-center px-5 pb-6 bg-white relative z-10">
                            <h3 class="text-sm sm:text-base font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-1.5 line-clamp-2 px-2">
                                {{ $doctor->name }}
                            </h3>
                            <span class="inline-block text-[10px] font-bold tracking-widest border {{ $cs['badge'] }} px-3 py-1 rounded-full uppercase mb-4 shadow-sm">
                                {{ Str::limit($doctor->specialty, 30) }}
                            </span>
                            
                            <div class="w-full h-px bg-gray-100 mb-4"></div>

                            <div class="flex flex-col items-center gap-2 w-full">
                                @if($doctor->schedule_text)
                                <div class="flex items-center justify-center gap-1.5 px-3 py-2 bg-gray-50 rounded-lg w-full group-hover:bg-emerald-50/50 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-[10px] text-gray-600 font-medium leading-snug truncate">{{ $doctor->schedule_text }}</span>
                                </div>
                                @endif
                                @if($doctor->poliklinik)
                                <div class="flex items-center justify-center gap-1.5 px-3 py-2 bg-gray-50 rounded-lg w-full group-hover:bg-emerald-50/50 transition-colors">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/></svg>
                                    <span class="text-[10px] text-gray-600 font-medium truncate">{{ $doctor->poliklinik->name }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

            {{-- ── NO RESULTS (pure Alpine) ── --}}
            <div x-show="!hasResults && (search.trim() !== '' || selectedSpecialty !== 'Semua')"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="text-center py-20">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-300 mx-auto mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-1">Dokter Tidak Ditemukan</h3>
                <p class="text-gray-500 text-sm mb-4 max-w-xs mx-auto">Coba kata kunci lain atau ubah pilihan spesialisasi.</p>
                <button @click="search=''; selectedSpecialty='Semua'"
                        class="text-emerald-600 text-xs font-bold tracking-widest hover:underline uppercase">
                    Reset Pencarian
                </button>
            </div>

            {{-- ── CTA ── --}}
            <div class="bg-emerald-950 rounded-2xl p-7 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-6 border border-white/5 mt-6">
                <div>
                    <p class="text-[10px] font-bold tracking-widest text-emerald-400 uppercase mb-1">Registrasi</p>
                    <h3 class="text-base font-extrabold text-white mb-1">Buat Janji & Pendaftaran Mudah</h3>
                    <p class="text-emerald-300/70 text-sm max-w-md">Hindari antrean panjang. Daftar via Mobile JKN (peserta BPJS) atau WhatsApp (pasien umum & asuransi).</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                    <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" target="_blank"
                       class="inline-flex items-center gap-2 bg-white text-emerald-900 font-bold text-xs tracking-widest px-5 py-3.5 rounded-xl hover:bg-emerald-50 transition-all">
                        <svg class="w-4 h-4 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                        Mobile JKN
                    </a>
                    <a href="https://wa.me/6285397616993" target="_blank"
                       class="inline-flex items-center gap-2 border border-emerald-700 text-emerald-400 hover:bg-emerald-900 font-bold text-xs tracking-widest px-5 py-3.5 rounded-xl transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771z"/></svg>
                        WA Pendaftaran
                    </a>
                    <a href="{{ route('jadwal-poliklinik') }}"
                       class="inline-flex items-center gap-2 border border-emerald-700 text-emerald-400 hover:bg-emerald-900 font-bold text-xs tracking-widest px-5 py-3.5 rounded-xl transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Jadwal Poli
                    </a>
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
