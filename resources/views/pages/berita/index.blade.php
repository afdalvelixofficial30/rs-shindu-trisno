@extends('layouts.app')
@section('title', 'Berita & Edukasi - RS Tkt. III Dr. Sindhu Trisno Palu')

@section('content')
    @include('partials.header')

    <main class="bg-slate-50 min-h-screen">
        <!-- Hero Header -->
        <div class="bg-emerald-900 py-16">
            <div class="container mx-auto px-4 md:px-8 text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Berita & Edukasi Kesehatan</h1>
                <p class="text-emerald-100/80 max-w-xl mx-auto font-medium">
                    Informasi terkini mengenai layanan rumah sakit, tips kesehatan, dan berita terbaru dari RS Dr. Sindhu Trisno.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16">
            <div class="grid lg:grid-cols-12 gap-10">
                
                <!-- Articles Feed -->
                <div class="lg:col-span-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        @forelse($articles as $article)
                            <article class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group reveal">
                                <div class="relative overflow-hidden aspect-[16/10]">
                                    <img src="{{ $article->cover_image_url ?? asset('assets/images/placeholder_news.jpg') }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span class="px-3 py-1 bg-white/90 backdrop-blur text-emerald-800 text-[10px] font-bold rounded-lg shadow-sm  tracking-widest">
                                            {{ $article->category }}
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <p class="text-xs font-bold text-gray-400 mb-2  tracking-tight">{{ $article->created_at->format('d M Y') }}</p>
                                    <h2 class="text-xl font-bold text-gray-900 group-hover:text-emerald-700 transition-colors line-clamp-2 mb-4 leading-snug">
                                        <a href="{{ url('/berita/'.$article->slug) }}">{{ $article->title }}</a>
                                    </h2>
                                    <p class="text-gray-500 text-sm line-clamp-3 mb-6">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                                    <a href="{{ url('/berita/'.$article->slug) }}" class="inline-flex items-center gap-2 text-emerald-700 text-sm font-bold hover:gap-3 transition-all">
                                        BACA SELENGKAPNYA
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </div>
                            </article>
                        @empty
                            <p class="col-span-full py-20 text-center text-gray-400 font-medium ">Belum ada berita yang diterbitkan.</p>
                        @endforelse
                    </div>

                    <div class="mt-12">
                        {{ $articles->links() }}
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-10">
                    <!-- Categories Widget -->
                    <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm reveal">
                        <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="h-6 w-1.5 bg-emerald-600 rounded-full"></span>
                            Kategori Berita
                        </h3>
                        <div class="space-y-3">
                            @foreach($categories as $category)
                                <a href="#" class="flex items-center justify-between p-3 rounded-2xl hover:bg-emerald-50 text-gray-600 hover:text-emerald-800 transition-all font-bold text-sm">
                                    {{ $category }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Newsletter/CTA Widget -->
                    <div class="bg-emerald-800 rounded-3xl p-8 text-white relative overflow-hidden reveal">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16"></div>
                        <h3 class="text-xl font-bold mb-4 relative z-10">Daftar Newsletter</h3>
                        <p class="text-emerald-100/70 text-sm mb-6 relative z-10 font-medium">Berlangganan info kesehatan dan berita terbaru kami!</p>
                        <form class="space-y-3 relative z-10">
                            <input type="email" placeholder="Email Anda" class="w-full bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 placeholder:text-emerald-100/40">
                            <button type="submit" class="w-full bg-white text-emerald-900 py-3 rounded-xl font-bold text-sm  shadow-lg">BERLANGGANAN</button>
                        </form>
                    </div>
                </aside>

            </div>
        </div>
    </main>

    @include('partials.footer')
@endsection
