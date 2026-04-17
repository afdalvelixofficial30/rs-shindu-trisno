@extends('layouts.app')
@section('title', $article->title . ' - RS Dr. Sindhu Trisno Palu')

@section('content')
    @include('partials.header')

    <main class="bg-white min-h-screen pt-28 pb-24">
        <div class="container mx-auto px-4 md:px-8 max-w-6xl">
            
            <div class="grid lg:grid-cols-12 gap-16">
                
                <!-- Main Content Area -->
                <div class="lg:col-span-8">
                    <!-- Article Header -->
                    <div class="mb-12 reveal">
                        <div class="inline-flex items-center gap-2 mb-6 border border-emerald-100 bg-emerald-50 px-4 py-1.5 rounded-full">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                            <span class="text-emerald-700 text-[10px] font-bold  tracking-widest">{{ $article->category }}</span>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-[1.15] mb-6 tracking-tight">
                            {{ $article->title }}
                        </h1>
                        <div class="flex items-center gap-6 text-sm font-bold text-gray-400">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                Humas RS DS Trisno
                            </span>
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                {{ $article->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>

                    <!-- Article Body -->
                    <div class="reveal delay-100">
                        <div class="aspect-[16/9] w-full rounded-3xl overflow-hidden shadow-2xl mb-12 border border-gray-100">
                            <img src="{{ $article->cover_image_url ?? asset('assets/images/placeholder_news.jpg') }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                        </div>
                        
                        <article class="prose prose-lg prose-emerald max-w-none prose-headings:font-bold prose-p:leading-relaxed prose-p:text-gray-600 prose-img:rounded-3xl">
                            {!! $article->content !!}
                        </article>
                    </div>

                    <!-- Share Section -->
                    <div class="mt-20 pt-10 border-t border-gray-100 reveal">
                        <p class="text-sm font-bold text-gray-900 mb-4 tracking-tight">BAGIKAN ARTIKEL INI</p>
                        <div class="flex gap-3">
                            @foreach(['Instagram', 'Facebook', 'Twitter', 'WhatsApp'] as $social)
                                <a href="#" class="px-5 py-2.5 rounded-full bg-slate-50 border border-slate-100 text-xs font-bold text-gray-700 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all">
                                    {{ $social }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Related Articles) -->
                <aside class="lg:col-span-4 self-start space-y-12 reveal delay-200 lg:sticky lg:top-32">
                    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100 pb-4">
                        <h3 class="text-lg font-bold text-gray-900 mb-8 flex justify-between items-center">
                            Baca Juga
                            <a href="{{ url('/berita') }}" class="text-[10px] text-emerald-700 hover:underline">LIHAT SEMUA</a>
                        </h3>
                        <div class="space-y-8">
                            @foreach($recent as $post)
                                <a href="{{ url('/berita/'.$post->slug) }}" class="group block">
                                    <p class="text-[10px] font-bold text-emerald-600 mb-1.5 ">{{ $post->category }}</p>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-emerald-700 transition-all leading-snug line-clamp-2">
                                        {{ $post->title }}
                                    </h4>
                                    <p class="text-[11px] text-gray-400 mt-2">{{ $post->created_at->format('d M Y') }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
