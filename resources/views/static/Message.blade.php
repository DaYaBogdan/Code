@extends('layouts.MainLayout')

@section('header-title')
    Сообщения
@endsection

@section('content')
    <div class="flex" style="justify-content: center">
        <form action="{{ route("message.post") }}" method="post" style="justify-self: center">
            @csrf
            <div class="column">
                <fieldset class="column" style="width: auto; padding: 3em;">
                    <legend>
                        <h2>Введите Контактные данные</h2>
                    </legend>
                    <div class="flex">
                        <p>ФИО</p>
                        <input class="text" type="text" id="fio" name="fio" value="{{ old("fio") }}"
                            placeholder="Smirnov B.V." />
                    </div>

                    <div class="flex">
                        <p>Пол</p>
                        <p> Мужчина
                            <input type="radio" id="male" name="sex" value="male" />
                        </p>
                        <p> Женщина
                            <input type="radio" id="female" name="sex" value="female" />
                        </p>

                    </div>

                    <div class="flex">
                        <p>Возраст</p>
                        <select name="age" id="age">
                            <option value="18+">&gt; 18</option>
                            <option value="22+">&gt; 22</option>
                            <option value="26+">&gt; 26</option>
                            <option value="30+">&gt; 30</option>
                        </select>
                    </div>

                    <div class="flex">
                        <p>email</p>
                        <input class="text" type="email" id="email" name="email" value="{{ old("email") }}"
                            placeholder="foo@gmail.com" />
                    </div>

                    <div class="flex">
                        <p>Телефон</p>
                        <input class="text" type="text" id="phone" name="phone" value="{{ old("phone") }}"
                            placeholder="+7/+3..." />
                    </div>

                    <div class="flex">
                        <p>Комментарий</p>
                        <input class="text" type="text" id="message" name="message" value="{{ old("message") }}"
                            placeholder="Ваш комментарий" />
                    </div>
                </fieldset>
            </div>
            <div class="flex" style="justify-self: center">
                <button type="submit">Отправить</button>
                <button type="reset" name="reset">Сбросить</button>
            </div>
        </form>

        @if($errors->any())
            <div class="block-error">
                @foreach ($errors->all() as $err)
                    <li> {{ $err }} </li>
                @endforeach
            </div>
        @endif
    </div>
@endsection