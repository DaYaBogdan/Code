@extends('layouts.MainLayout')

@section('header-title')
    Тест
@endsection

@section('content')
    <form action="mailto:bogsm228@gmail.com" method="post" enctype="text/plain" id="testForm">

        <div class="flex" style="flex-direction: column">
            <div class="flex">
                <label for="FIO">
                    <p>Полное имя</p>
                    <input class="text" type="text" name="FIO" />
                </label>

                <label for="group">
                    <p>Группа</p>
                    <select name="group" id="group">
                        <option value="IT/b-24-3-o">IT/b-24-3-o</option>
                        <option value="IS/b-23-3-o">IS/b-23-3-o</option>
                        <option value="PI/b-23-1-o">PI/b-23-1-o</option>
                    </select>
                </label>
            </div>

            <fieldset class="flex" style="flex-direction: column">
                <legend>
                    <h1>Основы программирования и алгоритмические языки</h1>
                </legend>

                <div>
                    <p>1. Какой тип данных чаще всего используется для хранения целых чисел в языках программирования?
                    </p>
                    <select name="question1" id="question1" style="resize: none; width: 200px; height: 45px">
                        <option value="float">float</option>
                        <option value="int">int</option>
                        <option value="string">string</option>
                        <option value="char">char</option>
                    </select>
                </div>

                <div>
                    <p>2. Что такое переменная в контексте программирования и какова её роль в алгоритмах?</p>
                    <textarea placeholder="Переменная -" style="resize: none; width: 600px; height: 75px" id="secondAnswer"
                        required></textarea>
                </div>

                <div>
                    <p>3. Какой элемент является обязательным в структуре алгоритма?</p>

                    <div class="flex">
                        <p> Цикл
                            <input type="radio" name="question3" id="question3_1" value="Цикл" />
                        </p>

                        <p> Графический интерфейс
                            <input type="radio" name="question3" id="question3_2" value="Графический интерфейс" />
                        </p>

                        <p> Начало и конец
                            <input type="radio" name="question3" id="question3_3" value="Начало и конец" />
                        </p>
                    </div>
                </div>

                <div class="flex">
                    <button type="submit">Отправить</button>
                    <button type="reset" name="reset">Отчистить форму</button>
                </div>
            </fieldset>
        </div>
    </form>
@endsection