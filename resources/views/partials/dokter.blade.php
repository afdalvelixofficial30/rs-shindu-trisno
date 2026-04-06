<!-- Section 7: Dokter Spesialis -->
<section id="dokter" class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4 md:px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal">
            <div class="max-w-xl">
                <p class="text-emerald-600 font-semibold tracking-wider uppercase text-sm mb-2">Tim Medis Kkami</p>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 font-serif section-title">Dokter Spesialis Terbaik</h3>
            </div>
            
            <!-- Carousel Controls -->
            <div class="flex gap-2 mt-6 md:mt-0">
                <button id="carousel-prev" class="w-12 h-12 rounded-full border-2 border-emerald-100 flex items-center justify-center text-emerald-800 hover:bg-emerald-800 hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="carousel-next" class="w-12 h-12 rounded-full border-2 border-emerald-100 flex items-center justify-center text-emerald-800 hover:bg-emerald-800 hover:text-white transition-all shadow-sm">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>

        <div class="doctor-carousel reveal delay-200 py-4 -mx-4 px-4 overflow-x-hidden relative">
            <div id="doctor-track" class="doctor-track pb-8">
                
                @foreach($doctors as $doctor)
                <div class="doctor-card shrink-0 w-[calc(100%-2rem)] md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1rem)] bg-white rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition-transform duration-300">
                    <div class="p-6">
                        <div class="flex gap-4 items-center mb-6">
                            <!-- Initials Avatar mapping to image requirement -->
                            <div class="w-20 h-20 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center shrink-0 overflow-hidden relative group">
                                @if($doctor['photo'])
                                    <img src="{{ $doctor['photo'] }}" class="w-full h-full object-cover">
                                @else
                                    <span class="text-2xl font-bold text-emerald-800/20 group-hover:text-emerald-800/40 transition-colors">{{ $doctor['initials'] }}</span>
                                    <svg class="absolute bottom-0 right-0 w-8 h-8 text-slate-200 translate-y-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                @endif
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-lg leading-tight">{{ $doctor['name'] }}</h4>
                                <p class="text-emerald-600 text-sm font-medium mt-1">{{ $doctor['specialist'] }}</p>
                            </div>
                        </div>
                        
                        <div class="bg-emerald-50/50 rounded-xl p-4 border border-emerald-50">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-xs text-gray-500 font-semibold uppercase tracking-wider">Status</span>
                                @if($doctor['available'])
                                    <span class="badge-available flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Tersedia
                                    </span>
                                @else
                                    <span class="badge-unavailable flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> Tidak Tersedia
                                    </span>
                                @endif
                            </div>
                            <div class="flex items-start gap-2 mt-3">
                                <svg class="w-4 h-4 text-emerald-700 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-sm text-gray-700 font-medium">{{ $doctor['schedule'] }}</span>
                            </div>
                        </div>
                        
                        <button class="w-full mt-4 btn-outline-green py-2.5 rounded-xl font-semibold text-sm">
                            Buat Janji Temu
                        </button>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>

    </div>
</section>
