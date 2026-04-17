@extends('layouts.app')
@section('title', 'Sambutan Kepala Rumah Sakit - RS Tkt. III Dr. Sindhu Trisno')
@section('content')
    @include('partials.header')
    <main class="min-h-screen bg-gradient-to-br from-white via-emerald-50/30 to-white">

        {{-- HERO --}}
        <div class="relative bg-emerald-950 pt-24 pb-20 overflow-hidden">
            <div
                class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_white_1px,_transparent_1px)] bg-[length:24px_24px] pointer-events-none">
            </div>
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="flex items-center gap-2 text-emerald-400/70 text-[11px] font-semibold tracking-widest mb-6">
                    <a href="{{ url('/') }}" class="hover:text-emerald-200 transition-colors">Beranda</a>
                    <span>/</span><a href="{{ route('profil') }}" class="hover:text-emerald-200 transition-colors">Tentang
                        Kami</a>
                    <span>/</span><span class="text-emerald-300">Sambutan Karumkit</span>
                </div>
                <p class="text-[11px] font-bold tracking-[0.3em] text-emerald-400 mb-3 uppercase">Tentang Kami</p>
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight mb-4">Sambutan <span
                        class="text-emerald-400">Kepala Rumah Sakit</span></h1>
                <p class="text-emerald-100/70 max-w-xl text-base leading-relaxed">Pesan dan arahan dari Kepala RS Tkt. III
                    Dr. Sindhu Trisno untuk seluruh pasien dan masyarakat Sulawesi Tengah.</p>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-8 py-16 max-w-4xl">

            {{-- Sambutan Card --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden reveal">

                {{-- Header Karumkit --}}
                <div
                    class="bg-gradient-to-r from-emerald-950 to-emerald-800 p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6">
                    <div
                        class="w-28 h-28 md:w-32 md:h-32 rounded-2xl border-2 border-emerald-500/30 overflow-hidden bg-emerald-900 flex items-center justify-center shrink-0 relative">
                        <img src="{{ asset('assets/images/karumkit.png') }}" alt="KARUMKIT"
                            class="w-full h-[230%] absolute left-2 object-top object-cover">
                    </div>
                    <div class="text-center sm:text-left">
                        <p class="text-emerald-400 text-[10px] font-bold tracking-widest uppercase mb-1">Kepala Rumah Sakit
                        </p>
                        <h2 class="text-xl md:text-2xl font-extrabold text-white mb-1">Letnan Kolonel Ckm dr. Marles Edy
                            Wanto Haloho, M.Kes.</h2>
                        <p class="text-emerald-300/70 text-sm">RS Tkt. III 13.06.01 Dr. Sindhu Trisno</p>
                        <p class="text-emerald-400/50 text-xs mt-1">Palu, Sulawesi Tengah · TNI Angkatan Darat</p>
                    </div>
                </div>

                {{-- Isi Sambutan --}}
                <div class="p-8 md:p-12">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-0.5 bg-emerald-500 rounded-full"></div>
                        <p class="text-[11px] font-bold tracking-widest text-emerald-600 uppercase">Sambutan Resmi</p>
                    </div>

                    <div class="prose prose-sm max-w-none text-gray-600 leading-relaxed space-y-5">
                        <p class="text-lg font-semibold text-gray-800">Assalamu'alaikum Warahmatullahi Wabarakatuh,<br>Salam
                            sejahtera bagi kita semua.</p>

                        <p>Puji syukur kehadirat Tuhan Yang Maha Esa atas segala rahmat dan karunia-Nya sehingga Rumah Sakit
                            Tingkat III 13.06.01 Dr. Sindhu Trisno dapat terus hadir melayani masyarakat Sulawesi Tengah
                            dengan penuh dedikasi dan tanggung jawab.</p>

                        <p>Sebagai rumah sakit milik TNI Angkatan Darat yang beroperasi di Kota Palu, kami memiliki komitmen
                            yang kuat untuk memberikan pelayanan kesehatan dengan standar militer: <strong>disiplin,
                                profesional, dan penuh integritas</strong>. Namun lebih dari sekadar standar teknis, kami
                            percaya bahwa kesehatan adalah hak dasar setiap manusia, dan menjadi kewajiban kami untuk hadir
                            melayani seluruh lapisan masyarakat tanpa terkecuali.</p>

                        <p>Dalam beberapa tahun terakhir, kami telah melakukan berbagai pembenahan di bidang infrastruktur,
                            pengembangan kompetensi tenaga medis, serta peningkatan sistem pelayanan berbasis teknologi
                            informasi. Semua ini kami lakukan semata-mata untuk memberikan pengalaman pelayanan kesehatan
                            yang lebih baik, lebih cepat, dan lebih nyaman bagi Anda.</p>

                        <p>Motto kami adalah <strong>PASTI</strong> — Profesional, Akurat, Selaras, Terarah, dan Ikhlas.
                            Kelima nilai ini bukan sekadar slogan, melainkan ruh dari setiap tindakan medis dan non-medis
                            yang kami lakukan setiap harinya.</p>

                        <p>Kepada seluruh pasien, keluarga pasien, dan masyarakat yang telah mempercayakan kesehatan mereka
                            kepada kami — terima kasih yang sebesar-besarnya. Kepercayaan Anda adalah motivasi terkuat kami
                            untuk terus berbenah dan berkembang.</p>

                        <p>Kami mengundang seluruh masyarakat untuk memanfaatkan layanan kesehatan kami, baik layanan rawat
                            jalan, rawat inap, IGD 24 jam, hingga medical check-up dan surat keterangan kesehatan. Semua
                            layanan kami tersedia untuk Anda — pemegang BPJS maupun pasien umum.</p>

                        <p class="font-semibold text-gray-700">Semoga Allah SWT / Tuhan Yang Maha Esa senantiasa melimpahkan
                            kesehatan dan keselamatan bagi kita semua.</p>

                        <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
                    </div>

                    {{-- Signature --}}
                    <div class="mt-10 pt-8 border-t border-gray-100 flex items-end justify-between gap-4">
                        <div>
                            <p class="text-xs text-gray-400 mb-1">Palu, {{ date('Y') }}</p>
                            <p class="text-xs text-emerald-600 font-bold tracking-widest uppercase mb-4">Kepala RS Tkt. III
                                Dr. Sindhu Trisno</p>
                            <div class="w-32 h-0.5 bg-gray-300 mb-2"></div>
                            <p class="text-sm font-bold text-gray-900">Letnan Kolonel Ckm<br>dr. Marles Edy Wanto Haloho,
                                M.Kes.</p>
                        </div>
                        <div
                            class="w-16 h-16 rounded-full border-2 border-emerald-200 bg-emerald-50 flex items-center justify-center">
                            <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="mt-8 flex flex-wrap gap-3 reveal">
                <a href="{{ route('profil') }}"
                    class="inline-flex items-center gap-2 bg-emerald-700 hover:bg-emerald-600 text-white text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Profil RS <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ route('visi-misi') }}"
                    class="inline-flex items-center gap-2 border border-emerald-200 text-emerald-700 hover:bg-emerald-50 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Visi & Misi
                </a>
                <a href="{{ route('struktur-organisasi') }}"
                    class="inline-flex items-center gap-2 border border-emerald-200 text-emerald-700 hover:bg-emerald-50 text-xs font-bold tracking-widest px-5 py-3 rounded-xl transition-all">
                    Struktur Organisasi
                </a>
            </div>

        </div>
    </main>
    @include('partials.footer')
@endsection