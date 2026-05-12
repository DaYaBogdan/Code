@extends('layouts.MainLayout')

@section('header-title')
    Редактор Блога
@endsection

@section('content')
    <div>
        <h2> Добавление записи в блог </h2>
        <form class="column" action="{{ route('blogRedactor.post') }}" method="post">
            @csrf
            <div>
                <p for="title">Заголовок</p>
                <input class="text" type="text" name="title" id="title" required>
            </div>
            <div>
                <p for="image">Изображение</p>
                <input class="text" type="file" name="image" id="image" accept="image/*" required />
            </div>
            <div>
                <p for="image">Текст сообщения</p>
                <textarea class="text" name="message" id="message" required></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
@endsection