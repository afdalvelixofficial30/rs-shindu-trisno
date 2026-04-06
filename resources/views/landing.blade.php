@extends('layouts.app')

@section('title', 'RS Tkt. III Dr. Sindhu Trisno - Palu')

@section('content')

    @include('partials.header')
    
    <main>
        @include('partials.hero')
        @include('partials.tentang')
        @include('partials.statistik_visi')
        @include('partials.nilai_inti')
        @include('partials.fasilitas')
        @include('partials.dokter')
        @include('partials.testimoni')
        @include('partials.faq')
    </main>

    @include('partials.footer')

@endsection
