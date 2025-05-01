@extends('master')

@section('content')
<h1>Details user</h1>
<table border="1px">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Criado em</th>
            <th>Editado em</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
        </tr>
    </tbody>
</table>

<a href="{{ Route('users.index') }}">Listar</a>
@endsection