@extends('layouts.app')
@section('title', 'Jaminan Layanan & Asuransi - RS Tkt. III Dr. Sindhu Trisno')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Jaminan Layanan</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Informasi Pasien</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Jaminan &<br><span class="text-emerald-400">Asuransi Layanan</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">RS Dr. Sindhu Trisno melayani berbagai jaminan kesehatan. Pastikan Anda memahami hak dan alur klaim jaminan Anda.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-5xl">

            {{-- ── JAMINAN CARDS ── --}}
            <div class="mb-14">
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-2 uppercase">Jaminan yang Diterima</p>
                <h2 class="text-2xl font-extrabold text-gray-900 mb-8">Jenis Penjamin Layanan</h2>

                <div class="grid sm:grid-cols-2 gap-5">

                    {{-- BPJS Kesehatan --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-600 transition-all overflow-hidden">
                                <img src="{{ asset('assets/images/bpjs-kesehatan.png') }}" alt="BPJS Kesehatan" class="h-10 w-auto object-contain group-hover:brightness-0 group-hover:invert transition-all">
                            </div>
                            <div>
                                <h3 class="text-base font-extrabold text-gray-900">BPJS Kesehatan</h3>
                                <p class="text-xs text-emerald-600 font-semibold">Jaminan Sosial Nasional</p>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">RS Dr. Sindhu Trisno adalah Fasilitas Kesehatan Rujukan Tingkat Lanjut (FKRTL) yang bekerjasama dengan BPJS Kesehatan. Pasien dengan rujukan valid dapat menggunakan layanan Rawat Jalan, Rawat Inap, dan IGD.</p>
                        <div class="space-y-2 pt-4 border-t border-gray-50">
                            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-3">Yang Ditanggung</p>
                            @foreach(['Rawat Jalan Spesialis (dengan rujukan)','Rawat Inap sesuai kelas','IGD (kondisi gawat darurat)','Obat-obatan dalam formularium','Pemeriksaan penunjang (Lab, Radiologi)'] as $item)
                            <div class="flex items-center gap-2 text-xs text-gray-600">
                                <div class="w-4 h-4 rounded-full bg-emerald-50 flex items-center justify-center shrink-0"><svg class="w-2.5 h-2.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></div>
                                {{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- BPJS Ketenagakerjaan --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-600 transition-all overflow-hidden">
                                <img src="{{ asset('assets/images/bpjs-ketenagakerjaan.png') }}" alt="BPJS Ketenagakerjaan" class="h-10 w-auto object-contain group-hover:brightness-0 group-hover:invert transition-all">
                            </div>
                            <div>
                                <h3 class="text-base font-extrabold text-gray-900">BPJS Ketenagakerjaan</h3>
                                <p class="text-xs text-emerald-600 font-semibold">Jaminan Kecelakaan Kerja & Kematian</p>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">Melayani klaim program Jaminan Kecelakaan Kerja (JKK) dan Jaminan Pemeliharaan Kesehatan bagi pekerja formal yang terdaftar sebagai peserta BPJS Ketenagakerjaan.</p>
                        <div class="space-y-2 pt-4 border-t border-gray-50">
                            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-3">Persyaratan Klaim JKK</p>
                            @foreach(['Kartu peserta BPJS Ketenagakerjaan','Laporan kecelakaan kerja (form KK3)','Surat keterangan dari perusahaan','KTP yang berlaku'] as $item)
                            <div class="flex items-center gap-2 text-xs text-gray-600">
                                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>{{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Jasa Raharja --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 rounded-xl bg-emerald-50 flex items-center justify-center group-hover:bg-emerald-600 transition-all overflow-hidden">
                                <img src="{{ asset('assets/images/jasa-raharja-logo.png') }}" alt="Jasa Raharja" class="h-10 w-auto object-contain group-hover:brightness-0 group-hover:invert transition-all">
                            </div>
                            <div>
                                <h3 class="text-base font-extrabold text-gray-900">Jasa Raharja</h3>
                                <p class="text-xs text-emerald-600 font-semibold">Jaminan Korban Kecelakaan Lalu Lintas</p>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">RS Dr. Sindhu Trisno melayani korban kecelakaan lalu lintas yang ditanggung Jasa Raharja (UU No. 33/1964 dan UU No. 34/1964). Penanganan segera dilakukan lalu klaim diproses.</p>
                        <div class="space-y-2 pt-4 border-t border-gray-50">
                            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-3">Persyaratan Klaim</p>
                            @foreach(['Laporan kecelakaan dari Kepolisian (LP)','KTP korban/ahli waris','Keterangan dokter yang merawat','Kuitansi biaya perawatan RS'] as $item)
                            <div class="flex items-center gap-2 text-xs text-gray-600">
                                <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>{{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Pasien Umum --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 rounded-xl bg-gray-50 group-hover:bg-gray-700 flex items-center justify-center text-gray-600 group-hover:text-white transition-all">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-base font-extrabold text-gray-900">Pasien Umum (Mandiri)</h3>
                                <p class="text-xs text-gray-500 font-semibold">Biaya Sendiri / Out of Pocket</p>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm leading-relaxed mb-5">Pasien yang tidak memiliki jaminan kesehatan atau memilih membayar langsung. Dapat mengakses semua layanan RS tanpa antri rujukan.</p>
                        <div class="space-y-2 pt-4 border-t border-gray-50">
                            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-3">Keunggulan Pasien Umum</p>
                            @foreach(['Tidak perlu surat rujukan','Bebas memilih poliklinik langsung','Proses pendaftaran lebih cepat','Bisa memilih dokter spesialis'] as $item)
                            <div class="flex items-center gap-2 text-xs text-gray-600">
                                <div class="w-1.5 h-1.5 rounded-full bg-gray-400 shrink-0"></div>{{ $item }}
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            {{-- ── PENTING ── --}}
            <div class="bg-amber-50 border border-amber-100 rounded-2xl p-6 mb-10 flex gap-4">
                <svg class="w-5 h-5 text-amber-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <div>
                    <h4 class="text-sm font-extrabold text-amber-800 mb-1">Catatan Penting BPJS</h4>
                    <p class="text-xs text-amber-700 leading-relaxed">Pastikan status kepesertaan BPJS Anda aktif dan iuran tidak menunggak sebelum datang ke RS. Surat rujukan BPJS dari Faskes 1 wajib dibawa untuk layanan Rawat Jalan Spesialis (bukan kondisi darurat). Untuk kondisi gawat darurat, BPJS tetap berlaku meski tanpa rujukan. </p>
                </div>
            </div>

            {{-- CTA --}}
            <div class="bg-emerald-950 rounded-2xl p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-5 border border-white/5">
                <div>
                    <h3 class="text-base font-extrabold text-white mb-1">Butuh Konfirmasi Jaminan?</h3>
                    <p class="text-emerald-300/70 text-xs">Hubungi bagian admisi atau loket informasi RS kami.</p>
                </div>
                <a href="{{ route('alur-pendaftaran') }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Lihat Alur Pendaftaran <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
