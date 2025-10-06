{{-- Memberitahu Laravel untuk menggunakan master layout --}}
@extends('layouts.app')

{{-- Menentukan judul khusus untuk halaman ini --}}
@section('title', 'Selamat Datang di Fattiya Homestay')

{{-- Ini adalah bagian konten yang akan dimasukkan ke @yield('content') --}}
@section('content')

    <div class="hero">
        <div class="hero-content">
            <h1>Comfortable Stays for a Memorable Holiday</h1>
            <p>We provide what you need to enjoy your holiday with family. Time to make another memorable moment.</p>
            <a href="#" class="hero-cta-btn">Show More</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/placeholder.jpg') }}" alt="Suasana kamar homestay yang nyaman">
            {{-- Ganti placeholder.jpg dengan nama file gambar Anda di public/images --}}
        </div>
    </div>
    <section class="homestay-choice">
        <h2 class="section-title">Our Choice of Homestays</h2>
        <div class="homestay-list">
            <div class="homestay-card">
                <img src="{{ asset('images/placeholder1.jpg') }}" alt="Nama Homestay 1" class="card-img">
                <div class="card-price">$72 per night</div>
                <div class="card-body">
                    <h3 class="card-title">Beach House</h3>
                    <p class="card-location">Bandar Lampung, Indonesia</p>
                    <a href="{{ url('/homestay/1') }}" class="card-btn">Show Homestay</a>
                </div>
            </div>
            {{-- Ulangi untuk kartu lainnya --}}
            <div class="homestay-card">
                <img src="{{ asset('images/placeholder2.jpg') }}" alt="Nama Homestay 2" class="card-img">
                <div class="card-price">$85 per night</div>
                <div class="card-body">
                    <h3 class="card-title">Mountain Retreat</h3>
                    <p class="card-location">Bandar Lampung, Indonesia</p>
                    <a href="{{ url('/homestay/2') }}" class="card-btn">Show Homestay</a>
                </div>
        </div>
    </section>

@endsection