@extends('welcome')
@section('body')
<h1>All Posts</h1>
@foreach ($posts as $post)
{{--    id: {{ $post->id}}<br>--}}
{{--    Title: {{ $post->title}}<br>--}}
{{--    Body: {{$post->author->name}}--}}
{{--    <a href="{{ url('/posts/')}}/{{$post->id }}">See more</a><br>--}}



{{--<div class="card">--}}
{{--    <h5 class="card-header">{{ $post->title}}</h5>--}}
{{--    <div class="card-body">--}}
{{--        <h5 class="card-title">{{ $post->title}}</h5>--}}
{{--        <p class="card-text">{{$post->author->name}}</p>--}}
{{--        <a href="{{ url('/posts/')}}/{{$post->id }}" class="btn btn-primary">Read more</a>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="card text-center">
    <div class="card-header">
        Category
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$post->title}} by author {{$post->author->name}}</h5>
        <p class="card-text">{{$post->body}}</p>
        <a href="{{ url('/posts/')}}/{{$post->id }}" class="btn btn-primary">Open</a>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>
@endforeach
@endsection

