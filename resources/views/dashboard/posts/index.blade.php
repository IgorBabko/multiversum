@extends ('dashboard.layout')
@section('content')
<h1>Статьи</h1>
@include('dashboard.partials.session')
<hr>
<a href="/dashboard/posts/create" class="btn btn-primary">добавить</a>
<table id="posts-table">
    <thead>
        <tr>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $disk)
        <tr>
            <td>{{ $disk->id }}</td>
            <td>{{ $disk->name }}</td>
            <td>{{ $disk->published_at }}</td>
            <td class="controls-block">
                <a class="btn btn-info" href="/dashboard/posts/{{ $disk->id }}/edit">
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
