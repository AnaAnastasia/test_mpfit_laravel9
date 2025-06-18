@extends('layouts.app')

@section('content')

        <h1>{{ $product->name }}</h1>

    <p>Описание: {{ $product->description }}</p>
    <p>Категория: {{ $product->category->name }}</p>
    <p>Цена: {{ number_format($product->price, 2, ',', ' ') }} ₽</p>

    <a href="{{ route('products.edit', $product) }}">
        <button type="button">Редактировать</button>
    </a>

    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Удалить этот товар?')">Удалить</button>
    </form>

    <br>

    <a href="{{ route('products.index') }}">
        <button type="button">Назад к списку</button>
    </a>

@endsection
