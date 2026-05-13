@extends('layouts.MainLayout')

@section('header-title')
    Блог
@endsection

@section('content')
    <div class="column">
        @foreach ($blog as )
            @if($product->image_path)
                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
            @endif
        @endforeach
    </div>
@endsection