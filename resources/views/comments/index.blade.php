<h1>All Posts</h1>
@foreach ($comments as $comment)
    Name: {{($comment->user->name)}}<br>
    Comment: {{$comment->comment}}<br><br>
@endforeach
