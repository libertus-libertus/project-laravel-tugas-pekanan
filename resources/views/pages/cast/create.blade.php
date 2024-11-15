@extends('pages.layouts.master')
@section('title')
Create Cast
@endsection

@section('content')
<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Cast</h3>
    </div>
    <form action="/cast" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus required>
            </div>
            <div class="form-group">
                <label for="age">Umur (Cukup angka saja)</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Ex: 20" required>
            </div>
            <div class="form-group">
                <label for="bio">Biodata</label>
                <textarea class="form-control" rows="3" id="bio" name="bio" placeholder="Enter your bio here" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                <a href="/cast" class="btn btn-secondary btn-sm">Kembali ke Home</a>
            </div>
        </div>
    </form>
</div>
@endsection
