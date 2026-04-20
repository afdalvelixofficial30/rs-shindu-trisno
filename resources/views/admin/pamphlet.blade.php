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

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-10">
            <div class="p-6 sm:p-8 bg-gray-50/50 border-b border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Upload Pamflet Baru</h2>
                <form action="{{ route('admin.pamphlet.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row gap-4 items-end">
                    @csrf
                    <div class="w-full sm:flex-1">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pilih File Gambar (Maksimal 5MB)</label>
                        <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" required
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition border border-gray-200 rounded-lg cursor-pointer bg-white">
                    </div>
                    <button type="submit" class="w-full sm:w-auto bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-2.5 px-6 rounded-lg transition shadow-sm h-[46px]">
                        Upload
                    </button>
                </form>
                @error('image')
                    <p class="text-red-500 text-sm mt-2 font-medium">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h3 class="text-xl font-bold text-gray-800 mb-6">Daftar Pamflet Terupload</h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($pamphlets as $pamphlet)
            <div class="bg-white border rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition group {{ $pamphlet->is_active ? 'border-emerald-500 ring-2 ring-emerald-100' : 'border-gray-200' }}">
                <div class="h-48 w-full bg-gray-100 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset($pamphlet->image_path) }}" alt="Pamflet" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                    
                    @if($pamphlet->is_active)
                    <div class="absolute top-3 left-3 bg-emerald-500 text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full shadow-md tracking-wider">
                        Aktif Saat Ini
                    </div>
                    @endif
                </div>
                
                <div class="p-5 flex flex-col gap-3">
                    <div class="text-xs text-gray-500">Diunggah: {{ $pamphlet->created_at->format('d M Y, H:i') }}</div>
                    
                    <div class="flex gap-2 mt-2">
                        @if(!$pamphlet->is_active)
                        <form action="{{ route('admin.pamphlet.activate', $pamphlet->id) }}" method="POST" class="flex-1">
                            @csrf
                            <button type="submit" class="w-full bg-gray-100 hover:bg-emerald-100 hover:text-emerald-700 text-gray-700 font-bold py-2 rounded-lg text-sm transition">
                                Jadikan Aktif
                            </button>
                        </form>
                        @else
                        <div class="flex-1 bg-emerald-50 text-emerald-700 font-bold py-2 border border-emerald-100 rounded-lg text-sm text-center flex items-center justify-center gap-1.5 cursor-default">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Sedang Tampil
                        </div>
                        @endif

                        <form action="{{ route('admin.pamphlet.destroy', $pamphlet->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pamflet ini?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="bg-white border border-red-200 text-red-600 hover:bg-red-50 hover:border-red-300 font-bold p-2 rounded-lg transition" title="Hapus">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            @if($pamphlets->isEmpty())
            <div class="col-span-full py-16 text-center bg-white border border-dashed border-gray-300 rounded-2xl">
                <svg class="w-12 h-12 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <div class="text-gray-500 font-medium tracking-wide">Belum ada pamflet yang diupload. <br>Silakan upload pamflet pertama Anda.</div>
            </div>
            @endif
        </div>
    </div>

@endsection
