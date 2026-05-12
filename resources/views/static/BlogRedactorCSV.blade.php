@extends('layouts.MainLayout')

@section('header-title')
    Редактор Блога
@endsection

@section('content')
    <div class="container">
        <h2>Импорт записей из CSV</h2>
        <form class="column" action="{{ route('blogRedactorCSV.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <p for="csv_file">Выберите CSV файл</p>
                <input class="text" type="file" name="csv_file" id="csv_file" accept=".csv, .txt" required>
                <p>Формат: строка =
                    "Заголовок;путь/к/изображению.jpg;Текст сообщения"
                </p>
            </div>
            <button type="submit" class="btn btn-primary">Импортировать</button>
        </form>
    </div>
@endsection