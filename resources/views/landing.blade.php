@extends('layouts.app')

@section('title', 'RS Tkt. III Dr. Sindhu Trisno - Palu')

@section('content')

    @include('partials.header')

    <main>
        @include('partials.hero')
        @include('partials.trust_badges')
        @include('partials.fasilitas')
        @include('partials.mcu_promo')
        @include('partials.dokter')
        @include('partials.berita_teaser')
        @include('partials.faq')
        @include('partials.cta_registrasi')
    </main>

    @include('partials.popup_jadwal')
    @include('partials.footer')

@endsection