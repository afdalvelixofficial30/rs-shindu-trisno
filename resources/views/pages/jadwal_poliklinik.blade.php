@extends('layouts.app')
@section('title', 'Jadwal Poliklinik - RS Tkt. III Dr. Sindhu Trisno Palu')

@php
$polikliniksList = [];

foreach($polikliniks as $poli) {
    if ($poli->doctors->isEmpty()) continue;
    
    $pagiDocs = [];
    $siangDocs = [];
    $soreDocs = [];

    foreach($poli->doctors as $doc) {
        $timeStr = strtolower($doc->schedule_text);
        if (preg_match('/(0[7-9]|10)[:\.]/', $timeStr)) {
            $pagiDocs[] = $doc;
        } elseif (preg_match('/(1[1-4])[:\.]/', $timeStr)) {
            $siangDocs[] = $doc;
        } elseif (preg_match('/(1[5-8])[:\.]/', $timeStr)) {
            $soreDocs[] = $doc;
        } else {
            // Default ke pagi kalau sulit di-parsing atau kosong
            $pagiDocs[] = $doc; 
        }
    }

    $icon = 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4';

    if (count($pagiDocs) > 0) {
        $polikliniksList[] = ['shift'=>'Pagi', 'name'=>'Klinik ' . $poli->name, 'schedule'=>'Sesuai Jadwal Dokter', 'icon'=>$icon, 'doctors'=>collect($pagiDocs)];
    }
    if (count($siangDocs) > 0) {
        $polikliniksList[] = ['shift'=>'Siang', 'name'=>'Klinik ' . $poli->name, 'schedule'=>'Sesuai Jadwal Dokter', 'icon'=>$icon, 'doctors'=>collect($siangDocs)];
    }
    if (count($soreDocs) > 0) {
        $polikliniksList[] = ['shift'=>'Sore', 'name'=>'Klinik ' . $poli->name, 'schedule'=>'Sesuai Jadwal Dokter', 'icon'=>$icon, 'doctors'=>collect($soreDocs)];
    }
}

// Prepare flat array for Alpine: only name & shift needed for filter detection
$clinicsForAlpine = array_map(fn($p) => [
    'name' => $p['name'], 
    'shift' => $p['shift'],
    'docs' => $p['doctors']->pluck('name')->implode(' ')
], $polikliniksList);

