@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Обновление данных пользователя {{ $user->id }}</title>
</head>
<body>
<div>
    <a href="{{ route('users.index') }}">назад</a>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('users.form')
    </form>
</div>
</body>
</html>
