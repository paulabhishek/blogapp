@extends('welcome')
@section('body')
<h1>All Posts</h1>
@foreach ($posts as $post)

<div class="card">
    <div class="card-header mb-0 h2">
        {{$post->title}}
    </div>
    @isset($post->file)
        <img class="card-img-top" src="{{ asset('storage/' . $post->file) }}"  height="50px" alt="Card image cap">
    @endisset
    <div class="card-body">
        <h5 class="card-title mb-0 h5">Author: {{$post->author->name}}</h5>
        <a href="{{ url('/posts/')}}/{{$post->id }}" class="btn btn-secondary mt-3 d-grid btn-md">Open</a>
    </div>
    <div class="card-footer text-muted">
        Created: {{\App\Http\Controllers\PostController::time_elapsed_string($post->created_at, false)}}
{{--        time_elapsed_string('2013-05-01 00:22:35', true);--}}

    </div>
</div><br>

@endforeach
{{ $posts->links() }}
@endsection

