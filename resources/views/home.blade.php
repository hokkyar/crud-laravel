@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .card a {
            transition: .3s
        }

        .card a:hover {
            opacity: .8;
        }
    </style>

    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Pilih menu dibawah untuk mengelola koleksi buku anda dengan mudah.</p>
    <div class="d-flex gap-3">
        <div class="card" style="width: 18rem;">
            <a class="bg-primary text-white" href="/books" style="text-decoration: none; color: inherit">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <i class="bi bi-book-half"></i>
                        Lihat Buku
                    </h5>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem;">
            <a class="bg-success text-white" href="{{ route('books.create') }}"
                style="text-decoration: none; color: inherit">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <i class="bi bi-plus-square"></i>
                        Tambah Buku
                    </h5>
                </div>
            </a>
        </div>
    </div>
@endsection
