@extends('layouts.admin')
@section('title', 'Kelola Profil Rumah Sakit')

@section('content')
<div class="max-w-5xl mx-auto py-4">
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900">Kelola Profil Rumah Sakit</h1>
        <p class="text-gray-500 mt-2">Perbarui informasi dasar, visi, misi, dan identitas rumah sakit.</p>
    </div>

    @if(session('success'))
    <div class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl flex items-center gap-3 shadow-sm">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <p class="font-medium">{{ session('success') }}</p>
    </div>
    @endif

    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="space-y-8">
            <!-- Bagian 1: Karumkit -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Kepala Rumah Sakit (KARUMKIT)</h2>
                </div>
                <div class="p-6 md:p-8 grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap & Gelar</label>
                            <input type="text" name="karumkit_name" value="{{ old('karumkit_name', $profile->karumkit_name) }}" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Pangkat / Jabatan</label>
                            <input type="text" name="karumkit_rank" value="{{ old('karumkit_rank', $profile->karumkit_rank) }}" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Foto KARUMKIT</label>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset($profile->karumkit_photo) }}" alt="Photo" class="w-24 h-32 object-cover rounded-xl border border-gray-200">
                            <div class="flex-1">
                                <input type="file" name="karumkit_photo" accept="image/*" class="block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                                <p class="text-[10px] text-gray-400 mt-2 italic">*Kosongkan jika tidak ingin mengubah foto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian 2: Sambutan & Identitas -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Sambutan & Klasifikasi</h2>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Sambutan RS (Tentang Kami)</label>
                        <textarea name="welcome_message" rows="4" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500">{{ old('welcome_message', $profile->welcome_message) }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Tipe Rumah Sakit</label>
                            <input type="text" name="hospital_type" value="{{ old('hospital_type', $profile->hospital_type) }}" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Akreditasi</label>
                            <input type="text" name="accreditation" value="{{ old('accreditation', $profile->accreditation) }}" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Sertifikasi TTE</label>
                            <input type="text" name="certification" value="{{ old('certification', $profile->certification) }}" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500 py-3">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian 3: Visi, Misi & Motto -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Visi, Misi & Motto</h2>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Visi</label>
                        <textarea name="visi" rows="2" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500">{{ old('visi', $profile->visi) }}</textarea>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Misi (Satu baris per misi)</label>
                            <textarea name="misi_raw" rows="6" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500">{{ old('misi_raw', implode("\n", $profile->misi)) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Motto (Satu baris per kata motto)</label>
                            <textarea name="motto_raw" rows="6" class="w-full border-gray-200 rounded-xl focus:ring-emerald-500 focus:border-emerald-500">{{ old('motto_raw', implode("\n", $profile->motto)) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian 4: Struktur Organisasi -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 bg-gray-50 border-b border-gray-100">
                    <h2 class="text-lg font-bold text-gray-900">Struktur Organisasi (Gambar Bagan)</h2>
                </div>
                <div class="p-6 md:p-8">
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="w-full md:w-1/3">
                            <img src="{{ asset($profile->organization_chart) }}" alt="Bagan" class="w-full rounded-xl border border-gray-100">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Ganti Gambar Bagan</label>
                            <input type="file" name="organization_chart" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition border border-gray-100 rounded-xl cursor-pointer bg-white">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="flex justify-end pt-4 mb-20">
                <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-black py-4 px-10 rounded-2xl transition shadow-lg hover:shadow-emerald-200 active:scale-95">
                    Simpan Perubahan Profil
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
