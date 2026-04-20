@extends('layouts.admin')
@section('title', 'Tambah Dokter Baru')

@section('content')
<div class="max-w-4xl mx-auto py-4">
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('admin.doctors.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </a>
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Tambah Dokter Baru</h1>
            <p class="text-gray-500">Masukkan rincian informasi dokter spesialis baru ke sistem.</p>
        </div>
    </div>

    <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
            <div class="p-6 md:p-8 space-y-6">
                <!-- Row 1: Nama & Poliklinik -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap & Gelar</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4"
                               placeholder="Nama dokter...">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Poliklinik</label>
                        <select name="poliklinik_id" required class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4">
                            <option value="">Pilih Poliklinik</option>
                            @foreach($polikliniks as $poli)
                                <option value="{{ $poli->id }}">{{ $poli->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Row 2: Spesialisasi & Foto -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Spesialisasi</label>
                        <input type="text" name="specialty" value="{{ old('specialty') }}" required
                               class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4"
                               placeholder="Contoh: Spesialis Jantung">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Foto Dokter</label>
                        <input type="file" name="photo" accept="image/*" 
                               class="block w-full text-xs text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition border border-gray-100 rounded-xl py-2 px-3">
                    </div>
                </div>

                <!-- Row 3: Jadwal -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Jadwal Praktik (Teks)</label>
                    <textarea name="schedule_text" rows="3" required
                              class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 p-4"
                              placeholder="Contoh: Senin - Kamis | 08:00 - 12:00">{{ old('schedule_text') }}</textarea>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.doctors.index') }}" class="px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition">Batal</a>
            <button type="submit" class="px-10 py-4 bg-emerald-600 text-white font-black rounded-2xl hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                Tambah Dokter
            </button>
        </div>
    </form>
</div>
@endsection
