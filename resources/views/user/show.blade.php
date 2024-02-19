@extends('template.layout')

@push('title')
    View Blog
@endpush

@section('content')
Title : {{$mypost->Title}}<br>
Sub Title : {{$mypost->Subtitle}}<br>
Body : {{$mypost->body_content}}
@endsection