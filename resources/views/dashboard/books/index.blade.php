@extends ('dashboard.layout')
@section('content')
<h1>Книги</h1>
@include('dashboard.partials.session')
<hr>
<a href="/dashboard/books/create" class="btn btn-primary">добавить</a>
<table id="books-table">
    <thead>
        <tr>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->published_at }}</td>
            <td>{{ $book->price }}</td>
            <td class="controls-block">
                <a class="btn btn-info" href="/dashboard/books/{{ $book->id }}/edit">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
                <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#deleteModal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('dashboard.partials.deleteModal')
@stop
