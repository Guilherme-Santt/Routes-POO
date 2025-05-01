<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Users</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ Route('users.show', ['user' => $user->id]) }}">Visualizar</a>
                    <a href="{{ Route('users.edit', ['user' => $user->id]) }}">Editar</a>
                    <a href="">Visualizar</a>
                </td>
                @if(!$users)
                <td>Nenhum usuário encontrado!</td>
                @endif
            </tr>
            @endforeach
        </tbody>
        <a href=" {{ Route('users.create') }}">Cadastrar</a>

    </table>
</body>

</html>