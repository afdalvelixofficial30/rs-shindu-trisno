@extends('layouts.app')
@section('title', 'Galeri Kegiatan - RS Tkt. III Dr. Sindhu Trisno')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Galeri Kegiatan</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Berita & Edukasi</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Galeri <span class="text-emerald-400">Kegiatan RS</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Dokumentasi kegiatan, program, dan momen penting di RS Tkt. III Dr. Sindhu Trisno Palu.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">

            {{-- Coming soon placeholder --}}
            <div class="text-center py-24">
                <div class="w-20 h-20 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-400 mx-auto mb-6">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-3">Galeri Sedang Disiapkan</h2>
                <p class="text-gray-500 text-sm max-w-md mx-auto leading-relaxed mb-8">Halaman galeri kegiatan sedang dalam proses persiapan konten. Sementara itu, simak berita dan artikel terbaru dari RS kami.</p>
                <a href="{{ route('berita.index') }}" class="inline-flex items-center gap-2 bg-emerald-700 hover:bg-emerald-600 text-white text-xs font-bold tracking-widest px-6 py-3.5 rounded-xl transition-all">
                    Lihat Berita & Artikel <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
