<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - RS Sindhu Trisno</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased" x-data="{ sidebarOpen: true }">

    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 bg-emerald-900 text-white w-64 transition-transform duration-300 z-50 shadow-2xl"
           :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
        <div class="flex items-center justify-center h-20 border-b border-emerald-800/50 bg-emerald-950/30">
            <h1 class="text-xl font-bold tracking-wider flex items-center gap-2">
                <div class="w-8 h-8 bg-white text-emerald-900 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                RS SINDHU<span class="text-emerald-400">ADMIN</span>
            </h1>
        </div>

        <div class="overflow-y-auto h-[calc(100vh-5rem)] p-4 space-y-8 scrollbar-hide">
            <!-- Menu Group 1 -->
            <div>
                <p class="px-4 text-xs font-bold text-emerald-400/50  tracking-widest mb-3">Utama</p>
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            Dashboard
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Menu Group 2 -->
            <div>
                <p class="px-4 text-xs font-bold text-emerald-400/50  tracking-widest mb-3">Manajemen Medis</p>
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('admin.polikliniks.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.polikliniks.*') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            Daftar Poliklinik
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.doctors.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.doctors.*') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                            Dokter Spesialis
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Menu Group 3 -->
            <div>
                <p class="px-4 text-xs font-bold text-emerald-400/50  tracking-widest mb-3">Publikasi & Info</p>
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.posts.*') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-.25-1l-3-6a2 2 0 00-1.75-1H10M4 16h16M4 12h16"/></svg>
                            Berita & Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pamphlet.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.pamphlet.*') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Pop-Up Jadwal (Pamflet)
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Menu Group 4 -->
            <div>
                <p class="px-4 text-xs font-bold text-emerald-400/50  tracking-widest mb-3">Sistem</p>
                <ul class="space-y-1">
                    <li>
                        <a href="{{ route('admin.profile.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl {{ request()->routeIs('admin.profile.*') ? 'bg-emerald-800 text-white font-bold shadow-inner' : 'text-emerald-100 hover:bg-emerald-800/50 hover:text-white transition-colors' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Pengaturan Profil RS
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Content Area -->
    <div class="transition-all duration-300 flex flex-col min-h-screen"
         :class="{'ml-64': sidebarOpen, 'ml-0': !sidebarOpen}">
        
        <!-- Navbar -->
        <header class="h-20 bg-white border-b border-gray-100 flex items-center justify-between px-8 sticky top-0 z-40 bg-opacity-90 backdrop-blur">
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-xl bg-slate-50 text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
            </button>

            <!-- User Dropdown & Actions -->
            <div class="flex items-center gap-6">
                <a href="{{ url('/') }}" target="_blank" class="text-xs font-bold text-slate-500 hover:text-emerald-700 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Lihat Website
                </a>
                
                <div class="h-8 w-px bg-slate-200"></div>

                <div x-data="{ userMenu: false }" class="relative">
                    <button @click="userMenu = !userMenu" @click.away="userMenu = false" class="flex items-center gap-3 focus:outline-none">
                        <div class="text-right hidden md:block">
                            <p class="text-sm font-bold text-slate-800 leading-tight">Super Admin</p>
                            <p class="text-[10px] font-bold  tracking-wider text-emerald-600">Administrator</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Super+Admin&background=047857&color=fff&bold=true" alt="User" class="w-10 h-10 rounded-full border-2 border-emerald-100 shadow-sm">
                    </button>

                    <!-- Dropdown -->
                    <div x-show="userMenu" x-transition.opacity
                         class="absolute right-0 mt-3 w-48 bg-white border border-slate-100 rounded-2xl shadow-xl py-2 z-50 text-sm font-medium" x-cloak>
                        <a href="#" class="block px-4 py-2 hover:bg-slate-50 text-slate-700">Profil Saya</a>
                        <div class="border-t border-slate-100 my-1"></div>
                        <form method="POST" action="">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-red-600 hover:bg-red-50">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content View -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>