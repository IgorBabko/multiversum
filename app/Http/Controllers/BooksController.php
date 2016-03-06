<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('published_at', 'desc')
            ->paginate(config('custom.posts_per_page'));

        return view('books.index')->withBooks($books);
    }

    public function showBook($slug)
    {
        $book = Book::whereSlug($slug)->firstOrFail();

        return view('books.show')->withBook($book);
    }
}
