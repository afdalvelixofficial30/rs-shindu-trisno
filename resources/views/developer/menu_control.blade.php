<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Control Panel - Developer Only</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'JetBrains Mono', monospace; }
    </style>
</head>
<body class="bg-[#0a0a0c] text-slate-300 min-h-screen p-6 md:p-12">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12 border-b border-white/5 pb-8">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center shadow-lg shadow-indigo-500/20">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-white tracking-tight">Master Control Panel</h1>
                    <p class="text-slate-500 text-xs uppercase tracking-[0.3em]">Developer Access Only • Restricted</p>
                </div>
            </div>
        </header>

        <div class="grid gap-6">
            @foreach($menus as $menu)
            @php 
                $key = $menu['key'];
                $isActive = ($statuses[$key] ?? '1') === '1'; 
            @endphp
            <div x-data="{ active: {{ $isActive ? 'true' : 'false' }} }" 
                 class="bg-[#111114] border border-white/5 p-6 rounded-2xl flex items-center justify-between hover:border-indigo-500/30 transition-all duration-300">
                <div class="flex items-center gap-6">
                    <div class="w-2 h-2 rounded-full" :class="active ? 'bg-emerald-500 shadow-[0_0_12px_rgba(16,185,129,0.5)]' : 'bg-rose-500 shadow-[0_0_12px_rgba(244,63,94,0.5)]'"></div>
                    <div>
                        <h2 class="text-white font-bold">{{ $menu['label'] }}</h2>
                        <p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">Key: {{ $key }}</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 bg-black/40 p-1 rounded-xl border border-white/5">
                    <button @click="active = true; updateStatus('{{ $key }}', '1')" 
                            :class="active ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/20' : 'text-slate-500 hover:text-slate-300'"
                            class="px-4 py-2 rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all">
                        Active
                    </button>
                    <button @click="active = false; updateStatus('{{ $key }}', '0')" 
                            :class="!active ? 'bg-rose-600 text-white shadow-lg shadow-rose-500/20' : 'text-slate-500 hover:text-slate-300'"
                            class="px-4 py-2 rounded-lg text-[10px] font-bold uppercase tracking-widest transition-all">
                        Dev Mode
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <footer class="mt-16 text-center">
            <p class="text-[10px] text-slate-600 uppercase tracking-[0.5em]">&copy; 2026 RS SINDHU TRISNO • DEV TOOLS</p>
        </footer>
    </div>

    <script>
        function updateStatus(menu, status) {
            fetch('{{ route('dev.menu.update') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ menu, status })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    console.log(`Status ${menu} updated to ${status}`);
                }
            });
        }
    </script>
</body>
</html>
