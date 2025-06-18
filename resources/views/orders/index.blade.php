@extends('layouts.app')

@section('content')

    <h1>Список заказов</h1>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($orders as $order)
            <li>
                <a href="{{ route('orders.show', $order) }}">
                    Заказ №{{ $order->id }} — {{ $order->customer_name }} — {{ $order->status }} — {{ number_format($order->total_price, 2, ',', ' ') }} ₽
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('orders.create') }}">Добавить новый заказ</a>

@endsection