$shiftMeta = [
    'Pagi'  => ['time'=>'08.00 – 11.10', 'badge'=>'bg-amber-50 text-amber-700 border-amber-100', 'dot'=>'bg-amber-400',  'bar'=>'bg-amber-400'],
    'Siang' => ['time'=>'12.00 – 13.00', 'badge'=>'bg-sky-50 text-sky-700 border-sky-100',       'dot'=>'bg-sky-400',    'bar'=>'bg-sky-400'],
    'Sore'  => ['time'=>'14.00 – 16.20', 'badge'=>'bg-violet-50 text-violet-700 border-violet-100','dot'=>'bg-violet-400','bar'=>'bg-violet-400'],
];
@endphp

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
                    <span class="text-emerald-300">Jadwal Poliklinik</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Rawat Jalan</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">
                    Jadwal <span class="text-emerald-400">Poliklinik</span>
                </h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed mb-8">
                    {{ count($polikliniksList) }} poliklinik spesialis tersedia dalam 3 sift layanan setiap Senin – Jumat.
                </p>
                <div class="flex flex-wrap gap-6">
                    @foreach([['num'=>count($polikliniksList),'label'=>'Poliklinik'],['num'=>'3','label'=>'Sift'],['num'=>'Senin – Jumat','label'=>'Hari Layanan']] as $s)
                    <div class="flex items-center gap-2">
                        <p class="text-xl font-black text-emerald-400">{{ $s['num'] }}</p>
                        <p class="text-[10px] font-bold text-emerald-300/60 tracking-widest uppercase">{{ $s['label'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- ── ALPINE MAIN SECTION ── --}}
        <div class="container mx-auto px-4 md:px-8 py-12 max-w-7xl"
             x-data="{
                 search: '',
                 activeShift: 'Semua',
                 clinics: {{ \Illuminate\Support\Js::from($clinicsForAlpine) }},
                 matchesFilter(name, shift, docs) {
                     const s = this.search.toLowerCase().trim();
                     const matchShift = this.activeShift === 'Semua' || this.activeShift === shift;
                     const matchName  = s === '' || name.toLowerCase().includes(s) || (docs && docs.toLowerCase().includes(s));
                     return matchShift && matchName;
                 },
                 get hasResults() {
                     return this.clinics.some(c => this.matchesFilter(c.name, c.shift, c.docs));
                 }
             }">

            {{-- ── FILTER BAR ── --}}
            <div class="flex flex-col sm:flex-row gap-3 mb-10 p-3 bg-white rounded-2xl border border-gray-100 shadow-sm relative z-30">
                {{-- Search --}}
                <div class="flex-grow relative">
                    <div class="absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input x-model="search" type="text"
                           placeholder="Cari nama klinik atau spesialisasi…"
                           class="w-full pl-10 pr-4 py-2.5 text-sm border border-gray-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500/30 focus:border-emerald-400 bg-gray-50 text-gray-700 placeholder-gray-400 transition-all"/>
                </div>
                {{-- Shift Tabs --}}
                <div class="flex items-center gap-1 bg-gray-50 p-1 rounded-xl shrink-0 flex-wrap">
                    @php
                        $cSemua = count($polikliniksList);
                        $cPagi  = count(array_filter($polikliniksList, fn($p) => $p['shift'] === 'Pagi'));
                        $cSiang = count(array_filter($polikliniksList, fn($p) => $p['shift'] === 'Siang'));
                        $cSore  = count(array_filter($polikliniksList, fn($p) => $p['shift'] === 'Sore'));
                    @endphp
                    @foreach(['Semua'=>"Semua ($cSemua)",'Pagi'=>"Pagi ($cPagi)",'Siang'=>"Siang ($cSiang)",'Sore'=>"Sore ($cSore)"] as $val=>$label)
                    <button @click="activeShift = '{{ $val }}'"
                            :class="activeShift === '{{ $val }}' ? 'bg-white shadow-sm text-emerald-700 font-bold' : 'text-gray-500 hover:text-gray-700'"
                            class="px-3.5 py-2 rounded-lg text-xs font-semibold transition-all duration-200 whitespace-nowrap">
                        {{ $label }}
                    </button>
                    @endforeach
                </div>
            </div>

            {{-- ── SHIFT SECTIONS ── --}}
            @foreach(['Pagi','Siang','Sore'] as $shift)
            @php
                $polisInShift = array_filter($polikliniksList, fn($p) => $p['shift'] === $shift);
                $sm = $shiftMeta[$shift];
            @endphp

            <div class="mb-12" x-show="activeShift === 'Semua' || activeShift === '{{ $shift }}'">
                {{-- Section header --}}
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-2.5 h-2.5 rounded-full {{ $sm['dot'] }} shrink-0"></span>
                    <h2 class="text-base font-extrabold text-gray-900 tracking-tight">Poliklinik {{ $shift }}</h2>
                    <span class="text-[10px] font-bold tracking-widest border {{ $sm['badge'] }} px-3 py-1 rounded-full">
                        {{ $sm['time'] }} WITA
                    </span>
                </div>

                {{-- Cards --}}
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach($polisInShift as $poli)
                    @php 
                        $safeName = addslashes($poli['name']); 
                        $docsStr = addslashes($poli['doctors']->pluck('name')->implode(' '));
                    @endphp
                    <div x-show="matchesFilter('{{ $safeName }}', '{{ $poli['shift'] }}', '{{ $docsStr }}')"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 scale-95"
                         x-transition:enter-end="opacity-100 scale-100"
                         class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-5 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden flex flex-col">

                        <span class="absolute left-0 top-5 bottom-5 w-[3px] {{ $sm['bar'] }} rounded-r-full opacity-0 group-hover:opacity-100 transition-all duration-300"></span>

                        {{-- Top row --}}
                        <div class="flex items-start justify-between mb-4 relative z-10">
                            <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $poli['icon'] }}"/>
                                </svg>
                            </div>
                            <span class="text-[9px] font-bold tracking-widest border {{ $sm['badge'] }} px-2 py-0.5 rounded-full">{{ $shift }}</span>
                        </div>

                        {{-- Name --}}
                        <h3 class="text-sm font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-1 relative z-10">
                            {{ $poli['name'] }}
                        </h3>

                        {{-- Time + Days --}}
                        <div class="flex items-center gap-1.5 mb-4 relative z-10">
                            <svg class="w-3 h-3 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-[10px] text-gray-400 font-semibold">{{ $poli['schedule'] }}</span>
                        </div>

                        <div class="pt-3 border-t border-gray-50 space-y-3 flex-grow relative z-10">
                            @foreach($poli['doctors'] as $doctor)
                            <div class="flex items-start gap-2.5">
                                <div class="w-8 h-8 rounded-full overflow-hidden bg-emerald-50 border border-emerald-100 flex items-center justify-center shrink-0">
                                    @if($doctor->photo && file_exists(public_path('assets/images/doctors/'.$doctor->photo)))
                                        <img src="{{ asset('assets/images/doctors/'.$doctor->photo) }}" alt="{{ $doctor->name }}" class="w-full h-full object-cover">
                                    @else
                                        @php
                                            $clean    = preg_replace('/^(dr\.|drg\.|Dr\.)\s*/i', '', $doctor->name);
                                            $parts    = preg_split('/\s+/', trim($clean));
                                            $initials = strtoupper(substr($parts[0] ?? 'D', 0, 1) . (substr($parts[1] ?? '', 0, 1)));
                                        @endphp
                                        <span class="text-[9px] font-black text-emerald-700">{{ $initials }}</span>
                                    @endif
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-xs text-gray-800 leading-tight font-bold mb-0.5">{{ $doctor->name }}</p>
                                    @if($doctor->schedule_text)
                                    <p class="text-[9px] font-semibold text-emerald-600 bg-emerald-50 w-fit px-1.5 py-0.5 rounded">{{ $doctor->schedule_text }}</p>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

            {{-- ── NO RESULTS (pure Alpine, no PHP loop in x-show) ── --}}
            <div x-show="!hasResults && search.trim() !== ''"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="text-center py-20">
                <div class="w-14 h-14 rounded-2xl bg-gray-50 flex items-center justify-center text-gray-300 mx-auto mb-4">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <h3 class="text-base font-bold text-gray-900 mb-1">Tidak Ditemukan</h3>
                <p class="text-gray-500 text-sm mb-4">Coba kata kunci lain atau pilih sift yang berbeda.</p>
                <button @click="search=''; activeShift='Semua'"
                        class="text-emerald-600 text-xs font-bold tracking-widest hover:underline uppercase">
                    Reset Pencarian
                </button>
            </div>



            {{-- ── CTA ── --}}
            <div class="bg-emerald-950 rounded-2xl p-7 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-6 border border-white/5 mt-6">
                <div>
                    <h3 class="text-base font-extrabold text-white mb-1">Daftar Lebih Mudah & Cepat</h3>
                    <p class="text-emerald-300/70 text-sm max-w-md">Terintegrasi dengan Mobile JKN BPJS Kesehatan. Pasien umum juga dapat mendaftar via WhatsApp.</p>
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
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
