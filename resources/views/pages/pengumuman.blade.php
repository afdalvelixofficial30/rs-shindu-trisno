@extends('layouts.app')
@section('title', 'Pengumuman Resmi - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Pengumuman Resmi</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Informasi Resmi</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Pengumuman <span class="text-emerald-400">Resmi</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Informasi, kebijakan, dan pemberitahuan resmi dari manajemen RS Tkt. III Dr. Sindhu Trisno Palu.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-14 max-w-5xl">

            {{-- Sticky Badge --}}
            <div class="flex items-center gap-3 mb-8 p-4 bg-amber-50 border border-amber-100 rounded-xl">
                <svg class="w-5 h-5 text-amber-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                <p class="text-sm text-amber-700 font-semibold">Halaman ini memuat pengumuman dan pemberitahuan resmi dari Manajemen RS Dr. Sindhu Trisno.</p>
            </div>

            @if($articles->count() > 0)

            {{-- Article List --}}
            <div class="space-y-4 mb-10">
                @foreach($articles as $article)
                <a href="{{ route('berita.show', $article->slug) }}"
                   class="group flex flex-col sm:flex-row gap-5 bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-5 transition-all duration-300 hover:-translate-y-0.5">

                    {{-- Thumbnail --}}
                    @if($article->thumbnail)
                    <div class="w-full sm:w-40 h-28 rounded-xl overflow-hidden shrink-0 bg-gray-50">
                        <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="{{ $article->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    @else
                    <div class="w-full sm:w-40 h-28 rounded-xl bg-emerald-50 flex items-center justify-center shrink-0">
                        <svg class="w-8 h-8 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                    </div>
                    @endif

                    {{-- Content --}}
                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-[9px] font-bold tracking-widest text-emerald-600 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded-full uppercase">
                                    {{ $article->category ?? 'Pengumuman' }}
                                </span>
                                <span class="text-[10px] text-gray-400">{{ $article->created_at->format('d M Y') }}</span>
                            </div>
                            <h2 class="text-sm font-bold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-2 line-clamp-2">
                                {{ $article->title }}
                            </h2>
                            @if($article->excerpt)
                            <p class="text-xs text-gray-500 leading-relaxed line-clamp-2">{{ $article->excerpt }}</p>
                            @endif
                        </div>
                        <div class="flex items-center gap-1.5 mt-3 text-[10px] font-bold tracking-widest text-emerald-600 uppercase group-hover:gap-2.5 transition-all">
                            Baca Selengkapnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-center">
                {{ $articles->links() }}
            </div>

            @else
            {{-- Empty State --}}
            <div class="text-center py-24">
                <div class="w-16 h-16 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-300 mx-auto mb-5">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Belum Ada Pengumuman</h3>
                <p class="text-gray-500 text-sm max-w-sm mx-auto">Pengumuman resmi dari RS Dr. Sindhu Trisno akan ditampilkan di sini.</p>
            </div>
            @endif

        </div>
    </main>
    @include('partials.footer')
@endsection
