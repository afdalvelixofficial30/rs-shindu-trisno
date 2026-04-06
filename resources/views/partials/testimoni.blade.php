<!-- Section 8: Testimoni Pasien -->
<section class="py-24 bg-emerald-900 relative">
    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mix-blend-overlay"></div>
    <div class="container mx-auto px-4 md:px-6 relative z-10">
        
        <div class="text-center max-w-2xl mx-auto mb-16 reveal text-white">
            <h3 class="text-3xl md:text-4xl font-bold mb-4 font-serif section-title section-title-center">Apa Kata Mereka?</h3>
            <p class="text-emerald-100">Kisah nyata dari pasien kami yang telah merasakan pelayanan di RS Dr. Sindhu Trisno.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            
            @foreach($testimonials as $testi)
            <div class="{{ $testi['dark'] ? 'bg-emerald-950 text-white border-emerald-800' : 'bg-white text-gray-900 border-white' }} p-8 rounded-3xl shadow-xl border reveal {{ $loop->index == 1 ? 'delay-200 lg:-translate-y-4' : ($loop->index == 2 ? 'delay-300' : 'delay-100') }}">
                
                <div class="flex gap-1 mb-6">
                    @for($i=0; $i<$testi['rating']; $i++)
                        <svg class="w-5 h-5 star-gold drop-shadow-sm" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>

                <p class="mb-8 text-lg leading-relaxed {{ $testi['dark'] ? 'text-emerald-50' : 'text-gray-600' }}">
                    "{{ $testi['text'] }}"
                </p>

                <div class="flex items-center gap-4 border-t {{ $testi['dark'] ? 'border-emerald-800/50' : 'border-gray-100' }} pt-6">
                    <!-- Initials circle dark/charcoal or green -->
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-white shrink-0 {{ $testi['dark'] ? 'bg-emerald-800' : 'bg-emerald-900' }}">
                        {{ $testi['initials'] }}
                    </div>
                    <div>
                        <h4 class="font-bold text-base {{ $testi['dark'] ? 'text-white' : 'text-gray-900' }}">{{ $testi['name'] }}</h4>
                        <p class="text-sm {{ $testi['dark'] ? 'text-emerald-400' : 'text-emerald-600' }}">{{ $testi['city'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
