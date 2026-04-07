<?php

//Student name: Amanda Msutu
//Student number: 2224286000
//Web Frameworks: Challenge 1 - Bookstore App

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813],
            ['id' => 2, 'title' => 'Moby-Dick ', 'author' => 'Herman Melville', 'year' => 1851],
            ['id' => 3, 'title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'year' => 1951],
            ['id' => 4, 'title' => 'Brave New World', 'author' => 'Aldous Huxley', 'year' => 1932],
            ['id' => 5, 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkein', 'year' => 1937]                                                                                            ];

        return view('books', compact('books'));
    }

    public function show($id)
    {
        $books = [
            1 => ['id' => 1, 'title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'year' => 1813, 'description' => 'A classic American novel set in the Jazz Age.'],
            2 => ['id' => 2, 'title' => 'Moby-Dick ', 'author' => 'Herman Melville', 'year' => 1851, 'description' => 'A classic American novel set in the Jazz Age.'],
            3 => ['id' => 3, 'title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'year' => 1951, 'description' => 'A gripping tale of racial injustice and childhood innocence.'],
            4 => ['id' => 4, 'title' => 'Brave New World', 'author' => 'Aldous Huxley', 'year' => 1932, 'description' => 'A dystopian novel about totalitarianism and surveillance.'],
            5 => ['id' => 5, 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkein', 'year' => 1937, 'description' => 'A fantasy novel about a hobbit\'s journey.'],
        ];

        if (!isset($books[$id])) {
            abort(404);
        }

        $book = $books[$id];
        return view('book-details', compact('book'));
    }
}
