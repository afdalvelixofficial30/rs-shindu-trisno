<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - RS Sindhu Trisno</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
        /* WARNA ASLI ANDA (#064e3b) - TETAP STABIL */
        .sidebar-original { background-color: #064e3b !important; width: 20rem !important; } 
        @media (min-width: 1024px) {
            .content-area-wide { margin-left: 20rem !important; }
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden" x-data="{ sidebarOpen: window.innerWidth > 1024, isMobile: window.innerWidth <= 1024 }" x-init="window.addEventListener('resize', () => { isMobile = window.innerWidth <= 1024; if(!isMobile) sidebarOpen = true })">

    <!-- Overlay Mobile -->
    <div x-show="isMobile && sidebarOpen" 
         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" 
         @click="sidebarOpen = false" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-40 lg:hidden" x-cloak></div>

    <!-- Sidebar Original Emerald Dark Wide -->
    <aside class="sidebar-original fixed inset-y-0 left-0 transition-transform duration-300 z-50 shadow-xl"
           :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        
        <!-- Sidebar Header with Logo RS -->
        <div class="flex items-center justify-between h-20 px-8 border-b border-white/10">
            <h1 class="text-xl font-bold tracking-tight flex items-center gap-3">
                <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center p-1.5 shadow-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-full h-full object-contain">
                </div>
                <div class="flex flex-col leading-none">
                    <span class="text-white text-lg font-black italic tracking-tighter uppercase">RS Sindhu</span>
                    <span class="text-emerald-400 text-[9px] font-bold tracking-widest uppercase">Admin Panel</span>
                </div>
            </h1>
            <button @click="sidebarOpen = false" class="lg:hidden p-2 text-white/50 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <div class="overflow-y-auto h-[calc(100vh-5rem)] p-6 space-y-7">
            <!-- Group 1 -->
            <div>
                <p class="px-4 text-[10px] font-bold text-white/20 uppercase tracking-widest mb-4">Utama</p>
                <ul class="space-y-1 text-sm font-semibold">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                            <svg class="w-5 h-5 {{ request()->routeIs('admin.dashboard') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            Dashboard
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Group Medis (Tampil Normal, Link ke Placeholder) -->
            <div>
                <p class="px-4 text-[10px] font-bold text-white/20 uppercase tracking-widest mb-4">Layanan Medis</p>
                <ul class="space-y-1 text-sm font-semibold">
                    <li>
                        <a href="{{ route('admin.polikliniks.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.polikliniks.*') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                             <svg class="w-5 h-5 {{ request()->routeIs('admin.polikliniks.*') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            Daftar Poliklinik
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.doctors.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.doctors.*') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                            <svg class="w-5 h-5 {{ request()->routeIs('admin.doctors.*') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            Dokter Spesialis
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Group Informasi -->
            <div>
                <p class="px-4 text-[10px] font-bold text-white/20 uppercase tracking-widest mb-4">Informasi Publik</p>
                <ul class="space-y-1 text-sm font-semibold">
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.posts.*') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                            <svg class="w-5 h-5 {{ request()->routeIs('admin.posts.*') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 100-2V9.5a2 2 0 010-.25-1H10M4 16h16M4 12h16"/></svg>
                            Berita & Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pamphlet.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.pamphlet.*') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                             <svg class="w-5 h-5 {{ request()->routeIs('admin.pamphlet.*') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Pop-Up Jadwal (Pamflet)
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Group Sistem -->
            <div>
                <p class="px-4 text-[10px] font-bold text-white/20 uppercase tracking-widest mb-4">Sistem</p>
                <ul class="space-y-1 text-sm font-semibold">
                    <li>
                        <a href="{{ route('admin.profile.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->routeIs('admin.profile.*') ? 'bg-emerald-600/20 text-emerald-400' : 'text-white/60 hover:bg-white/5 hover:text-white' }}">
                            <svg class="w-5 h-5 {{ request()->routeIs('admin.profile.*') ? 'text-emerald-400' : 'text-white/20' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Profil Rumah Sakit
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="pt-10 pb-6 px-1">
                <div class="bg-white/5 border border-white/10 p-4 rounded-2xl text-center">
                    <p class="text-[9px] font-black text-emerald-400 uppercase tracking-widest mb-1 font-black leading-none">Status Sistem</p>
                    <p class="text-[10px] text-white/40 font-bold uppercase tracking-tight leading-none italic uppercase">v2.5 Stable Ready</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Content Area Wide Area -->
    <div class="transition-all duration-300 flex flex-col min-h-screen content-area-wide"
         :class="{'content-area-wide': sidebarOpen, 'ml-0': !sidebarOpen}">
        
        <!-- Navbar -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-6 md:px-8 sticky top-0 z-40 border-b border-slate-100 italic">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = !sidebarOpen" class="p-2.5 rounded-xl bg-slate-50 text-slate-500 hover:bg-emerald-50 hover:text-emerald-700 transition">
                    <svg x-show="sidebarOpen" class="w-6 h-6 outline-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                    <svg x-show="!sidebarOpen" class="w-6 h-6 outline-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
                </button>
            </div>

            <div class="flex items-center gap-6 leading-none">
                <a href="{{ url('/') }}" target="_blank" class="hidden md:flex items-center gap-2 text-[10px] font-black text-slate-400 hover:text-emerald-600 transition uppercase tracking-widest leading-none">
                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Web
                </a>
                
                <div class="flex items-center gap-3 pl-4 border-l border-slate-100">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-black text-slate-900 leading-tight">Super Admin</p>
                        <p class="text-[9px] font-bold text-emerald-600 uppercase tracking-widest leading-none">Administrator</p>
                    </div>
                    <div class="w-10 h-10 rounded-xl bg-emerald-600 text-white flex items-center justify-center font-black shadow-lg shadow-emerald-100">SA</div>
                </div>
            </div>
        </header>

        <!-- Main Content Area Area Area Area -->
        <main class="flex-1 p-6 md:p-10 bg-slate-50">
            @yield('content')
        </main>

        <footer class="p-8 bg-white border-t border-slate-100 italic">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-5 h-5 opacity-40 grayscale">
                    <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">
                        &copy; {{ date('Y') }} RS DR. SINDHU TRISNO PALU
                    </p>
                </div>
                <div class="text-[9px] font-bold text-slate-300 uppercase tracking-widest tracking-tighter">
                    Admin Services v2.5 Stable System
                </div>
            </div>
        </footer>
    </div>

</body>
</html>