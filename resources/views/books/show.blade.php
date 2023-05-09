@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('content')
    <div class="d-flex" style="width: 20rem;">
        <img src="https://th.bing.com/th/id/OIP.YtKPj4xjsLE-CnGhiCswoAHaE5?pid=ImgDet&rs=1" class="card-img-top rounded"
            alt="Buku">
        <div class="mx-5">
            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="fs-4">
                <span class="text-primary">Judul</span> : {{ $book->judul }}
            </h5>
            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="fs-4">
                <span class="text-primary">Tahun</span> : {{ $book->tahun_terbit }}
            </h5>
            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="fs-4">
                <span class="text-primary">Penulis</span> : {{ $book->penulis }}
            </h5>
        </div>
    </div>
    <a href="/books" class="mt-3 d-block">Back to books</a>
@endsection
