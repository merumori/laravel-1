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
            <th>View</th>
        </thead>
    @foreach($myposts as $mypost)
        <tr>
            <td>{{$mypost->id}}</td>
            <td>{{$mypost->Title}}</td>
            <td>{{$mypost->Subtitle}}</td>
            <td>{{$mypost->body_content}}</td>
            <td><a href="{{ route('show', $mypost->id) }}" class="btn btn-info">View</a></td>
            <td>
                <!-- <a href="{{ route('edit', $mypost->id) }}" class="btn btn-danger">{{ $mypost->id }} - Edit</a> -->
                <form action="{{ route('edit', $mypost->id) }}" method="post">
                    @csrf
                    <input type="submit" value="{{ $mypost->id }} - Edit" class="btn btn-warning">
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