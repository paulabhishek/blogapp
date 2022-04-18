
@extends('welcome')
@section('body')
<h1>All Users</h1>
@foreach ($users as $user)
    id: {{ $user->id}}<br>
    Title: {{ $user->name}}<br>
    Body: {{$user->email}}
    role: {{$user->role}}
@endforeach
@endsection

