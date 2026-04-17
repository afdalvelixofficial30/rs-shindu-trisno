@php
    function isDoctorAvailableToday($scheduleString) {
        if (!$scheduleString) return false;
        
        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $todayIndex = now()->dayOfWeek; // 0 to 6
        $todayName = $days[$todayIndex];
        $lowerSchedule = strtolower($scheduleString);

        if (str_contains($lowerSchedule, 'on call') || str_contains($lowerSchedule, 'shift') || str_contains($lowerSchedule, '24 jam')) return false;
        
        $dayPart = explode('|', $scheduleString)[0] ?? '';
        $cleanDayPart = str_replace(' ', '', strtolower($dayPart));
        
        if (str_contains($cleanDayPart, '-')) {
            $parts = explode('-', $cleanDayPart);
            if (count($parts) >= 2) {
                $startStr = ucfirst(trim($parts[0]));
                $endStr = ucfirst(trim($parts[1]));
                
                $startIdx = array_search($startStr, $days);
                $endIdx = array_search($endStr, $days);
                
                if ($startIdx === false || $endIdx === false) {
                    $shortDays = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
                    if ($startIdx === false) $startIdx = array_search(ucfirst(substr($parts[0], 0, 3)), $shortDays);
                    if ($endIdx === false) $endIdx = array_search(ucfirst(substr($parts[1], 0, 3)), $shortDays);
                }

                if ($startIdx !== false && $endIdx !== false) {
                    if ($startIdx <= $endIdx) {
                        if ($todayIndex >= $startIdx && $todayIndex <= $endIdx) return true;
                    } else {
                        if ($todayIndex >= $startIdx || $todayIndex <= $endIdx) return true;
                    }
                }
            }
        }
        
        if (str_contains($lowerSchedule, strtolower($todayName))) {
            return true;
        }

        return false;
    }

    $allDoctors = \App\Models\Doctor::with('poliklinik')->where('is_active', true)->get();
    
    $doctorsTodayRaw = [];
    foreach($allDoctors as $doc) {
        if (isDoctorAvailableToday($doc->schedule_text)) {
            $doctorsTodayRaw[] = $doc;
        }
    }
    
    $daysId = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    $todayNameString = $daysId[now()->dayOfWeek];
    $todayDateString = now()->translatedFormat('d F Y');
@endphp

<!-- Real-time Daily Schedule Premium Popup (Alpine.js) -->
<div x-data="{ 
        showPopup: false,
        init() {
            setTimeout(() => {
                this.showPopup = true;
            }, 600);
        },
        closePopup() {
            this.showPopup = false;
        }
    }"
    x-show="showPopup" 
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 backdrop-blur-none"
    x-transition:enter-end="opacity-100 backdrop-blur-sm"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 backdrop-blur-sm"
    x-transition:leave-end="opacity-0 backdrop-blur-none"
    class="fixed inset-0 z-[100] flex items-center justify-center p-3 sm:p-6 bg-emerald-950/80 backdrop-blur-md"
    style="display: none;"
    x-cloak
