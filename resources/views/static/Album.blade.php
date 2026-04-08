@extends('layouts.MainLayout')

@section('header-title')
    Альбом
@endsection

@section('content')
    <div class="album">
        @foreach($photosAndAuthors as $photo => $author)
            <div class="photo">
                <img src="{{ asset($path . $photo . '.jpg') }}" alt="{{ $photo }}">
                <h3>Photo by {{ $author }}</h3>
            </div>
        @endforeach
    </div>
@endsection