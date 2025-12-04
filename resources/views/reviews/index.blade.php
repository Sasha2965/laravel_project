@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="{{ route('reviews.create') }}" class="btn btn-primary">создать новый</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>Пользователь</td>
            <td>Услуга</td>
            <td>Рейтинг</td>
            <td>Комментарий пользователя</td>
            <td>Действия</td>
        </tr>
        </thead>
        <tbody>
        @forelse($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->user->userFullName() }}</td>
                <td>{{ $review->service->title }}</td>
                <td>{{ $review->rating }} б.</td>
                <td>{{ $review->comment }}</td>
                <td class="actions">
                    <a href="{{route('reviews.show', $review)}}" class="btn btn-info">показать</a>
                    <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning">изменить</a>
                    <form action="{{ route('reviews.destroy', $review) }}" method="POST">
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
