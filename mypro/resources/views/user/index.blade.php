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
        </thead>
    @foreach($myposts as $mypost)
        <tr>
            <td>{{$mypost->id}}</td>
            <td>{{$mypost->Title}}</td>
            <td>{{$mypost->Subtitle}}</td>
            <td>{{$mypost->body_content}}</td>
        </tr>
    @endforeach
    </table>
@endsection