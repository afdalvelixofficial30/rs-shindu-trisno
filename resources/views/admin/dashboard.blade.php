@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!-- Page Header -->
<div class="mb-10">
    <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Dashboard Overview</h2>
    <p class="text-slate-500 font-medium mt-1">Ringkasan aktivitas dan operasional RS Dr. Sindhu Trisno hari ini.</p>
</div>

<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
    <!-- Stat 1 -->
    <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center gap-5 hover:shadow-lg transition-all">
        <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <div>
            <p class="text-[10px] font-bold  text-slate-400 tracking-wider mb-1">Total Poliklinik</p>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['poliklinik'] ?? 16 }}</h3>
        </div>
    </div>

    <!-- Stat 2 -->
    <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center gap-5 hover:shadow-lg transition-all">
        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </div>
        <div>
            <p class="text-[10px] font-bold  text-slate-400 tracking-wider mb-1">Dokter Aktif</p>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['doctors'] ?? 42 }}</h3>
        </div>
    </div>

    <!-- Stat 3 -->
    <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center gap-5 hover:shadow-lg transition-all">
        <div class="w-14 h-14 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center shrink-0">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.25-1l-3-6a2 2 0 00-1.75-1H10M4 16h16M4 12h16"/></svg>
        </div>
        <div>
            <p class="text-[10px] font-bold  text-slate-400 tracking-wider mb-1">Artikel Terpublikasi</p>
            <h3 class="text-3xl font-bold text-slate-800">{{ $stats['posts'] ?? 28 }}</h3>
        </div>
    </div>

    <!-- Stat 4 -->
    <div class="bg-gradient-to-br from-emerald-600 to-emerald-800 rounded-3xl p-6 shadow-lg shadow-emerald-900/20 text-white flex items-center gap-5 hover:-translate-y-1 transition-all">
        <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur flex items-center justify-center shrink-0">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
        </div>
        <div>
            <p class="text-[10px] font-bold  text-emerald-200 tracking-wider mb-1">Paket MCU Aktif</p>
            <h3 class="text-3xl font-bold">{{ $stats['mcu'] ?? 5 }}</h3>
        </div>
    </div>
</div>

<!-- Welcome Banner -->
<div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm flex flex-col md:flex-row items-center gap-8 p-8 relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-emerald-50 rounded-full blur-3xl -mr-10 -mt-10 opacity-70"></div>
    <div class="relative z-10 w-full md:w-2/3">
        <span class="inline-block px-3 py-1 bg-emerald-100 text-emerald-800 text-[10px] font-bold rounded-lg  tracking-widest mb-4">Sistem Baru</span>
        <h3 class="text-2xl font-bold text-slate-900 mb-3">Selamat Datang di Custom Admin Panel!</h3>
        <p class="text-slate-500 leading-relaxed text-sm">
            Tampilan Admin telah di-redesign ulang menggunakan spesifikasi desain murni Tailwind CSS sesuai permintaan Anda. Ini memberikan UI/UX yang lebih rapi, terstruktur, bebas dikustomisasi kapan saja tanpa hambatan, dan selaras dengan *aesthetic* Rumah Sakit Sindhu Trisno.
        </p>
        <button class="mt-6 px-6 py-2.5 bg-slate-900 text-white rounded-xl font-bold text-sm hover:bg-emerald-700 transition shadow-lg">Mulai Kelola Data</button>
    </div>
    <div class="relative z-10 w-full md:w-1/3 flex justify-center">
        <!-- Dashboard Illustration Mockup placeholder -->
        <div class="w-48 h-48 bg-emerald-50 rounded-full flex items-center justify-center border-8 border-white shadow-xl">
            <svg class="w-24 h-24 text-emerald-300" fill="currentColor" viewBox="0 0 24 24"><path d="M19 11H5a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2v-6a2 2 0 00-2-2zm0 8H5v-6h14v6zm-7-4h6v2h-6v-2zm-2-5h9V6a2 2 0 00-2-2H5a2 2 0 00-2 2v4h7zM5 6h14v2H5V6z"/></svg>
        </div>
    </div>
</div>
@endsection
