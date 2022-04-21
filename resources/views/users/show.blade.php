
<h1>User#{{$user->id}}</h1>
ID: {{$user->id}}
name: {{ $user->name}}<br>
Description: {{ $user->role}}<br><br><br>
    @foreach ($user->posts as $posta)

        ID: {{$posta->id}}
        date: {{ $posta->created_at}}<br>
    @endforeach



