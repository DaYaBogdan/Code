@extends('layouts.MainLayout')

@section('header-title')
    Сообщения
@endsection

@section('content')
    <fieldset>
        <legend>
            <h1>Введите Контактные данные:</h1>
        </legend>

        <table>
            <tr>
                <td>
                    <label>
                        <h2>Введите ФИО:</h2>
                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <h2>Выберите пол:</h2>
                    </label>
                </td>
                <td>
                    <label>
                        <h2>Выберите Возраст:</h2>
                    </label>
                </td>
                <td>
                    <label>
                        <h2>Ваш email:</h2>
                    </label>
                </td>
                <td>
                    <label>
                        <h2>Ваш комментарий:</h2>
                    </label>
                </td>
                <td colspan="2">
                    <label>
                        <h2>Ваш телефон:</h2>
                    </label>
                </td>
            </tr>

            <tr>
                <div>
                    <form action="mailto:bogsm228@gmail.com" method="post" enctype="text/plain" id="contactForm">
            <tr>
                <td>
                    <input class="text" type="text" id="FIO" name="FIO" value="" placeholder="Smirnov B.V." />
                </td>
                <td>
                    <h2 style="display: flex">
                        Male
                        <input type="radio" id="male" name="sex" value="male" />
                    </h2>
                </td>
                <td>
                    <h2 style="display: flex">
                        Female
                        <input type="radio" id="female" name="sex" value="female" />
                    </h2>
                </td>
                <td>
                    <select name="age" id="age" style="width: 200px">
                        <option value="18+">&gt; 18</option>
                        <option value="22+">&gt; 22</option>
                        <option value="26+">&gt; 26</option>
                        <option value="30+">&gt; 30</option>
                    </select>
                </td>
                <td>
                    <input class="text" type="text" id="email" name="email" value="" placeholder="foo@gmail.com" />
                </td>
                <td>
                    <input class="text" type="text" id="message" name="message" value="" placeholder="Ваш комментарий" />
                </td>
                <td colspan="2">
                    <input class="text" type="text" id="phone" name="phone" value="" placeholder="+7/+3..." />
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <label>
                        <h2>Ваша Дата Рождения:</h2>
                    </label>
                </td>
            </tr>

            <tr>
                <td colspan>
                    <textarea type="text" id="birthday" value="" style="width: 200px; text-align: center" readonly
                        required></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="calendar" id="calendar"></div>
                </td>
            </tr>

            <tr></tr>
            <tr></tr>

            <tr>
                <td>
                    <button type="button" onclick="prepareForm()">Отправить</button>
                </td>
                <td>
                    <button type="reset" name="reset">Сбросить</button>
                </td>
            </tr>
            </form>
            </div>
            </tr>
        </table>
    </fieldset>
@endsection