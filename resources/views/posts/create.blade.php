@extends('welcome')
@section('body')
<h1>New Post</h1>

<form method="POST" action="{{action ('PostController@store')}}"enctype="multipart/form-data">
    @include('partials.postsForm',
   ['buttonName'  => 'Create',
      'title'        => old('title'),
      ])

</form>
@endsection
