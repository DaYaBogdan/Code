@extends('layouts.MainLayout')

@section('header-title')
    Тест
@endsection

@section('content')
    <form action="mailto:bogsm228@gmail.com" method="post" enctype="text/plain" id="testForm">

        <div style="display: flex; flex-direction: row; gap: 3em">
            <label for="FIO">
                <h2>Полное имя</h2>
                <input class="text" type="text" name="FIO" />
            </label>

            <label for="group">
                <h2>Группа</h2>
                <select name="group" id="group">
                    <option value="IT/b-24-3-o">IT/b-24-3-o</option>
                    <option value="IS/b-23-3-o">IS/b-23-3-o</option>
                    <option value="PI/b-23-1-o">PI/b-23-1-o</option>
                </select>
            </label>
        </div>

        <fieldset style="display: flex; flex-direction: column; gap: 2em;">
            <legend>
                <h1>Основы программирования и алгоритмические языки</h1>
            </legend>

            <h3>1. Какой тип данных чаще всего используется для хранения целых чисел в языках программирования? </h3>
            <select name="question1" id="question1" style="resize: none; width: 200px; height: 45px">
                <option value="float">float</option>
                <option value="int">int</option>
                <option value="string">string</option>
                <option value="char">char</option>
            </select>


            <h3>2. Что такое переменная в контексте программирования и какова её роль в алгоритмах?</h3>
            <textarea placeholder="Переменная -" style="resize: none; width: 600px; height: 100px" id="secondAnswer"
                required></textarea>

            <h3>3. Какой элемент является обязательным в структуре алгоритма?</h3>

            <h3 style="display: flex"> Цикл
                <input type="radio" name="question3" id="question3_1" value="Цикл" />
            </h3>

            <h3 style="display: flex">
                Графический интерфейс
                <input type="radio" name="question3" id="question3_2" value="Графический интерфейс" />
            </h3>


            <h3 style="display: flex">
                Начало и конец
                <input type="radio" name="question3" id="question3_3" value="Начало и конец" />
            </h3>

            <div style="display: flex; flex-direction: row; gap: 2em">
                <button type="submit">Отправить</button>
                <button type="reset" name="reset">Отчистить форму</button>
            </div>
        </fieldset>
    </form>
@endsection