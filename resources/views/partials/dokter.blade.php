@php
// Mengambil data dokter langsung dari Database secara dinamis beserta data poliklinik-nya
$allDoctors = \App\Models\Doctor::where('is_active', true)->get();
@endphp

<!-- Section: Dokter Kami -->
<section id="dokter" class="py-24 bg-emerald-50/50 overflow-hidden relative border-t border-emerald-100/30">
    <div class="container mx-auto px-4 md:px-8 relative z-10">

        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14 reveal">
            <div class="max-w-2xl">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-3 uppercase">Tim Medis Profesional</p>
                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-950 tracking-tight leading-tight">Dokter Spesialis <br/><span class="text-emerald-700">&amp; Praktisi Umum</span></h2>
            </div>
            <a href="{{ route('dokter') }}" class="group inline-flex items-center gap-3 text-xs font-bold tracking-widest text-emerald-800 hover:text-emerald-600 transition-all shrink-0">
                LIHAT SEMUA DOKTER
                <div class="w-9 h-9 rounded-full bg-white shadow-sm border border-emerald-100 flex items-center justify-center group-hover:bg-emerald-700 group-hover:text-white transition-all group-hover:translate-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                </div>
            </a>
        </div>

        <!-- Carousel Wrapper -->
        <div class="relative group/carousel">

            <!-- Nav: Prev -->
            <button
                onclick="document.getElementById('doctor-scroll').scrollBy({left: -340, behavior: 'smooth'})"
                class="absolute -left-3 md:-left-5 top-1/2 -translate-y-1/2 z-30 w-10 h-10 bg-white rounded-full shadow-lg border border-gray-100 flex items-center justify-center text-emerald-700 opacity-0 group-hover/carousel:opacity-100 transition-all hover:bg-emerald-600 hover:text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <!-- Nav: Next -->
            <button
                onclick="document.getElementById('doctor-scroll').scrollBy({left: 340, behavior: 'smooth'})"
                class="absolute -right-3 md:-right-5 top-1/2 -translate-y-1/2 z-30 w-10 h-10 bg-white rounded-full shadow-lg border border-gray-100 flex items-center justify-center text-emerald-700 opacity-0 group-hover/carousel:opacity-100 transition-all hover:bg-emerald-600 hover:text-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>

            <!-- Scroll Track -->
            <div id="doctor-scroll"
                class="flex overflow-x-auto snap-x snap-mandatory gap-5 pb-4 scroll-smooth"
                style="scrollbar-width: none; -ms-overflow-style: none;">

                @foreach($allDoctors as $doctor)
                <div class="shrink-0 snap-start group reveal">
                    <div class="bg-white rounded-3xl border border-gray-100 hover:border-emerald-300 shadow-sm hover:shadow-xl p-0 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden flex flex-col items-center w-[230px] md:w-[260px] h-full">

                        {{-- Top banner (ID card lanyard effect) --}}
                        <div class="w-full h-14 bg-emerald-500 relative flex justify-center shrink-0">
                            {{-- Lanyard clip visual --}}
                            <div class="absolute -top-2 w-14 h-6 bg-white/20 blur-[2px] rounded-full"></div>
                        </div>

                        {{-- Photo --}}
                        <div class="relative -mt-8 mb-3 shrink-0 group-hover:scale-105 transition-transform duration-500 z-10 w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden bg-white p-1.5 shadow-md mx-auto">
                            <div class="w-full h-full rounded-full overflow-hidden border border-emerald-100 bg-gray-50">
                                @if($doctor->photo)
                                <img src="{{ asset('assets/images/doctors/'.$doctor->photo) }}"
                                     alt="{{ $doctor->name }}"
                                     class="w-full h-full object-cover object-top">
                                @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-emerald-50 to-emerald-100">
                                    @php
                                        $parts    = preg_split('/\s+/', preg_replace('/^(dr\.|drg\.|Dr\.)\s*/i','', $doctor->name));
                                        $initials = strtoupper(substr($parts[0]??'D',0,1).substr($parts[1]??'',0,1));
                                    @endphp
                                    <span class="text-xl font-black text-emerald-600">{{ $initials }}</span>
                                </div>
                                @endif
                            </div>
                            <div class="absolute bottom-1 right-2 w-5 h-5 flex items-center justify-center rounded-full bg-white shadow-sm">
                                <div class="w-3.5 h-3.5 rounded-full bg-emerald-400 animate-pulse"></div>
                            </div>
                        </div>

                        {{-- Doctor Info --}}
                        <div class="flex-grow w-full flex flex-col items-center text-center px-5 pb-6 bg-white relative z-10">
                            <h4 class="text-sm font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors leading-snug mb-1.5 line-clamp-2 px-2">
                                {{ $doctor->name }}
                            </h4>
                            <span class="inline-block text-[9px] font-bold tracking-widest border border-emerald-100 px-3 py-1 bg-emerald-50 text-emerald-700 rounded-full uppercase mb-4 shadow-sm">
                                {{ Str::limit($doctor->specialty, 30) }}
                            </span>

                            <div class="w-full h-px bg-gray-100 mb-4 px-4"></div>

                            <div class="flex flex-col items-center gap-2 w-full mt-auto">
                                <p class="text-[9px] font-semibold tracking-widest text-emerald-600 uppercase w-full">Jadwal Praktik</p>
                                <div class="flex items-center justify-center gap-1.5 px-3 py-2 bg-gray-50 rounded-lg w-full group-hover:bg-emerald-50/50 transition-colors mt-0.5">
                                    <svg class="w-3.5 h-3.5 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span class="text-[10px] text-gray-600 font-bold leading-snug truncate">{{ $doctor->schedule_text ?: 'Poliklinik' }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

                <!-- View All Card — Consistent with other cards -->
                <div class="shrink-0 w-[230px] md:w-[260px] snap-start flex items-center justify-center">
                    <a href="{{ route('dokter') }}"
                        class="group/all w-full h-full min-h-[220px] bg-white rounded-2xl border-2 border-dashed border-emerald-200 hover:border-emerald-400 hover:bg-emerald-50 flex flex-col items-center justify-center gap-3 transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-emerald-50 group-hover/all:bg-emerald-600 flex items-center justify-center text-emerald-600 group-hover/all:text-white transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-emerald-700 text-center leading-relaxed">Lihat<br>Semua Dokter</span>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<style>
#doctor-scroll::-webkit-scrollbar { display: none; }
</style>
