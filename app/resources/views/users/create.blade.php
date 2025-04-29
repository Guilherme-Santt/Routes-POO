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

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <ul>
        <li>
            <label for="name">Name: </label>
            <input name="name" type="text" id="name" placeholder="Nome Completo" value="{{ old('name') }}" </li>
        <li>
            <label for="email">Mail: </label>
            <input name="email" type="mail" id="email" placeholder="mail@mail.com" value="{{ old('mail') }}">
        </li>
        <li>
            <label for="password">Password: </label>
            <input name="password" id="password" type="password">
        </li>
        <li>
            <input value="Submit" type="submit">
        </li>
    </ul>
</form>
@endsection