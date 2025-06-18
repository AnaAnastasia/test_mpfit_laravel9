@extends('layouts.app')

@section('content')

    <h1>Создать товар</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Название:</label>
        <input name="name" value="{{ old('name') }}">

        <label>Описание:</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label>Цена:</label>
        <input type="number" step="0.01" name="price" value="{{ old('price') }}">

        <label>Категория:</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit">Сохранить</button>
    </form>
@endsection
