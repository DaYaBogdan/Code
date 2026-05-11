@extends('layouts.MainLayout')

@section('header-title')
    Гостевая книга
@endsection

@section('content')
    <div class="flex column">
        @if($errors->any())
            <div class="block-error">
                @foreach ($errors->all() as $err)
                    <li> {{ $err }} </li>
                @endforeach
            </div>
        @endif

        <form action="{{ route("guestbook.post") }}" method="post" class="flex column">
            @csrf
            <div class="flex">
                <div>
                    <p>Фамилия</p>
                    <input class='text' type="text" id="surname" name="surname" value="{{ old("surname") }}" />
                </div>
                <div>
                    <p>Имя</p>
                    <input class='text' type="text" id="name" name="name" value="{{ old("name") }}" />
                </div>
                <div>
                    <p>Отчество</p>
                    <input class='text' type="text" id="fathername" name="fathername" value="{{ old("fathername") }}" />
                </div>
            </div>
            <div class="flex">
                <div>
                    <p>Отзыв</p>
                    <textarea class='text' id="message" name="message" value="{{ old("message") }}"></textarea>
                </div>
            </div>
            <div>
                <button type="submit">Отправить</button>
            </div>
        </form>

        <div>
            <p>Отзывы о сайте</p>
            <hr>
            @foreach($entries as $entry)
                <div class="entry">
                    <div class=flex>
                        <p> Пользователь: </p>
                        <p>{{ $entry['surname'] }} {{ $entry['name'] }} {{ $entry['fathername'] }}</p>
                    </div>
                    <div class="flex">
                        <p> Прокомментировал: </p>
                        <p>{{ $entry['message'] }}</p>
                    </div>
                    <small>{{ $entry['created_at'] ?? '' }}</small>
                </div>
                <hr>
            @endforeach
            {{ $entries->links() }}
        </div>
    </div>
@endsection