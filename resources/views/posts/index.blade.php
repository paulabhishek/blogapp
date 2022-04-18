@extends('welcome')
@section('body')
<h1>All Posts</h1>
@foreach ($posts as $post)
    id: {{ $post->id}}<br>
    Title: {{ $post->title}}<br>
    Body: {{$post->author->name}}
    <a href="{{ url('/posts/')}}/{{$post->id }}">See more</a>
@endforeach
@endsection
