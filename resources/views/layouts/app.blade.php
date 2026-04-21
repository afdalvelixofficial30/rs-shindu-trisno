<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RS Tkt. III Dr. Sindhu Trisno Palu - Rumah Sakit Terpercaya di Palu, Sulawesi Tengah. Spesialis Jantung, Anak, Kebidanan, Saraf, dan layanan kesehatan komprehensif 24 jam.">
    <meta name="keywords" content="Rumah Sakit Palu, RS Sindhu Trisno, Dokter Spesialis Palu, BPJS Palu, IGD 24 jam Palu">
    <meta property="og:title" content="RS Tkt. III Dr. Sindhu Trisno - Palu">
    <meta property="og:description" content="Kesehatan Anda, Prioritas Kami. Rumah Sakit Terpercaya di Palu, Sulawesi Tengah.">
    <meta property="og:type" content="website">
    <title>@yield('title', 'RS Tkt. III Dr. Sindhu Trisno - Palu')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="font-sans antialiased bg-[#ecfdf5]/30 relative" x-data>
    
    <!-- GLOBAL LORENG TENTARA BACKGROUND -->
    <div class="fixed inset-0 pointer-events-none -z-10 opacity-30">
        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="global-loreng" width="400" height="400" patternUnits="userSpaceOnUse" patternTransform="scale(1.5)">
                    <!-- Base Light Green -->
                    <rect width="400" height="400" fill="#f0fdf4" />
                    <!-- Green Blobs -->
                    <path d="M-10,50 C40,-20 80,70 120,40 C160,10 200,90 250,50 C300,10 350,110 410,60 L410,-10 L-10,-10 Z" fill="#a7f3d0" opacity="0.6"/>
                    <path d="M100,410 C70,350 150,300 120,250 C90,200 180,150 150,80 C120,10 250,-20 300,40 C350,100 280,180 320,250 C360,320 250,380 300,410 Z" fill="#6ee7b7" opacity="0.4"/>
                    <path d="M-10,250 C40,280 80,200 150,220 C220,240 280,190 320,220 C360,250 380,190 410,210 L410,410 L-10,410 Z" fill="#34d399" opacity="0.2"/>
                    <path d="M40,150 C80,130 90,190 120,180 C150,170 160,210 130,230 C100,250 80,210 40,210 C0,210 -20,170 40,150 Z" fill="#10b981" opacity="0.1"/>
                    <path d="M250,100 C300,80 310,140 280,170 C250,200 200,160 220,120 Z" fill="#10b981" opacity="0.1"/>
                    <!-- Small scatter blobs -->
                    <circle cx="200" cy="300" r="25" fill="#a7f3d0" opacity="0.5"/>
                    <circle cx="350" cy="150" r="30" fill="#34d399" opacity="0.3"/>
                    <circle cx="50" cy="350" r="40" fill="#6ee7b7" opacity="0.4"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#global-loreng)"></rect>
        </svg>
    </div>

    <!-- Soft Ambient Global Glows -->
    <div class="fixed top-0 right-0 w-[50vw] h-[50vw] bg-emerald-300/10 rounded-full blur-[120px] -translate-y-1/4 translate-x-1/4 -z-10 pointer-events-none"></div>
    <div class="fixed bottom-0 left-0 w-[40vw] h-[40vw] bg-emerald-200/20 rounded-full blur-[100px] translate-y-1/4 -translate-x-1/4 -z-10 pointer-events-none"></div>

    <div class="relative z-0">
        @yield('content')
    </div>

    {{-- AI Chat Widget - Ners Sindhu --}}
    @include('partials.ai_chat_widget')

</body>
</html>
