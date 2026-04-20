@extends('layouts.admin')
@section('title', 'Edit Data Dokter')

@section('content')
<div class="max-w-4xl mx-auto py-4">
    <div class="mb-8 flex items-center gap-4">
        <a href="{{ route('admin.doctors.index') }}" class="p-2 bg-white border border-gray-100 rounded-xl hover:bg-gray-50 transition text-gray-500 shadow-sm">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
        </a>
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">Edit Data Dokter</h1>
            <p class="text-gray-500">Perbarui rincian informasi dan foto dokter spelisialis.</p>
        </div>
    </div>

    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-8">
            <div class="p-6 md:p-8 space-y-6">
                <!-- Row 1: Nama & Poliklinik -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap & Gelar</label>
                        <input type="text" name="name" value="{{ old('name', $doctor->name) }}" required
                               class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Poliklinik</label>
                        <select name="poliklinik_id" required class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4">
                            @foreach($polikliniks as $poli)
                                <option value="{{ $poli->id }}" {{ $poli->id == $doctor->poliklinik_id ? 'selected' : '' }}>{{ $poli->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Row 2: Spesialisasi & Foto -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Spesialisasi</label>
                        <input type="text" name="specialty" value="{{ old('specialty', $doctor->specialty) }}" required
                               class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3 px-4"
                               placeholder="Contoh: Spesialis Jantung">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Foto Dokter</label>
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-xl bg-gray-50 border border-gray-100 overflow-hidden shrink-0">
                                @if($doctor->photo)
                                    <img src="{{ asset('assets/images/doctors/' . $doctor->photo) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-300">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                    </div>
                                @endif
                            </div>
                            <input type="file" name="photo" accept="image/*" 
                                   class="block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition">
                        </div>
                    </div>
                </div>

                <!-- Row 3: Jadwal -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Jadwal Praktik (Teks)</label>
                    <textarea name="schedule_text" rows="3" required
                              class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 p-4"
                              placeholder="Contoh: Senin - Kamis | 08:00 - 12:00">{{ old('schedule_text', $doctor->schedule_text) }}</textarea>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('admin.doctors.index') }}" class="px-8 py-4 bg-gray-100 text-gray-600 font-bold rounded-2xl hover:bg-gray-200 transition">Batal</a>
            <button type="submit" class="px-10 py-4 bg-emerald-600 text-white font-black rounded-2xl hover:bg-emerald-700 transition shadow-lg shadow-emerald-100">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
