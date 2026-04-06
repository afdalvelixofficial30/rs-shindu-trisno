<!-- Section 9: FAQ -->
<section id="faq" class="py-20 bg-section-alt">
    <div class="container mx-auto px-4 md:px-6 max-w-4xl">
        
        <div class="text-center mb-16 reveal">
            <p class="text-emerald-600 font-semibold tracking-wider uppercase text-sm mb-2">Pusat Bantuan</p>
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 font-serif section-title section-title-center">Pertanyaan yang Sering Diajukan</h3>
        </div>

        <div class="space-y-4">
            @foreach($faqs as $index => $faq)
            <div class="faq-item bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden reveal delay-{{ ($index % 5) * 100 }}">
                <button class="faq-btn w-full px-6 py-5 flex items-center justify-between focus:outline-none hover:bg-slate-50 transition-colors">
                    <span class="font-bold text-gray-900 text-left pr-8 text-lg">{{ $faq['question'] }}</span>
                    <!-- Green arrow icon -->
                    <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center shrink-0 faq-icon transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </button>
                <div class="faq-answer px-6 bg-white text-gray-600 leading-relaxed border-t border-gray-50 {{ $index === 0 ? 'open' : '' }}">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
