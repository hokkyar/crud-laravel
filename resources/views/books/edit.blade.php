@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('content')
    <h1 class="fs-3 text-center mb-3 text-secondary">Edit Data Buku</h1>
    <form action="{{ route('books.update', $book->id) }}" class="w-50 mx-auto" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-floating mb-3">
            <input value="{{ $book->judul }}" required name="judul" type="text" class="form-control" id="judul"
                placeholder="name@example.com">
            <label for="judul">Judul</label>
        </div>
        <div class="form-floating mb-3">
            <input value="{{ $book->tahun_terbit }}" required name="tahun_terbit" type="text" class="form-control"
                id="tahun_terbit" placeholder="Password">
            <label for="tahun_terbit">Tahun Terbit</label>
        </div>
        <div class="form-floating mb-3">
            <input value="{{ $book->penulis }}" required name="penulis" type="text" class="form-control" id="penulis"
                placeholder="Password">
            <label for="penulis">Penulis</label>
        </div>
        <button type="submit" class="btn btn-success">Edit Data</button>
    </form>
    <a href="/books" class="mt-3 d-block">Back to books</a>
@endsection
