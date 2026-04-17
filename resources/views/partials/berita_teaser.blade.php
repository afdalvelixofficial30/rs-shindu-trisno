<!-- Section: Berita & Artikel Terbaru -->
<section id="berita" class="py-20 bg-gradient-to-br from-white via-emerald-50/40 to-white relative overflow-hidden">
    <div class="container mx-auto px-4 md:px-8 relative z-10">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 reveal">
            <div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Edukasi &amp; Info</p>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                    Berita &amp; <span class="text-emerald-700">Artikel Terbaru</span>
                </h2>
            </div>
            <a href="{{ route('berita.index') }}"
                class="group inline-flex items-center gap-3 text-xs font-bold tracking-widest text-emerald-800 hover:text-emerald-600 transition-all shrink-0">
                LIHAT SEMUA BERITA
                <div
                    class="w-9 h-9 rounded-full bg-white shadow-sm border border-emerald-100 flex items-center justify-center group-hover:bg-emerald-700 group-hover:text-white transition-all group-hover:translate-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        </div>

        <!-- Articles Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($articles as $article)
                <div class="reveal delay-{{ ($loop->index % 3) * 100 }} group h-full">
                    <a href="{{ route('berita.show', $article->slug) }}"
                        class="flex flex-col h-full bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1 overflow-hidden">

                        <!-- Cover Image -->
                        <div class="relative aspect-[16/10] overflow-hidden">
                            <img src="{{ $article->cover_image_url ?? 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' }}"
                                alt="{{ $article->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-white/90 backdrop-blur-sm text-emerald-700 text-[9px] font-bold px-3 py-1.5 rounded-full tracking-widest uppercase border border-emerald-100">
                                    {{ $article->category }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5 flex flex-col flex-grow">
                            <div
                                class="flex items-center gap-2 text-[10px] font-semibold text-emerald-600 tracking-widest mb-3 uppercase">
                                <span>{{ $article->created_at->format('d M Y') }}</span>
                                <span class="w-1 h-1 rounded-full bg-emerald-200"></span>
                                <span>Edukasi Medis</span>
                            </div>

                            <h3
                                class="text-sm font-bold text-gray-900 mb-3 leading-snug group-hover:text-emerald-700 transition-colors line-clamp-2">
                                {{ Str::limit($article->title, 65) }}
                            </h3>

                            <p class="text-gray-500 text-xs leading-relaxed flex-grow line-clamp-3">
                                {{ Str::limit(strip_tags($article->content), 110) }}
                            </p>

                            <div
                                class="mt-4 pt-4 border-t border-gray-50 flex items-center gap-1.5 text-[10px] font-bold tracking-widest text-emerald-700 uppercase group-hover:gap-2.5 transition-all">
                                Baca Selengkapnya
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="M14 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>

                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section>