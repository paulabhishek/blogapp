h1>New Post Form</h1>

<form method="POST" action="{{action ('PostController@store')}}">
    @include('partials.postsForm',
   ['buttonName'  => 'Create',
      'title'        => old('title'),
      'body' => old('body')])

</form>
