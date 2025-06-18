@extends('layouts.app')

@section('content')

    <h1>Товары</h1>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">
                    {{ $product->name }} — {{ number_format($product->price, 2, ',', ' ') }} рублей
                    ({{ $product->category->name }})
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('products.create') }}">Добавить товар</a>

@endsection
