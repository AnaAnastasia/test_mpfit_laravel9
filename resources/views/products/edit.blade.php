@extends('layouts.app')

@section('content')

    <h1>Редактирование товара</h1>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')

        <label>Название</label>
        <input name="name" value="{{ old('name', $product->name) }}" required>

        <label>Описание</label>
        <textarea name="description">{{ old('description', $product->description) }}</textarea>

        <label>Цена (в рублях)</label>
        <input name="price" type="number" step="0.01" value="{{ old('price', $product->price) }}" required>

        <label>Категория</label>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <button type="submit">Обновить</button>
    </form>

@endsection
