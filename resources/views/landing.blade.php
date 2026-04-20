@extends('layouts.app')

@section('title', 'RS Tkt. III Dr. Sindhu Trisno - Palu')

@section('content')

    @include('partials.header')

    <main>
        @include('partials.hero')
        @include('partials.trust_badges')
        @include('partials.fasilitas')
        @include('partials.mcu_promo')
        @include('partials.dokter')
        @include('partials.berita_teaser')
        @include('partials.faq')
        @include('partials.cta_registrasi')
    </main>

    {{-- @include('partials.popup_jadwal') --}}
    
    @php
        $activePamphlet = \App\Models\PamphletJadwal::where('is_active', true)->first();
    @endphp

    @if($activePamphlet)
    <div x-data="{ open: true, zoomed: false }" 
         x-show="open" 
         class="fixed inset-0 z-[100] flex bg-black/80 backdrop-blur-sm transition-all duration-300 overflow-auto"
         :class="zoomed ? 'items-start justify-start p-0 md:p-4 cursor-zoom-out' : 'items-center justify-center p-4 md:p-8 cursor-pointer'"
         @click="if(zoomed) zoomed = false; else open = false;"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         style="display: none;">
        
        <button @click.stop="open = false" class="fixed top-4 right-4 z-[110] w-12 h-12 bg-black/70 hover:bg-red-600 text-white rounded-full flex items-center justify-center transition-colors shadow-2xl border border-white/20 backdrop-blur-md">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div x-show="!zoomed" class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[110] bg-black/70 text-white px-5 py-2.5 rounded-full text-[10px] md:text-sm font-bold tracking-widest shadow-xl pointer-events-none animate-bounce border border-white/20 uppercase flex items-center gap-2 backdrop-blur-md">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
            Ketuk Gambar Untuk Zoom
        </div>
        
        <div class="relative transition-all duration-300 ease-out origin-top mx-auto" 
             :class="zoomed ? 'w-[200vw] sm:w-[150vw] md:w-[120vw] lg:w-[80vw] mt-4 md:mt-0' : 'w-full max-w-2xl cursor-zoom-in'"
             @click.stop="zoomed = !zoomed">
            <img src="{{ asset($activePamphlet->image_path) }}" 
                 alt="Jadwal Dokter" 
                 class="w-full h-auto shadow-2xl transition-all duration-300"
                 :class="zoomed ? 'rounded-none md:rounded-2xl' : 'max-h-[85vh] object-contain rounded-2xl'">
        </div>
    </div>
    @endif

    @include('partials.footer')

@endsection