@extends('pages.layouts.master')
@section('title')
Halaman Detail Users
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Detail data:</h5>
                    Berikut ini adalah data diri <strong>{{ $cast->name }}</strong>: <hr>

                    Nama: <strong>{{ $cast->name }}</strong> <br>
                    <span>Umur: {{ $cast->age }}</span> <br>
                    <p>Biodata: {{ $cast->bio }}</p>
                </div>

                <a href="/cast" class="btn btn-secondary btn-sm">Kembali ke Home</a>
            </div>
        </div>
    </div>
</section>
@endsection
