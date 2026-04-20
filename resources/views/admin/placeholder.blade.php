@extends('layouts.admin')
@section('title', 'Fitur Sedang Dikembangkan')

@section('content')
<div class="h-[70vh] flex flex-col items-center justify-center text-center px-4">
    <div class="w-24 h-24 bg-amber-50 rounded-3xl flex items-center justify-center text-amber-500 mb-6 animate-bounce shadow-xl shadow-amber-100/50">
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
    </div>
    
    <h1 class="text-4xl font-black text-slate-900 mb-4 tracking-tight">Fitur Dalam Pengembangan</h1>
    <p class="text-slate-500 max-w-lg mx-auto leading-relaxed font-medium">
        Mohon maaf, modul <span class="text-emerald-600 font-bold">Berita & Artikel</span> saat ini masih dalam tahap pengerjaan oleh tim pengembang kami. 
        Fitur ini akan segera hadir untuk memudahkan Anda mengelola konten berita rumah sakit.
    </p>

    <div class="mt-10 flex gap-4">
        <a href="{{ route('admin.dashboard') }}" class="px-8 py-3 bg-slate-900 text-white rounded-2xl font-bold hover:bg-emerald-700 transition-all shadow-lg active:scale-95">
            Kembali ke Dashboard
        </a>
    </div>

    <!-- Progress Step Placeholder -->
    <div class="mt-16 w-full max-w-md bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
        <div class="flex justify-between items-center mb-4">
            <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Progress Modul</span>
            <span class="text-xs font-black text-emerald-600">65%</span>
        </div>
        <div class="w-full bg-gray-100 h-3 rounded-full overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-500 to-emerald-700 h-full w-[65%] rounded-full"></div>
        </div>
        <ul class="mt-6 space-y-3 text-left">
            <li class="flex items-center gap-3 text-xs font-bold text-slate-700">
                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                Struktur Database Berita
            </li>
            <li class="flex items-center gap-3 text-xs font-bold text-slate-700">
                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                Integrasi SEO & Slug
            </li>
            <li class="flex items-center gap-3 text-xs font-bold text-slate-400">
                <div class="w-4 h-4 border-2 border-slate-200 rounded-full"></div>
                Fitur Editor Rich-Text (Sedang Dikerjakan)
            </li>
        </ul>
    </div>
</div>
@endsection
