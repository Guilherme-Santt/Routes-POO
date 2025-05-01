@extends('master')

@section('content')
<h2>Home</h2>
<h1>Bem-vindos!</h1>
<a href="{{ Route('users.index') }}">Usuários</a>
@endsection