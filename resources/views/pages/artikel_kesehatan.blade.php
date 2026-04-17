@extends('layouts.app')
@section('title', 'Artikel Kesehatan & Edukasi - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-emerald-700/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Artikel Kesehatan</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Edukasi & Informasi Medis</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Artikel <span class="text-emerald-400">Kesehatan</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Konten edukasi kesehatan, tips hidup sehat, dan informasi medis dari tim dokter dan tenaga medis RS Dr. Sindhu Trisno.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-14 max-w-6xl">

            @if($articles->count() > 0)

            {{-- Featured Article --}}
            @php $featured = $articles->first(); @endphp
            <div class="mb-10">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-5 uppercase">Artikel Utama</p>
                <a href="{{ route('berita.show', $featured->slug) }}"
                   class="group flex flex-col md:flex-row gap-6 bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg overflow-hidden transition-all duration-300">
                    <div class="md:w-1/2 h-56 md:h-auto bg-gray-100 overflow-hidden">
                        @if($featured->thumbnail)
                        <img src="{{ asset('storage/'.$featured->thumbnail) }}" alt="{{ $featured->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-emerald-900 to-emerald-700 flex items-center justify-center">
                            <svg class="w-16 h-16 text-emerald-400/30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        @endif
                    </div>
                    <div class="md:w-1/2 p-7 flex flex-col justify-center">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-[9px] font-bold tracking-widest text-emerald-600 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-full uppercase">
                                {{ $featured->category ?? 'Kesehatan' }}
                            </span>
                            <span class="text-[10px] text-gray-400">{{ $featured->created_at->format('d M Y') }}</span>
                        </div>
                        <h2 class="text-xl md:text-2xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-3">
                            {{ $featured->title }}
                        </h2>
                        @if($featured->excerpt)
                        <p class="text-sm text-gray-500 leading-relaxed mb-5 line-clamp-3">{{ $featured->excerpt }}</p>
                        @endif
                        <div class="flex items-center gap-2 text-[10px] font-bold tracking-widest text-emerald-600 uppercase group-hover:gap-3 transition-all">
                            Baca Artikel <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Grid Articles --}}
            @if($articles->count() > 1)
            <div class="mb-10">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-5 uppercase">Artikel Lainnya</p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach($articles->skip(1) as $article)
                    <a href="{{ route('berita.show', $article->slug) }}"
                       class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-1 flex flex-col">
                        <div class="h-44 bg-gray-50 overflow-hidden">
                            @if($article->thumbnail)
                            <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="{{ $article->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                            <div class="w-full h-full bg-gradient-to-br from-emerald-50 to-emerald-100 flex items-center justify-center">
                                <svg class="w-10 h-10 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            </div>
                            @endif
                        </div>
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-[9px] font-bold tracking-widest text-emerald-600 bg-emerald-50 border border-emerald-100 px-2 py-0.5 rounded-full uppercase">
                                    {{ $article->category ?? 'Kesehatan' }}
                                </span>
                                <span class="text-[10px] text-gray-400">{{ $article->created_at->format('d M Y') }}</span>
                            </div>
                            <h3 class="text-sm font-bold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-2 line-clamp-2 flex-grow">
                                {{ $article->title }}
                            </h3>
                            <div class="flex items-center gap-1.5 mt-3 text-[10px] font-bold tracking-widest text-emerald-600 uppercase group-hover:gap-2 transition-all">
                                Baca <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- Pagination --}}
            <div class="flex justify-center">
                {{ $articles->links() }}
            </div>

            @else
            {{-- Empty State --}}
            <div class="text-center py-24">
                <div class="w-16 h-16 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-300 mx-auto mb-5">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Belum Ada Artikel</h3>
                <p class="text-gray-500 text-sm max-w-sm mx-auto">Artikel kesehatan dari tim medis RS Dr. Sindhu Trisno akan segera hadir.</p>
            </div>
            @endif

        </div>
    </main>
    @include('partials.footer')
@endsection
