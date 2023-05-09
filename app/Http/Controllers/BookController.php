<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $books = Book::all();
    return view('books.index', compact('books'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('books.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    $book = new Book([
      'judul' => $request->judul,
      'tahun_terbit' => $request->tahun_terbit,
      'penulis' => $request->penulis
    ]);

    $book->save();

    return redirect('/books')->with('success', 'Data buku berhasil ditambahkan.');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $book = Book::find($id);
    return view('books.show', compact('book'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $book = Book::find($id);
    return view('books.edit', compact('book'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $book = Book::find($id);
    $book->judul = $request->judul;
    $book->tahun_terbit = $request->tahun_terbit;
    $book->penulis = $request->penulis;
    $book->save();
    return redirect('/books')->with('success', 'Data buku berhasil update.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $book = Book::find($id);
    $book->delete();

    return redirect('/books')->with('success', 'Data buku berhasil dihapus.');
  }
}
