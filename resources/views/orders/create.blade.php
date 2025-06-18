@extends('layouts.app')

@section('content')

    <h1>Создание заказа</h1>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf

        <label>ФИО покупателя</label>
        <input name="customer_name" required value="{{ old('customer_name') }}">

        <label>Комментарий</label>
        <textarea name="comment">{{ old('comment') }}</textarea>

        <label>Товар</label>
        <select name="product_id" required>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">
                    {{ $product->name }} — {{ number_format($product->price, 2, ',', ' ') }} ₽
                </option>
            @endforeach
        </select>

        <label>Количество</label>
        <input type="number" name="quantity" value="1" min="1" required>

        <button type="submit">Создать заказ</button>
    </form>

@endsection
