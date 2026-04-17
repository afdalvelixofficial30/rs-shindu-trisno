<!-- Footer Section -->
<footer class="bg-gray-950 text-white pt-24 pb-12 relative overflow-hidden">
    <!-- Decor Background -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-emerald-900/10 rounded-full blur-[120px] translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="container mx-auto px-4 md:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 mb-20">
            
            <!-- col 1: Brand & Contact -->
            <div class="lg:col-span-4">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-14 h-14 bg-white border-2 border-emerald-900 rounded-full flex items-center justify-center p-1 shadow-2xl">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo RS" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h2 class="text-xl font-bold  tracking-tight leading-tight ">RS DR. SINDHU TRISNO</h2>
                        <p class="text-[9px] text-emerald-500 font-bold  tracking-[0.2em] mt-0.5">Hesti Wira Sakti • Palaka Wira</p>
                    </div>
                </div>
                
                <p class="text-gray-400 text-xs font-bold leading-relaxed  tracking-tight mb-8 max-w-sm">
                    Memberikan pelayanan kesehatan terbaik bagi prajurit TNI AD, ASN, keluarga, dan seluruh lapisan masyarakat dengan semangat PASTI.
                </p>

                <!-- Status & Akreditasi -->
                <div class="mb-10 p-5 bg-emerald-900/30 border border-emerald-900/50 rounded-2xl w-full max-w-sm relative">
                    <div class="absolute -top-3 left-6 px-3 bg-gray-950 text-[9px] font-bold  tracking-widest text-emerald-500 ">Legalitas & Status</div>
                    <ul class="space-y-2 text-[10px] font-bold text-gray-300  tracking-widest">
                        <li class="flex items-center justify-between border-b border-white/5 pb-2">
                            <span>Klasifikasi:</span>
                            <span class="text-white">Rumah Sakit Umum Tipe [C]</span>
                        </li>
                        <li class="flex items-center justify-between border-b border-white/5 pb-2">
                            <span>Status Izin:</span>
                            <span class="text-white">No. [13012300136480002]</span>
                        </li>
                        <li class="flex items-center justify-between border-b border-white/5 pb-2">
                            <span>Masa Berlaku:</span>
                            <span class="text-white">Sampai 15 Oktober 2030</span>
                        </li>
                        <li class="flex items-center justify-between">
                            <span>Akreditasi:</span>
                            <span class="text-emerald-400">[Utama] LAFKI</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-lg bg-emerald-900 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <p class="text-[10px] text-gray-400 font-bold  tracking-widest leading-loose  underline decoration-emerald-900 underline-offset-4">
                            Jl. Sisingamangaraja No. 4, Kel. Besusu Timur, Palu Timur, Kota Palu, Sulteng 94188
                        </p>
                    </div>
                    <div class="flex items-center gap-4 group">
                        <div class="w-8 h-8 rounded-lg bg-red-900/40 border border-red-900/50 flex items-center justify-center text-red-500 shrink-0 group-hover:bg-red-600 group-hover:text-white transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <a href="https://wa.me/6281213756763" target="_blank" class="text-sm font-bold  tracking-tight text-red-500 hover:text-red-400 transition-colors">Emergency: 0812-1375-6763</a>
                    </div>
                </div>
            </div>

            <!-- col 2: Links & Social -->
            <div class="lg:col-span-3">
                <h4 class="text-[11px] font-bold tracking-[.3em] text-emerald-500 mb-8">Jalur Layanan</h4>
                <div class="flex flex-col gap-4 mb-12">
                    @foreach([
                        ['t' => 'Pendaftaran BPJS (JKN)', 'url' => 'https://play.google.com/store/apps/details?id=app.bpjs.mobile'],
                        ['t' => 'Pendaftaran Umum (WA)', 'url' => 'https://wa.me/6285367919663'],
                        ['t' => 'Layanan MCU (WA)', 'url' => 'https://wa.me/6285236522263'],
                        ['t' => 'Portal Pengaduan', 'url' => 'https://sipandurumkit.com/'],
                        ['t' => 'Humas & Informasi', 'url' => 'https://wa.me/6285256508722']
                    ] as $link)
                    <a href="{{ $link['url'] }}" target="_blank" class="group flex items-center gap-3 text-[10px] font-bold text-gray-400 hover:text-emerald-400 tracking-widest transition-all">
                        <span class="w-1.5 h-1.5 bg-emerald-800 rounded-full group-hover:w-3 group-hover:bg-emerald-500 transition-all duration-300"></span>
                        {{ $link['t'] }}
                    </a>
                    @endforeach
                </div>

                <!-- Media Sosial -->
                <h4 class="text-[11px] font-bold tracking-[.3em] text-emerald-500 mb-6">Media Sosial Kami</h4>
                <div class="flex flex-wrap gap-3">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/rumkitdr.sindhutrisno/" target="_blank" title="@rumkitdr.sindhutrisno" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 text-gray-400 hover:bg-gradient-to-tr hover:from-yellow-500 hover:via-pink-500 hover:to-purple-500 hover:text-white hover:border-transparent hover:-translate-y-1 transition-all shadow-lg hover:shadow-pink-500/25">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61555841205768#" target="_blank" title="Rumah Sakit Sindhu Trisno" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 text-gray-400 hover:bg-[#1877F2] hover:text-white hover:border-transparent hover:-translate-y-1 transition-all shadow-lg hover:shadow-[#1877F2]/25">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <!-- Youtube -->
                    <a href="https://www.youtube.com/@rumkitsindhutrisno" target="_blank" title="rumkit sindhutrisno" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 text-gray-400 hover:bg-[#FF0000] hover:text-white hover:border-transparent hover:-translate-y-1 transition-all shadow-lg hover:shadow-[#FF0000]/25">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                    </a>
                    <!-- Tiktok -->
                    <a href="https://www.tiktok.com/@sindhutris" target="_blank" title="@sindhutris" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 text-gray-400 hover:bg-black hover:text-white hover:border-gray-700 hover:-translate-y-1 transition-all shadow-lg hover:shadow-white/10 relative overflow-hidden">
                        <svg class="w-5 h-5 relative z-10 group-hover:drop-shadow-[2px_2px_0_#ff0050] transition-all" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path><path d="M15 8a4 4 0 1 0 0-8c0 2.5 2 5 5 5v4a9 9 0 0 1-5-1z"></path></svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/6285256508722" target="_blank" title="+62 852-5650-8722" class="group flex items-center justify-center w-10 h-10 rounded-xl bg-gray-900 border border-gray-800 text-gray-400 hover:bg-[#25D366] hover:text-white hover:border-transparent hover:-translate-y-1 transition-all shadow-lg hover:shadow-[#25D366]/25">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </a>
                </div>
            </div>

            <!-- col 3: Maps -->
            <div class="lg:col-span-5">
                <h4 class="text-[11px] font-bold  tracking-[.3em] text-emerald-500 mb-10">Lokasi Presisi</h4>
                <div class="w-full h-80 bg-gray-900 rounded-[2.5rem] overflow-hidden border border-white/5 shadow-2xl relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.206675003316!2d119.88043642354897!3d-0.8938927429158328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8be9492476579b%3A0x89e001851e59cda8!2sRumah%20Sakit%20Tk.%20III%20Dr.%20Sindhu%20Trisno!5e0!3m2!1sid!2sid!4v1712398539241!5m2!1sid!2sid" 
                        class="w-full h-full grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700 pointer-events-none sm:pointer-events-auto" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
            
        </div>

        <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center gap-8 opacity-40">
            <p class="text-[9px] font-bold  tracking-[0.2em]  text-center md:text-left">
                © 2026 RS Tkt. III 13.06.01 Dr. Sindhu Trisno Palu. All Rights Reserved. <br>
                <span class="text-emerald-500">Hesti Wira Sakti — Korps Kesehatan Angkatan Darat</span>
            </p>
            <div class="flex flex-wrap justify-center md:justify-end items-center gap-6 text-[10px] font-bold tracking-[0.15em] uppercase text-emerald-500">
                <a href="#" class="hover:text-white transition-colors duration-300">Syarat dan Ketentuan</a>
                <span class="w-1 h-1 rounded-full bg-white/20 hidden sm:block"></span>
                <a href="#" class="hover:text-white transition-colors duration-300">Privasi</a>
                <span class="w-1 h-1 rounded-full bg-white/20 hidden sm:block"></span>
                <a href="#" class="hover:text-white transition-colors duration-300">Kebijakan</a>
            </div>
        </div>
    </div>
</footer>
