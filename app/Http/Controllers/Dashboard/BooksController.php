<?php

namespace Multiversum\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Multiversum\Book;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\StoreBookRequest;
use Multiversum\Http\Requests\UpdateBookRequest;
use Session;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('published_at', 'desc')->get();
        return view('dashboard.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.books.create');
    }

    /**
     * Store a newly created book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreBookRequest $storeBookRequest)
    {
        $book = new Book($request->except('file'));

        $book->save();

        Session::flash('success', 'Книга добавлен успешно');

        return redirect('dashboard/books');
    }

    /**
     * Display the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified book.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('dashboard.books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book, UpdateBookRequest $updateBookRequest)
    {
        $book->update(
            $request->except('_token', '_method')
        );

        Session::flash('success', 'Книга изменена успешно');

        return redirect('dashboard/books');
    }

    /**
     * Remove the specified book from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);

        Session::flash('success', 'Книга успешно удалена');

        return back();
    }
}
