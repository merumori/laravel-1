@extends('template.layout')

@push('title')
    Update Post
@endpush

@section('content')
    <h1>Update Post</h1>

    <form method="post" action="{{ route('update', $mypost->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" value='{{$mypost->Title}}' class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Subtitle</label>
            <input type="text" name="subtitle" value='{{$mypost->Subtitle}}' class="form-control" id="" placeholder="Enter Subtitle">
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlTextarea1">Body Content</label>
            <textarea name="body_content" value='{{$mypost->body_content}}' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
@endsection