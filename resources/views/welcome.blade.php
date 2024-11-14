@extends('pages.layouts.master')
@section('content')
@section('title')
Welcome Home
@endsection
    <h1>Selamat Datang {{ $first_name }} {{ $last_name }}!</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
    <a href="{{ url('/') }}">Kembali ke Home</a>
@endsection
