@extends('layouts.MainLayout')

@section('header-title')
    Главная страница
@endsection

@section('content')
    <h1 style="text-align: center">
        «Исследование архитектуры MVC приложения и возможностей
        обработки данных HTML-форм на стороне сервера с использованием
        языка PHP»
    </h1>
    <table>
        <tr>
            <td rowspan="3" colspan="2">
                <img src="../images/another/title_photo.jpg" />
            </td>

            <td colspan="3">
                <h1>Лабораторная работа #8</h1>
            </td>

            <td rowspan="3" colspan="2">
                <img src="../images/another/second_title.jpg" />
            </td>
        </tr>

        <tr colspan="2">
            <td>
                <h1>ФИО: Смирнов Богдан Викторович</h1>
            </td>
        </tr>

        <tr colspan="2">
            <td>
                <h1>Группа: ИС/б-23-1-о</h1>
            </td>
        </tr>
    </table>
@endsection