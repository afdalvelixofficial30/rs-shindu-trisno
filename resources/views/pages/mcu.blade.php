@extends('layouts.app')
@section('title', 'Medical Check-Up & Surat Keterangan - RS Tkt. III Dr. Sindhu Trisno')

@section('content')
    @include('partials.header')

    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- ── PAGE HERO ── --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-emerald-700/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><span class="opacity-80">Layanan</span>
                    <span>/</span><span class="text-emerald-300">Medical Check-Up</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Layanan Unggulan</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Medical Check-Up &<br><span class="text-emerald-400">Surat Keterangan Resmi</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Pemeriksaan kesehatan menyeluruh dan penerbitan surat keterangan resmi tersertifikasi oleh tenaga medis profesional RS Dr. Sindhu Trisno.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-6xl">

            {{-- ── MCU PACKAGES ── --}}
            <div class="mb-16">
                <div class="mb-10">
                    <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-2 uppercase">Paket Pemeriksaan</p>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">Pilih Paket MCU Anda</h2>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    {{-- MCU 1 --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg p-8 transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                        <span class="absolute top-5 right-5 text-[9px] font-bold tracking-widest text-emerald-700 bg-emerald-50 border border-emerald-100 px-2.5 py-1 rounded-full uppercase">Rekomendasi</span>
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all mb-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900 mb-1">Paket MCU 1</h3>
                        <p class="text-emerald-600 text-sm font-semibold mb-4">Pemeriksaan Lengkap & Komprehensif</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">Evaluasi kesehatan menyeluruh dengan parameter klinis terlengkap untuk deteksi dini penyakit kronis dan kondisi tubuh secara keseluruhan.</p>
                        <div class="space-y-2.5 mb-6">
                            @foreach(['Laboratorium Klinik Lengkap','Pemeriksaan Radiologi (Rontgen Dada)','USG Abdomen','Rekam Jantung (EKG)','Pemeriksaan Fisik Menyeluruh','Pemeriksaan THT','Pemeriksaan Mata','Pemeriksaan Gigi & Mulut','Konsultasi Kesehatan Jiwa','Konsultasi Dokter Umum'] as $item)
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-sm text-gray-700">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                        <a href="https://wa.me/6285236522263" class="inline-flex items-center gap-2 text-[11px] font-bold tracking-widest text-emerald-700 uppercase group-hover:gap-3 transition-all">
                            Reservasi Paket MCU 1 <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </a>
                    </div>

                    {{-- MCU 2 --}}
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-lg p-8 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all mb-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                        </div>
                        <h3 class="text-xl font-extrabold text-gray-900 mb-1">Paket MCU 2</h3>
                        <p class="text-emerald-600 text-sm font-semibold mb-4">Skrining Dasar & Esensial</p>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6">Skrining kesehatan esensial untuk memantau indikator vital tubuh Anda dengan prosedur yang cepat dan efisien.</p>
                        <div class="space-y-2.5 mb-6">
                            @foreach(['Laboratorium (Darah Rutin, Urine Rutin)','Pemeriksaan Fisik Dasar','Pemeriksaan THT','Pemeriksaan Kesehatan Mata','Pemeriksaan Gigi & Mulut','Konsultasi Dokter Umum'] as $item)
                            <div class="flex items-center gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center shrink-0">
                                    <svg class="w-3 h-3 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-sm text-gray-700">{{ $item }}</span>
                            </div>
                            @endforeach
                        </div>
                        <a href="https://wa.me/6285236522263" class="inline-flex items-center gap-2 text-[11px] font-bold tracking-widest text-emerald-700 uppercase group-hover:gap-3 transition-all">
                            Reservasi Paket MCU 2 <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- ── SURAT KETERANGAN ── --}}
            <div class="mb-16">
                <div class="mb-8">
                    <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-600 mb-2 uppercase">Surat Resmi Tersertifikasi</p>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900">Jenis Surat Keterangan</h2>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach([
                        ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','label'=>'Bebas Narkoba','desc'=>'Surat keterangan bebas narkoba untuk keperluan melamar kerja, instansi pemerintah, TNI/Polri, dan keperluan resmi lainnya.','syarat'=>['KTP/Identitas Diri','Surat Pengantar (jika ada)','Biaya administrasi']],
                        ['icon'=>'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z','label'=>'Berbadan Sehat','desc'=>'Surat keterangan sehat untuk berbagai keperluan administrasi, termasuk melamar pekerjaan, pendaftaran sekolah, atau persyaratan lainnya.','syarat'=>['KTP/Identitas Diri','Pemeriksaan Fisik Langsung','Biaya administrasi']],
                        ['icon'=>'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z','label'=>'Keterangan Psikologi','desc'=>'Evaluasi kondisi mental dan psikologis yang diterbitkan oleh dokter yang berwenang untuk keperluan instansi atau pengurusan berkas.','syarat'=>['KTP/Identitas Diri','Surat Pengantar Instansi','Wawancara Psikologi','Biaya administrasi']],
                    ] as $s)
                    <div class="group bg-white rounded-2xl border border-gray-100 hover:border-emerald-200 shadow-sm hover:shadow-md p-6 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 group-hover:bg-emerald-600 flex items-center justify-center text-emerald-700 group-hover:text-white transition-all mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/></svg>
                        </div>
                        <h3 class="text-sm font-extrabold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">Surat {{ $s['label'] }}</h3>
                        <p class="text-gray-500 text-xs leading-relaxed mb-4">{{ $s['desc'] }}</p>
                        <div class="pt-4 border-t border-gray-50">
                            <p class="text-[10px] font-bold tracking-widest text-gray-400 uppercase mb-2">Persyaratan</p>
                            <ul class="space-y-1.5">
                                @foreach($s['syarat'] as $req)
                                <li class="flex items-center gap-2 text-xs text-gray-600">
                                    <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 shrink-0"></div>{{ $req }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- ── CTA RESERVASI ── --}}
            <div class="bg-emerald-950 rounded-2xl p-8 md:p-10 flex flex-col md:flex-row md:items-center justify-between gap-6 border border-white/5">
                <div>
                    <h3 class="text-xl font-extrabold text-white mb-2">Siap Melakukan Pemeriksaan?</h3>
                    <p class="text-emerald-300/70 text-sm">Hubungi koordinator MCU kami untuk jadwal dan informasi lebih lanjut.</p>
                    <p class="text-emerald-400 text-xs font-semibold mt-1">Ns. Fahrul Rohman, S.Kep · Sen–Jum 08.00–15.00 WITA</p>
                </div>
                <a href="https://wa.me/6285236522263" target="_blank"
                   class="shimmer-auto shrink-0 inline-flex items-center gap-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs tracking-widest px-7 py-4 rounded-xl transition-all shadow-lg shadow-emerald-900/30">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.277.042-.615.061-1.043-.076-.235-.075-.558-.175-.989-.356-1.848-.778-3.04-2.668-3.133-2.793-.092-.125-.746-.995-.746-1.895s.467-1.341.637-1.517c.171-.176.371-.22.493-.22.122 0 .244.004.348.009.112.005.263-.042.404.298.146.353.497 1.21.542 1.301.045.092.073.2.012.321-.061.121-.092.196-.183.303-.092.107-.193.238-.274.321-.092.096-.188.2-.083.382.105.183.473.782 1.012 1.265.694.622 1.282.816 1.464.91.183.092.29.076.398-.046.107-.122.463-.538.586-.723.122-.185.244-.153.414-.092.171.061 1.085.512 1.272.606.183.092.304.137.352.213.047.078.047.447-.097.852z"/></svg>
                    Hubungi via WhatsApp
                </a>
            </div>

        </div>
    </main>

    @include('partials.footer')
@endsection
