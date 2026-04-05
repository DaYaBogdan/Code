@extends('layouts.MainLayout')

@section('header-title')
    Интересы
@endsection

@section('content')
    <ul>
        @foreach ($interests as $type => $textArray)
            <ol>
                <h3>{{ $type }}</h3>
                @foreach ($textArray as $paragraph)
                    <li>
                        <p>{{ $paragraph }}</p>
                    </li>
                @endforeach
            </ol>
        @endforeach
    </ul>
@endsection