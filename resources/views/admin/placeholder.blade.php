@extends('layouts.admin')
@section('title', 'Berita & Artikel')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[60vh] text-center animate-fade-in py-20 px-6">
    <div class="w-28 h-28 bg-amber-50 text-amber-500 rounded-[2.5rem] flex items-center justify-center mb-8 shadow-2xl shadow-amber-200/50 border-4 border-white animate-bounce-slow">
        <svg class="w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
        </svg>
    </div>
    <div class="max-w-md">
        <h2 class="text-4xl font-black text-slate-900 mb-4 tracking-tighter italic">Masih Dalam Pengembangan</h2>
        <p class="text-slate-500 font-bold text-sm uppercase tracking-widest leading-relaxed">
            Modul <span class="text-emerald-600">Berita & Artikel</span> sedang dalam proses optimasi editor dan akan segera dapat digunakan.
        </p>
    </div>
    
    <div class="mt-12 flex gap-4">
        <div class="px-6 py-2 bg-slate-100 rounded-full text-[10px] font-black text-slate-400 uppercase tracking-widest italic">Status: Development Mode</div>
    </div>
</div>
@endsection
