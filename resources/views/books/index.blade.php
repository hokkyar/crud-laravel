@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex gap-3 flex-wrap justify-content-center">
        @if (count($books) <= 0)
            <p class="text-muted fw-bold">BELUM ADA DATA BUKU</p>
        @else
            @foreach ($books as $book)
                <div class="card" style="width: 17rem;">
                    <img src="https://th.bing.com/th/id/OIP.YtKPj4xjsLE-CnGhiCswoAHaE5?pid=ImgDet&rs=1" class="card-img-top"
                        alt="Buku">
                    <div class="card-body">
                        <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="text-center mb-3">
                            {{ $book->judul }}</h5>
                        <div class="text-center">
                            <a style="text-decoration: none;" href="{{ route('books.show', $book->id) }}"
                                class="btn btn-primary">Show</a>
                            <a style="text-decoration: none;" href="{{ route('books.edit', $book->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form class="d-inline" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <a href="/">Back to Home</a>
@endsection
