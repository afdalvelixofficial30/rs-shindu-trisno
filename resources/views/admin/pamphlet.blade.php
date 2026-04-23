@extends('layouts.admin')
@section('title', 'Kelola Pop-Up Jadwal')

@section('content')
    <div class="max-w-5xl mx-auto py-4">
        
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900">Kelola Pop-Up Jadwal Dokter</h1>
            <p class="text-gray-500 mt-2">Upload pamflet gambar jadwal harian (JPG/PNG). Gambar yang aktif akan muncul di website.</p>
        </div>

        @if(session('success'))
        <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            <p class="font-medium">{{ session('success') }}</p>
        </div>
        @endif

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-10" x-data="{ imagePreview: null, showFull: false }">
            <div class="p-6 sm:p-8 bg-gray-50/50 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Upload Pamflet Baru</h2>
                <form action="{{ route('admin.pamphlet.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row gap-4 items-end">
                    @csrf
                    <div class="w-full sm:flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pilih File Gambar (Format: JPG, PNG | Maksimal 5MB)</label>
                        <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" required
                            @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = (e) => { imagePreview = e.target.result }; reader.readAsDataURL(file) }"
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition border border-gray-200 rounded-lg cursor-pointer bg-white">
                        
                        <!-- Preview Tengah & Bisa Diklik -->
                        <template x-if="imagePreview">
                            <div class="mt-6 flex flex-col items-center justify-center animate-fade-in">
                                <p class="text-[10px] font-black text-emerald-600 uppercase mb-2 tracking-widest bg-emerald-50 px-3 py-1 rounded-full">Klik Gambar untuk Zoom</p>
                                <div @click="showFull = true" class="p-2 bg-white border-2 border-emerald-100 rounded-2xl w-48 shadow-xl cursor-zoom-in hover:scale-105 transition-transform duration-300">
                                    <img :src="imagePreview" class="w-full h-32 object-cover rounded-xl shadow-inner">
                                </div>
                            </div>
                        </template>
                    </div>
                    <button type="submit" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 px-6 rounded-lg transition shadow-sm h-[46px]">
                        Upload
                    </button>
                </form>

                <!-- Modal Full View -->
                <div x-show="showFull" 
                     x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                     class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/90 backdrop-blur-md" x-cloak @click="showFull = false">
                    <button class="absolute top-6 right-6 text-white/50 hover:text-white transition">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <img :src="imagePreview" class="max-w-full max-h-full rounded-xl shadow-2xl object-contain border-4 border-white/10" @click.stop>
                </div>

                @error('image')
                    <p class="text-red-500 text-sm mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            Daftar Pamflet Terupload
            <span class="text-xs font-bold bg-gray-100 text-gray-500 px-2 py-0.5 rounded-full uppercase tracking-widest">{{ $pamphlets->count() }} File</span>
        </h3>

        <!-- Interactive Grid with Alpine.js Global Modal -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8" x-data="{ openPamphlet: null }">
            @foreach($pamphlets as $pamphlet)
            <div class="bg-white border rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 group relative flex flex-col {{ $pamphlet->is_active ? 'border-emerald-500 ring-4 ring-emerald-50' : 'border-gray-100' }}">
                
                <!-- Image Container with Hover Action -->
                <div class="h-60 w-full bg-gray-50 relative overflow-hidden flex items-center justify-center cursor-zoom-in"
                     @click="openPamphlet = '{{ asset($pamphlet->image_path) }}'">
                    <img src="{{ asset($pamphlet->image_path) }}" alt="Pamflet" class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-700">
                    
                    <!-- Overlay on Hover -->
                    <div class="absolute inset-0 bg-emerald-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center backdrop-blur-[2px]">
                        <div class="w-12 h-12 rounded-full bg-white/20 border border-white/30 flex items-center justify-center text-white scale-75 group-hover:scale-100 transition-transform duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                        </div>
                        <span class="absolute bottom-4 text-white text-[10px] font-bold uppercase tracking-widest">Klik untuk Detail</span>
                    </div>

                    @if($pamphlet->is_active)
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white text-[9px] font-black uppercase px-4 py-1.5 rounded-full shadow-lg tracking-[0.2em] z-10 animate-pulse">
                        Sedang Tampil
                    </div>
                    @endif
                </div>
                
                <div class="p-6 flex flex-col gap-4 flex-grow bg-white">
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Waktu Upload</span>
                            <span class="text-xs font-extrabold text-gray-700">{{ $pamphlet->created_at->format('d M Y, H:i') }}</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <div class="w-2 h-2 rounded-full {{ $pamphlet->is_active ? 'bg-emerald-500 animate-ping' : 'bg-gray-300' }}"></div>
                            <span class="text-[9px] font-black uppercase tracking-tighter text-gray-400">{{ $pamphlet->is_active ? 'Active' : 'Offline' }}</span>
                        </div>
                    </div>
                    
                    <div class="flex gap-2.5">
                        @if(!$pamphlet->is_active)
                        <form action="{{ route('admin.pamphlet.activate', $pamphlet->id) }}" method="POST" class="flex-1">
                            @csrf
                            <button type="submit" class="w-full h-[42px] bg-slate-900 hover:bg-emerald-600 text-white font-bold py-2 rounded-xl text-[11px] uppercase tracking-widest transition-all duration-300 shadow-lg shadow-slate-200 hover:shadow-emerald-200">
                                Jadikan Aktif
                            </button>
                        </form>
                        @else
                        <div class="flex-1 h-[42px] bg-emerald-50 text-emerald-700 font-bold py-2 border border-emerald-200 rounded-xl text-[11px] uppercase tracking-widest text-center flex items-center justify-center gap-2 cursor-default">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            Tampil Di Web
                        </div>
                        @endif

                        <form action="{{ route('admin.pamphlet.destroy', $pamphlet->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pamflet ini? Data tidak bisa dikembalikan.');">
                            @csrf @method('DELETE')
                            <button type="submit" class="h-[42px] w-[42px] bg-white border border-red-100 text-red-500 hover:bg-red-600 hover:text-white font-bold rounded-xl transition-all duration-300 flex items-center justify-center shadow-sm" title="Hapus Permanen">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            @if($pamphlets->isEmpty())
            <div class="col-span-full py-20 text-center bg-gray-50 border-2 border-dashed border-gray-200 rounded-[2.5rem]">
                <div class="w-20 h-20 bg-gray-100 rounded-3xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div class="text-gray-400 font-bold uppercase tracking-widest text-[10px]">Belum ada pamflet yang diupload</div>
            </div>
            @endif

            <!-- Modal Full View (List) -->
            <div x-show="openPamphlet" 
                 x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-black/90 backdrop-blur-md" 
                 x-cloak @click="openPamphlet = null">
                <button class="absolute top-6 right-6 text-white/50 hover:text-white transition-all hover:rotate-90">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="relative max-w-4xl max-h-full">
                    <img :src="openPamphlet" class="rounded-3xl shadow-2xl object-contain border-4 border-white/10" @click.stop>
                </div>
            </div>
        </div>
    </div>

@endsection
