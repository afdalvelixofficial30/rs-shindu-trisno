@extends('layouts.admin')

@section('title', 'Edit Poliklinik ' . $poliklinik->name)

@section('content')
<div class="mb-8">
    <div class="flex items-center gap-4 mb-2">
        <a href="{{ route('admin.polikliniks.index') }}" class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-500 hover:bg-slate-50 hover:text-emerald-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </a>
        <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Edit Poliklinik</h2>
    </div>
    <p class="text-slate-500 font-medium ml-14">Perbarui informasi untuk <span class="text-emerald-700 font-bold">{{ $poliklinik->name }}</span>.</p>
</div>

<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden max-w-3xl">
    <form action="{{ route('admin.polikliniks.update', $poliklinik) }}" method="POST">
        @csrf @method('PUT')
        <div class="p-8 space-y-6">
            
            <!-- Input Nama -->
            <div>
                <label for="name" class="block text-sm font-bold text-slate-800 mb-2">Nama Poliklinik <span class="text-rose-500">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $poliklinik->name) }}" required
                       class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500 font-medium transition-all text-slate-800">
                @error('name')
                    <p class="text-rose-500 text-xs mt-2 font-bold">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Deskripsi -->
            <div>
                <label for="description" class="block text-sm font-bold text-slate-800 mb-2">Deskripsi Layanan</label>
                <textarea id="description" name="description" rows="4" 
                          class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500 font-medium transition-all text-slate-800 resize-y">{{ old('description', $poliklinik->description) }}</textarea>
                @error('description')
                    <p class="text-rose-500 text-xs mt-2 font-bold">{{ $message }}</p>
                @enderror
            </div>

            <!-- Toggle Aktif -->
            <div class="flex items-center justify-between p-5 bg-slate-50 rounded-2xl border border-slate-100">
                <div>
                    <h4 class="font-bold text-slate-800 tracking-tight">Status Poliklinik</h4>
                    <p class="text-xs text-slate-500 mt-1 font-medium">Poliklinik yang tidak aktif akan disembunyikan dari halaman depan.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" value="1" class="sr-only peer" {{ $poliklinik->is_active ? 'checked' : '' }}>
                    <div class="w-14 h-7 bg-slate-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-emerald-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-1 after:left-[4px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-emerald-500"></div>
                </label>
            </div>

        </div>

        <!-- Footer Actions -->
        <div class="px-8 py-5 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
            <p class="text-xs font-medium text-slate-400">Terakhir diperbarui: {{ $poliklinik->updated_at->diffForHumans() }}</p>
            <div class="flex gap-3">
                <a href="{{ route('admin.polikliniks.index') }}" class="px-6 py-3 bg-white text-slate-600 font-bold rounded-xl border border-slate-200 hover:bg-slate-50 transition-colors">Batal</a>
                <button type="submit" class="px-6 py-3 bg-slate-900 text-white font-bold rounded-xl hover:bg-emerald-700 transition-colors shadow-lg shadow-emerald-900/20">Update Data</button>
            </div>
        </div>
    </form>
</div>
@endsection
