@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователи</title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="{{ route('users.create') }}" class="btn btn-primary">создать нового</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Отчество</th>
                <th>Роль</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
               <tr>
                   <td>{{ $user->id }}</td>
                   <td>{{ $user->name }}</td>
                   <td>{{ $user->surname }}</td>
                   <td>{{ $user->patronymic }}</td>
                   <td>{{ $user->role->label() }}</td>
                   <td class="actions">
                        <a href="{{route('users.show', $user)}}" class="btn btn-info">показать</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">изменить</a>
                       <form action="{{ route('users.destroy', $user) }}" method="POST">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-danger" type="submit">удалить</button>
                       </form>
                   </td>
               </tr>
            @empty
                <tr>
                    <td colspan="7" class="no-data">нет данных</td>
                </tr>
            @endforelse
            </tbody>
    </table>
</div>
</body>
</html>
