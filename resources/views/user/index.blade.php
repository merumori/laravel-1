@extends('template.layout')

@push('title')
    Home
@endpush

@section('content')
    <h1>Home Page</h1>
    <table class='table table-striped table-bordered table-hover table-sm'>
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Body Content</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
    @foreach($myposts as $mypost)
        <tr>
            <td>{{$mypost->id}}</td>
            <td>{{$mypost->Title}}</td>
            <td>{{$mypost->Subtitle}}</td>
            <td>{{$mypost->body_content}}</td>
            <td>
                <form action="{{ route('edit', $mypost->id) }}" method="post">
                    @csrf
                    <input type="submit" value="{{ $mypost->id }} - Edit" class="btn btn-danger">
                </form>
            </td>
            <td>
                <form action="{{ route('destroy', $mypost->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="{{ $mypost->id }} - Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection