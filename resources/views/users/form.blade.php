@php
    $user = $user ?? null;
@endphp

<div>
    <div>
        <label>Выберите роль: </label>
        <select name="role" id="role" required>
            @foreach($roles as $key => $value)
                <option value="{{ $key }}" @selected(old('role->value', $user?->role->value) == $key)>{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="surname">Фамилия</label>
        <input value="{{ old('surname', $user?->surname) }}" type="text" id="surname" name="surname" required>
    </div>
    <div>
        <label for="name">Имя</label>
        <input value="{{ old('name', $user?->name) }}" type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="patronymic">Отчество</label>
        <input value="{{ old('patronymic', $user?->patronymic) }}" type="text" id="patronymic" name="patronymic" required>
    </div>
    <div>
        <label for="email">Эл.почта</label>
        <input value="{{ old('email', $user?->email) }}" type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Пароль</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div>
        <button type="submit">Сохранить данные</button>
    </div>
</div>
