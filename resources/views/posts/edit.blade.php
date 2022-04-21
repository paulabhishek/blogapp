@extends('welcome')
@section('body')
    <h1>Edit Post</h1>

    <form method="POST" action="
        {{ action('PostController@update',$post->id ) }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <label for="title">Title</label>
        <input type="text" name="title"><br>
        <label for="description">Body:</label>
        <textarea required="required" placeholder="Enter Your post here" name = "body" ></textarea><br>
        <input type="submit" value="Update"><br>
    </form>
@endsection
