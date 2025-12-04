@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Отзыв #{{ $review->id }}</title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="{{ route('users.index') }}" class="btn btn-primary">назад</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>Фамилия:</th>
            <th>Имя:</th>
            <th>Отчество:</th>
            <th>Роль:</th>
            <th>Эл.почта:</th>
            <th>Аккаунт создан:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->patronymic }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
