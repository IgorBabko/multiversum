<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('published_at', 'desc')
            ->paginate(config('custom.posts_per_page'));

        return view('books.index')->withBooks($books);
    }

    public function showBook(Request $request, $slug)
    {
        $book = Book::whereSlug($slug)->firstOrFail();

        return view('books.show', compact('request', 'book'));
    }

    public function search($searchString)
    {
        $books = Book::search($searchString, false)->paginate(10);

        return view('books.index', compact('books', 'searchString'));
    }
}