>

    <!-- Main Modal Canvas -->
    <div x-show="showPopup"
         @click.away="closePopup()"
         x-transition:enter="transition ease-out duration-400 delay-100"
         x-transition:enter-start="opacity-0 translate-y-8 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         class="w-full max-w-3xl relative overflow-hidden flex flex-col max-h-[85vh] rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.3)] bg-white border border-emerald-800/20"
    >
        
        <!-- EMERALD THEME HEADER -->
        <div class="relative py-4 px-5 md:px-6 shrink-0 flex items-center justify-between bg-emerald-950 border-b border-emerald-900 shadow-[0_4px_20px_rgba(0,0,0,0.1)] z-20 overflow-hidden">
            <!-- Background glow for header -->
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-700/30 rounded-full blur-2xl pointer-events-none"></div>
            
            <div class="flex items-center gap-4 relative z-10 w-full">
                <!-- Logo -->
                <div class="relative shrink-0 hidden sm:block bg-white p-1 rounded-xl">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-9 md:h-11 w-auto object-contain">
                </div>

                <!-- Titles -->
                <div class="flex flex-col flex-1 min-w-0">
                    <div class="flex items-center gap-1.5 mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-emerald-400 font-bold text-[9px] md:text-[10px] tracking-widest uppercase">Poliklinik Rawat Jalan</span>
                    </div>
                    <div class="flex flex-wrap items-baseline gap-x-2 w-full">
                        <h2 class="text-lg md:text-xl font-extrabold text-white tracking-tight leading-none truncate">
                            Jadwal Dokter
                        </h2>
                        <span class="text-emerald-200/70 font-medium text-xs md:text-sm whitespace-nowrap">({{ $todayDateString }})</span>
                    </div>
                </div>
            </div>
            
            <button @click="closePopup()" class="relative z-10 shrink-0 text-emerald-100 hover:text-white bg-emerald-900/50 hover:bg-red-500 p-2 rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-red-300 ml-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Density Grid / Content (Cards Style) -->
        <div class="relative z-10 p-4 md:p-6 overflow-y-auto flex-1 hide-scrollbar bg-slate-50">
            @if(count($doctorsTodayRaw) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-4">
                    @foreach($doctorsTodayRaw as $doc)
                        <!-- Minimal Interactive Card -->
                        <div class="group relative bg-white rounded-2xl p-4 shadow-sm hover:shadow-md transition-all duration-300 border border-slate-100 hover:border-emerald-300 hover:bg-emerald-50/10">
                            <div class="flex flex-wrap items-center justify-between mb-3 relative z-10 gap-2">
                                <span class="bg-emerald-50 text-emerald-700 text-[9px] md:text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-md border border-emerald-100 transition-colors">
                                    {{ $doc->poliklinik->name ?? 'Poli Umum' }}
                                </span>
                                <div class="text-slate-500 text-[9px] md:text-[10px] font-bold flex items-center gap-1 group-hover:text-emerald-600 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    {{ explode('|', $doc->schedule_text)[1] ?? $doc->schedule_text }}
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-3 relative z-10">
                                <!-- Photo -->
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-slate-50 overflow-hidden shrink-0 border border-emerald-100 group-hover:border-emerald-300 group-hover:scale-105 transition-all">
                                    @if($doc->photo)
                                        <img src="{{ asset('assets/images/doctors/'.$doc->photo) }}" class="w-full h-full object-cover object-top">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-emerald-600 font-bold text-lg bg-emerald-50">{{ substr($doc->name, 4, 1) }}</div>
                                    @endif
                                </div>
                                <!-- Info -->
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-xs md:text-sm font-extrabold text-slate-800 leading-tight truncate group-hover:text-emerald-700 transition-colors" title="{{ $doc->name }}">{{ $doc->name }}</h4>
                                    <p class="text-[9px] md:text-[10px] font-semibold text-slate-400 mt-1 truncate uppercase tracking-wider">{{ $doc->specialty ?: 'Dokter Umum / Jaga' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="flex flex-col items-center justify-center text-center py-10 px-4 h-full">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center text-emerald-300 mb-4 shadow-sm border border-slate-100">
                        <svg class="w-8 h-8 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 12H4"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-slate-800 mb-1">Belum Ada Jadwal Praktik</h4>
                    <p class="text-sm text-slate-500 max-w-sm">Tidak ada dokter spesialis yang berpraktik pada hari ini berdasarkan sistem kami.</p>
                </div>
            @endif
        </div>

        <!-- Minimal Footer with Actions -->
        <div class="relative z-20 bg-white px-4 md:px-5 py-4 flex-col sm:flex-row flex items-center justify-between gap-4 border-t border-slate-100 shrink-0 shadow-[0_-4px_20px_rgba(0,0,0,0.02)]">
            <div class="flex items-center w-full justify-between sm:justify-start sm:w-auto gap-4 md:gap-6">
                <!-- IGD Info - NOW CLICKABLE -->
                <a href="https://wa.me/6281213756763" target="_blank" class="flex flex-1 sm:flex-none justify-center items-center gap-2 group p-2 -m-2 rounded-lg hover:bg-red-50 transition-colors border border-transparent hover:border-red-100">
                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-red-100 flex items-center justify-center text-red-600 shrink-0 group-hover:bg-red-600 group-hover:text-white transition-colors shadow-sm shadow-red-200">
                        <svg class="w-3.5 h-3.5 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-[10px] md:text-[11px] font-extrabold text-red-600 uppercase tracking-widest leading-none">IGD 24 Jam</h5>
                    </div>
                </a>
                
                <div class="hidden sm:block w-px h-6 bg-slate-200"></div>

                <!-- MCU Info -->
                <div class="flex flex-1 sm:flex-none justify-center items-center gap-2 group cursor-default">
                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-500 shrink-0 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-[9px] font-extrabold text-slate-600 uppercase tracking-widest leading-none mt-0.5 mb-[1px]">MCU</h5>
                        <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider">Senin - Jumat</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-2 md:gap-3 w-full sm:w-auto shrink-0 mt-2 sm:mt-0">
                <a href="https://play.google.com/store/apps/details?id=app.bpjs.mobile" target="_blank" class="flex-1 sm:flex-none px-3 py-2.5 md:py-2 rounded-xl bg-white border border-slate-200 hover:border-emerald-400 hover:bg-emerald-50 text-slate-600 hover:text-emerald-700 font-bold text-[9px] md:text-[10px] tracking-wider uppercase flex items-center justify-center gap-1.5 transition-all">
                    <svg class="w-3.5 h-3.5 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    Mobile JKN
                </a>
                <a href="https://wa.me/6285367919663" target="_blank" class="flex-1 sm:flex-none px-3 py-2.5 md:py-2 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-[9px] md:text-[10px] tracking-wider uppercase flex items-center justify-center gap-1.5 transition-all shadow-[0_4px_10px_rgba(5,150,105,0.2)] hover:-translate-y-0.5 hover:shadow-[0_6px_15px_rgba(5,150,105,0.3)]">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z"/></svg>
                    WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>
