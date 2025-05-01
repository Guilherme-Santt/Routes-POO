@extends('master')

@section('content')
<h1>User create</h1>

@if(@session('sucess'))
<p style="color:green">{{ session('sucess') }}</p>
@endif

@if($errors->any())
@foreach($errors->all() as $erro)
<p style="color:red"> {{ $erro }} </p>

@endforeach

@endif
<h1>Editar</h1>
<form action="{{ route('user.update', ['user' => $user->id ]) }}" method="POST">
    @csrf
    @method('PUT')
    <ul>
        <li>
            <label for="name">Name: </label>
            <input name="name" type="text" id="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}">
        </li>
        <li>
            <label for="email">Email: </label>
            <input name="email" type="mail" id="email" placeholder="mail@mail.com"
                value="{{ old('mail', $user->email) }}">
        </li>
        <li>
            <input value="Submit" type="submit">
        </li>
    </ul>
</form>
<a href="{{ Route('users.index') }}">Listar</a>
@endsection