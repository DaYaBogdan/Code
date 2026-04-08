@extends('layouts.MainLayout')

@section('header-title')
    Интересы
@endsection

@section('content')
    @foreach ($interests as $type => $textArray)
        <h3 style="margin-top: 2em">{{ $type }}</h3>
        <ol>
            @foreach ($textArray as $text)
                <li>
                    <p>{{ $text }}</p>
                </li>
            @endforeach
        </ol>
    @endforeach
    <h3 style="margin-top: 2em"> Музыка </h3>
    <div class="album" style="grid-template-columns: repeat(2, 1fr)">
        @foreach ($music as $img_name => $title)
            <div class="photo">
                <img src="{{ $path . $img_name }}" style="width: auto">
                <p> {{ $title }} </p>
            </div>
        @endforeach
    </div>
@endsection