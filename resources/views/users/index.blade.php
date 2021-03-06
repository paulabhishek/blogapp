@extends('welcome')
@section('body')
<h1>All Users</h1>


@foreach ($users as $user)
            <div class="card-header border border-2 ">ID: {{ $user->id}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ url('users/')}}/{{$user->id }}/{{'edit'}}" class="btn btn btn-outline-secondary justify-content-md-end">Update</a>
                </div>
            </div>
            <div class="card-body text-dark border border-2 ">
                <h5 class="card-title">Name: {{ $user->name}}</h5>
                <p class="card-text">Email: {{$user->email}} </p>
                Role: {{$user->role}}<br>
                <a href="{{ url('/users/')}}/{{$user->id }}" class="btn btn-secondary mt-3 d-grid btn-md">Open</a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a  type="button" class="btn btn-outline-secondary">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"></path>
                    </svg>
                    <form method="post" action="{{ action('UserController@destroy', $user->id) }}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" value="Delete">
                    </form>
                </a>
                </div>
            </div><br>
@endforeach

@endsection

