@extends('welcome')
@section('body')
<h1>Post#{{$post->id}}</h1>
@isset($article->file)
    <img src="{{ asset('storage/' . $post->file) }}"
         width="100px" height="100px"><br>
@endisset
ID: {{$post->id}}
name: {{ $post->title}}<br>
Description: {{ $post->body}}<br><br><br>
@if(Auth::guest())
    <p>Login to Comment</p>
@else
<h1>New Comment</h1>

<form method="POST" action="{{ action('CommentController@store') }}">
    {{ csrf_field() }}

    <input  hidden name="post_id"   value="{{$post->id}}"><br>

    <label for="comment">Body:</label>
    <textarea required="required" placeholder="Enter comment here" name = "comment" ></textarea>



    <input type="submit" value="Post"><br>
</form>
@endif
<h2>Comments</h2>

@foreach($post->comments as $commenta )
Name: {{($commenta->user->name)}}<br>
Comment: {{$commenta->comment}}<br><br>
@endforeach

@endsection
@endsection
