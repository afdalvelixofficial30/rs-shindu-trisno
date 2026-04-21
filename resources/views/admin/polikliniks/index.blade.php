@extends('layouts.admin')

@section('title', 'Daftar Poliklinik')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Daftar Poliklinik</h2>
        <p class="text-slate-500 font-medium mt-1">Kelola data poliklinik & fasilitas rawat jalan RS.</p>
    </div>
    <a href="{{ route('admin.polikliniks.create') }}" class="px-6 py-3 bg-emerald-600 text-white rounded-xl font-bold flex items-center gap-2 hover:bg-emerald-700 shadow-lg shadow-emerald-600/30 transition-all active:scale-95">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
        Tambah Poliklinik
    </a>
</div>

@if(session('success'))
    <div x-data="{ show: true }" x-show="show" class="bg-emerald-50 text-emerald-800 border border-emerald-200 px-6 py-4 rounded-2xl mb-8 flex items-center justify-between shadow-sm">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <p class="font-bold">{{ session('success') }}</p>
        </div>
        <button @click="show = false" class="text-emerald-600 hover:bg-emerald-100 p-2 rounded-lg">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>
@endif

<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-100  text-[10px] font-bold tracking-widest text-slate-400">
                <tr>
                    <th class="px-8 py-5">Nama Poliklinik</th>
                    <th class="px-8 py-5">Slug / URL</th>
                    <th class="px-8 py-5 text-center">Jumlah Dokter</th>
                    <th class="px-8 py-5 text-center">Status</th>
                    <th class="px-8 py-5 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-sm font-medium text-slate-700">
                @forelse($polikliniks as $poli)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-8 py-5">
                            <span class="font-bold text-slate-900">{{ $poli->name }}</span>
                            @if($poli->description)
                                <p class="text-xs text-slate-400 font-normal mt-1 truncate max-w-xs">{{ $poli->description }}</p>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-slate-500 font-mono text-xs">{{ $poli->slug }}</td>
                        <td class="px-8 py-5 text-center">
                            <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs font-bold">{{ $poli->doctors_count }}</span>
                        </td>
                        <td class="px-8 py-5 text-center">
                            @if($poli->is_active)
                                <span class="px-3 py-1 bg-emerald-50 border border-emerald-100 text-emerald-700 rounded-lg text-[10px] font-bold  tracking-wider">Aktif</span>
                            @else
                                <span class="px-3 py-1 bg-rose-50 border border-rose-100 text-rose-700 rounded-lg text-[10px] font-bold  tracking-wider">Nonaktif</span>
                            @endif
                        </td>
                        <td class="px-8 py-5 text-right">
                            <div class="flex items-center justify-end gap-2 text-slate-400">
                                <a href="{{ route('admin.polikliniks.edit', $poli) }}" class="p-2 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                </a>
                                <form action="{{ route('admin.polikliniks.destroy', $poli) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus poliklinik ini?');">
                                    @csrf @method('DELETE')
                                    <button class="p-2 hover:text-rose-600 hover:bg-rose-50 rounded-xl transition" title="Hapus">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-8 py-16 text-center text-slate-400">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-12 h-12 mb-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                <p class="font-bold">Belum ada data Poliklinik</p>
                                <a href="{{ route('admin.polikliniks.create') }}" class="text-emerald-600 mt-2 hover:underline">Tambah yang pertama</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($polikliniks->hasPages())
        <div class="border-t border-slate-100 p-6">
            {{ $polikliniks->links() }}
        </div>
    @endif
</div>
@endsection
