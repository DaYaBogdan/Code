@extends('layouts.MainLayout')

@section('header-title')
    Сообщения
@endsection

@section('content')

    <form action="mailto:bogsm228@gmail.com" method="post" enctype="text/plain" id="contactForm">
        <div class="flex column">
            <fieldset class="flex column" style="width: 30em">
                <legend>
                    <h2>Введите Контактные данные</h2>
                </legend>
                <div class="flex">
                    <p>ФИО</p>
                    <input class="text" type="text" id="FIO" name="FIO" value="" placeholder="Smirnov B.V." />
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
                    <input class="text" type="text" id="email" name="email" value="" placeholder="foo@gmail.com" />
                </div>

                <div class="flex">
                    <p>Телефон</p>
                    <input class="text" type="text" id="phone" name="phone" value="" placeholder="+7/+3..." />
                </div>

                <div class="flex">
                    <p>Комментарий</p>
                    <input class="text" type="text" id="message" name="message" value="" placeholder="Ваш комментарий" />
                </div>
            </fieldset>
        </div>
        <div class="flex">
            <button type="button" onclick="prepareForm()">Отправить</button>
            <button type="reset" name="reset">Сбросить</button>
        </div>
    </form>
@endsection