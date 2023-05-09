<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $books = [
      [
        'judul' => "Harry Potter and the Philosopher's Stone",
        'tahun_terbit' => 1997,
        'penulis' => 'J.K. Rowling'
      ],
      [
        'judul' => 'To Kill a Mockingbird',
        'tahun_terbit' => 1960,
        'penulis' => 'Harper Lee'
      ],
      [
        'judul' => 'The Great Gatsby',
        'tahun_terbit' => 1925,
        'penulis' => 'F. Scott Fitzgerald'
      ],
      [
        'judul' => 'Pride and Prejudice',
        'tahun_terbit' => 1813,
        'penulis' => 'Jane Austen'
      ],
      [
        'judul' => 'The Catcher in the Rye',
        'tahun_terbit' => 1951,
        'penulis' => 'J.D. Salinger'
      ]
    ];

    // Insert data ke dalam tabel "books"
    DB::table('books')->insert($books);
  }
}
