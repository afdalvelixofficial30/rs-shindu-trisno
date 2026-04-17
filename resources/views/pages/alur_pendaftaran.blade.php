@extends('layouts.app')
@section('title', 'Alur Pendaftaran Pasien - RS Tkt. III Dr. Sindhu Trisno')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="text-emerald-300">Alur Pendaftaran</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Informasi Pasien</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Alur <span class="text-emerald-400">Pendaftaran Pasien</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Panduan lengkap proses pendaftaran pasien Rawat Jalan, Rawat Inap, dan IGD di RS Dr. Sindhu Trisno, baik untuk pasien BPJS maupun Umum.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-5xl">

            {{-- ── TAB: BPJS vs UMUM ── --}}
            <div x-data="{ tab: 'bpjs' }" class="mb-16">
                <div class="flex gap-2 mb-10 bg-gray-50 p-1 rounded-xl w-fit">
                    <button @click="tab='bpjs'" :class="tab==='bpjs' ? 'bg-white shadow-sm text-emerald-700 font-bold' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-200">BPJS Kesehatan</button>
                    <button @click="tab='umum'" :class="tab==='umum' ? 'bg-white shadow-sm text-emerald-700 font-bold' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-200">Pasien Umum</button>
                    <button @click="tab='igd'" :class="tab==='igd' ? 'bg-white shadow-sm text-emerald-700 font-bold' : 'text-gray-500 hover:text-gray-700'"
                            class="px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-200">IGD Darurat</button>
                </div>

                {{-- BPJS --}}
                <div x-show="tab==='bpjs'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="mb-6">
                        <h2 class="text-xl font-extrabold text-gray-900 mb-1">Alur Pendaftaran BPJS Kesehatan</h2>
                        <p class="text-gray-500 text-sm">Pastikan Anda membawa persyaratan lengkap sebelum datang ke fasilitas.</p>
                    </div>
                    {{-- Steps --}}
                    <div class="space-y-4">
                        @foreach([
                            ['step'=>'01','title'=>'Pastikan Kepesertaan BPJS Aktif','desc'=>'Cek status kepesertaan BPJS Kesehatan Anda via aplikasi Mobile JKN, website BPJS, atau WhatsApp BPJS (08118165165). Pastikan iuran tidak menunggak.','icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                            ['step'=>'02','title'=>'Kunjungi Faskes Tingkat Pertama','desc'=>'Datangi Puskesmas atau Klinik Faskes 1 sesuai yang terdaftar di kartu BPJS Anda untuk mendapatkan Surat Rujukan ke Poli Spesialis RS Dr. Sindhu Trisno.','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                            ['step'=>'03','title'=>'Daftar di Loket Pendaftaran RS','desc'=>'Bawa Kartu BPJS/KIS, KTP, dan Surat Rujukan dari Faskes 1. Ambil nomor antrian dan daftarkan diri di loket BPJS yang tersedia.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                            ['step'=>'04','title'=>'Tunggu Panggilan di Poliklinik','desc'=>'Duduk di ruang tunggu Poliklinik yang dituju. Petugas akan memanggil nama Anda sesuai urutan antrian.','icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['step'=>'05','title'=>'Pemeriksaan oleh Dokter Spesialis','desc'=>'Dokter Spesialis akan memeriksa dan memberikan diagnosa. Jika diperlukan, dokter akan memberikan surat rujukan permintaan pemeriksaan penunjang (Lab/Radiologi).','icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
                            ['step'=>'06','title'=>'Ambil Resep & Pulang','desc'=>'Setelah selesai konsultasi, ambil resep dokter dan tukarkan di Apotek RS yang melayani BPJS. Semua biaya ditanggung BPJS sesuai ketentuan yang berlaku.','icon'=>'M5 13l4 4L19 7'],
                        ] as $s)
                        <div class="flex gap-4 bg-white rounded-2xl border border-gray-100 p-5 hover:border-emerald-100 hover:shadow-sm transition-all duration-200 group">
                            <div class="shrink-0">
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/></svg>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <span class="text-[10px] font-black text-emerald-600">LANGKAH {{ $s['step'] }}</span>
                                </div>
                                <h4 class="text-sm font-bold text-gray-900 mb-1">{{ $s['title'] }}</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- UMUM --}}
                <div x-show="tab==='umum'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" style="display:none;">
                    <div class="mb-6">
                        <h2 class="text-xl font-extrabold text-gray-900 mb-1">Alur Pendaftaran Pasien Umum</h2>
                        <p class="text-gray-500 text-sm">Pasien umum tidak memerlukan surat rujukan. Langsung datang ke RS.</p>
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            ['step'=>'01','title'=>'Datang Langsung ke Loket Pendaftaran','desc'=>'Pasien Umum dapat langsung menuju loket pendaftaran. Tidak diperlukan surat rujukan. Bawa KTP atau identitas diri yang berlaku.','icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                            ['step'=>'02','title'=>'Pilih Poliklinik yang Dituju','desc'=>'Informasikan kepada petugas loket poliklinik mana yang ingin Anda kunjungi. Petugas akan memverifikasi jadwal dokter spesialis yang tersedia.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                            ['step'=>'03','title'=>'Pembayaran Biaya Pendaftaran','desc'=>'Lakukan pembayaran biaya registrasi di kasir. Simpan bukti pembayaran sebagai tanda bukti pendaftaran yang sah.','icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z'],
                            ['step'=>'04','title'=>'Tunggu Panggilan & Periksa','desc'=>'Duduk di ruang tunggu poliklinik tujuan. Dokter spesialis akan memeriksa, mendiagnosa, dan memberikan resep atau tindakan yang diperlukan.','icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['step'=>'05','title'=>'Tebus Resep di Apotek RS','desc'=>'Ambil resep dari dokter dan tebus di Apotek RS. Biaya obat akan ditanggung sendiri oleh pasien umum (out of pocket).','icon'=>'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'],
                        ] as $s)
                        <div class="flex gap-4 bg-white rounded-2xl border border-gray-100 p-5 hover:border-emerald-100 hover:shadow-sm transition-all duration-200 group">
                            <div class="shrink-0">
                                <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/></svg>
                                </div>
                            </div>
                            <div>
                                <span class="text-[10px] font-black text-emerald-600">LANGKAH {{ $s['step'] }}</span>
                                <h4 class="text-sm font-bold text-gray-900 mt-1 mb-1">{{ $s['title'] }}</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- IGD --}}
                <div x-show="tab==='igd'" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" style="display:none;">
                    <div class="mb-6">
                        <h2 class="text-xl font-extrabold text-gray-900 mb-1">Alur Penanganan IGD (Darurat)</h2>
                        <p class="text-gray-500 text-sm">Instalasi Gawat Darurat beroperasi <strong>24 jam penuh</strong> nonstop. Tidak diperlukan administrasi terlebih dahulu.</p>
                    </div>
                    <div class="bg-red-50 border border-red-100 rounded-2xl p-5 mb-6 flex gap-3">
                        <svg class="w-5 h-5 text-red-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        <div>
                            <p class="text-sm font-bold text-red-700 mb-0.5">Kondisi Darurat? Hubungi Langsung:</p>
                            <a href="https://wa.me/6281213756763" target="_blank" class="text-lg font-extrabold text-red-600 hover:text-red-700">0812-1375-6763</a>
                            <p class="text-xs text-red-500 mt-1">Tim IGD siap merespons 24 jam, 7 hari seminggu.</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            ['step'=>'01','title'=>'Datang atau Hubungi IGD','desc'=>'Segera bawa pasien ke pintu masuk IGD atau hubungi nomor darurat. Petugas IGD akan segera menyambut dan menilai kondisi pasien.','icon'=>'M13 10V3L4 14h7v7l9-11h-7z'],
                            ['step'=>'02','title'=>'Triase & Penilaian Awal','desc'=>'Dokter dan perawat IGD melakukan triase (penilaian tingkat kegawatan) untuk menentukan prioritas penanganan sesuai kondisi medis pasien.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                            ['step'=>'03','title'=>'Penanganan Medis Segera','desc'=>'Tim medis IGD memberikan pertolongan pertama dan penanganan stabilisasi kondisi pasien. Pemeriksaan penunjang (Lab/Radiologi) dilakukan jika diperlukan.','icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                            ['step'=>'04','title'=>'Administrasi (Setelah Kondisi Stabil)','desc'=>'Keluarga pasien mengurus administrasi (identitas, jaminan) setelah kondisi pasien stabil. Jangan tunda penanganan hanya karena administrasi belum selesai.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                            ['step'=>'05','title'=>'Keputusan: Pulang / Rawat Inap / Rujuk','desc'=>'Dokter IGD akan memutuskan apakah pasien boleh pulang, perlu rawat inap, atau perlu dirujuk ke fasilitas dengan peralatan lebih lengkap.','icon'=>'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
                        ] as $s)
                        <div class="flex gap-4 bg-white rounded-2xl border border-gray-100 p-5 hover:border-red-100 hover:shadow-sm transition-all duration-200 group">
                            <div class="shrink-0">
                                <div class="w-10 h-10 rounded-xl bg-red-50 group-hover:bg-red-500 flex items-center justify-center text-red-500 group-hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/></svg>
                                </div>
                            </div>
                            <div>
                                <span class="text-[10px] font-black text-red-500">LANGKAH {{ $s['step'] }}</span>
                                <h4 class="text-sm font-bold text-gray-900 mt-1 mb-1">{{ $s['title'] }}</h4>
                                <p class="text-xs text-gray-500 leading-relaxed">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ── DOKUMEN PERSYARATAN ── --}}
            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <div class="bg-white rounded-2xl border border-gray-100 p-6">
                    <h3 class="text-sm font-extrabold text-gray-900 mb-4 flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-emerald-50 flex items-center justify-center text-emerald-700"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                        Dokumen BPJS Kesehatan
                    </h3>
                    <ul class="space-y-2">
                        @foreach(['Kartu BPJS / KIS yang masih aktif','KTP (asli + fotokopi)','Surat Rujukan dari Faskes 1 (Puskesmas/Klinik)','Surat Kontrol (jika kunjungan lanjutan)'] as $d)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 py-1.5 border-b border-gray-50 last:border-0">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 shrink-0"></div>{{ $d }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-white rounded-2xl border border-gray-100 p-6">
                    <h3 class="text-sm font-extrabold text-gray-900 mb-4 flex items-center gap-2">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center text-gray-700"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                        Dokumen Pasien Umum
                    </h3>
                    <ul class="space-y-2">
                        @foreach(['KTP / Identitas diri yang berlaku','Kartu keluarga (opsional)','Uang tunai / kartu pembayaran','Rekam medis sebelumnya (jika ada)'] as $d)
                        <li class="flex items-center gap-2.5 text-sm text-gray-600 py-1.5 border-b border-gray-50 last:border-0">
                            <div class="w-1.5 h-1.5 rounded-full bg-gray-400 shrink-0"></div>{{ $d }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- CTA --}}
            <div class="bg-emerald-950 rounded-2xl p-7 flex flex-col sm:flex-row sm:items-center justify-between gap-5 border border-white/5">
                <div>
                    <h3 class="text-base font-extrabold text-white mb-1">Ada Pertanyaan Lebih Lanjut?</h3>
                    <p class="text-emerald-300/70 text-xs">Hubungi kami melalui WhatsApp atau datang langsung ke RS.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="https://wa.me/6285397616993" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z"/></svg>
                        WA Pendaftaran
                    </a>
                    <a href="{{ route('jadwal-poliklinik') }}" class="inline-flex items-center gap-2 border border-emerald-700 text-emerald-400 hover:bg-emerald-900 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                        Lihat Jadwal Dokter
                    </a>
                </div>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
