@extends ('dashboard.layout')
@section('content')
<h1>Вебинары</h1>
@include('dashboard.partials.session')
<hr>
<a href="/dashboard/webinars/create" class="btn btn-primary">добавить</a>
<table id="table">
    <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Дата публикации</th>
        </tr>
    </thead>
    <tbody>
        @foreach($webinars as $webinar)
        <tr>
            <td>{{ $webinar->id }}</td>
            <td>{{ $webinar->name }}</td>
            <td>{{ $webinar->published_at }}</td>
            <td class="controls-block">
                <a class="btn btn-info" href="/dashboard/webinars/{{ $webinar->id }}/edit">
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
