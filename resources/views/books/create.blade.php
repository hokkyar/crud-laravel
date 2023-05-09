@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('content')
    <h1 class="fs-3 text-center mb-3 text-secondary">Tambah Data Buku</h1>
    <form action="{{ route('books.store') }}" class="w-50 mx-auto" method="POST">
        @csrf
        @method('POST')
        <div class="form-floating mb-3">
            <input required name="judul" type="text" class="form-control" id="judul" placeholder="name@example.com">
            <label for="judul">Judul</label>
        </div>
        <div class="form-floating mb-3">
            <input required name="tahun_terbit" type="text" class="form-control" id="tahun_terbit"
                placeholder="Password">
            <label for="tahun_terbit">Tahun Terbit</label>
        </div>
        <div class="form-floating mb-3">
            <input required name="penulis" type="text" class="form-control" id="penulis" placeholder="Password">
            <label for="penulis">Penulis</label>
        </div>
        <button type="submit" class="btn btn-success">Tambah Data</button>
    </form>
    <a href="/" class="mt-3 d-block">Back to Home</a>
@endsection
