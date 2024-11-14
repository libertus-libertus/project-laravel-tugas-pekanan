@extends('pages.layouts.master')

@section('title')
    Home Page
@endsection
@section('content')
    <div class="home-page-content">
        <h1>SaberBook</h1>
        <h2>Social Media Developer Santai Berkualitas</h2>
        <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>

        <h3>Cara Bergabung di SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di <a href="{{ route('register') }}">Form Sign Up</a></li>
            <li>Selesai!</li>
        </ol>
    </div>
@endsection
