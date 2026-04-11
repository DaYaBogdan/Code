@extends('layouts.MainLayout')

@section('header-title')
    Тест
@endsection

@section('content')
    <div class="flex">
        <form action="{{ route('test.post') }}" method="post">
            @csrf
            <div class="column">
                <div class="flex">
                    <label for="fio">
                        <p>Полное имя</p>
                        <input class="test-field" type="text" name="fio" />
                    </label>

                    <label for="group">
                        <p>Группа</p>
                        <select class="test-field" name="group" id="group">
                            <option value="IT/b-24-3-o">IT/b-24-3-o</option>
                            <option value="IS/b-23-3-o">IS/b-23-3-o</option>
                            <option value="PI/b-23-1-o">PI/b-23-1-o</option>
                        </select>
                    </label>
                </div>


                <div>
                    <p>1. Какой тип данных чаще всего используется для хранения целых чисел в языках программирования?
                    </p>
                    <select class="test-field" name="question1" id="question1">
                        <option value="float">float</option>
                        <option value="int">int</option>
                        <option value="string">string</option>
                        <option value="char">char</option>
                    </select>
                </div>

                <div>
                    <p>2. Что такое переменная в контексте программирования и какова её роль в алгоритмах?</p>
                    <textarea placeholder="Переменная -" class="test-field" id="question2" name="question2"></textarea>
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
                    <button type="submit">Отправить </button>
                    <button type="reset">Отчистить</button>
                </div>
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