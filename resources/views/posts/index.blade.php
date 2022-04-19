@extends('welcome')
@section('body')
<h1>All Posts</h1>
@foreach ($posts as $post)

<div class="card">
    <div class="card-header mb-0 h3">
        {{$post->title}}
    </div>
    <div class="card-body">
        <h5 class="card-title mb-0 h6">Author: {{$post->author->name}}</h5>
        <p class="card-text mb-0 h5 mt-3">{{$post->body}}</p>
        <a href="{{ url('/posts/')}}/{{$post->id }}" class="btn btn-secondary mt-3 d-grid btn-sm">Open</a>
    </div>
    <div class="card-footer text-muted">
        Created: {{\App\Http\Controllers\PostController::time_elapsed_string($post->created_at)}}
{{--        time_elapsed_string('2013-05-01 00:22:35', true);--}}

    </div>
</div><br>

@endforeach
{{ $posts->links() }}
@endsection

