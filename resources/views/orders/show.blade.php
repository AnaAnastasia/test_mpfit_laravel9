@extends('layouts.app')

@section('content')

    <h1>Заказ №{{ $order->id }}</h1>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <p><strong>Дата:</strong> {{ $order->created_at->format('d.m.Y H:i') }}</p>
    <p><strong>Покупатель:</strong> {{ $order->customer_name }}</p>
    <p><strong>Комментарий:</strong> {{ $order->comment }}</p>
    <p><strong>Товар:</strong> {{ $order->product->name }} ({{ $order->quantity }} шт.)</p>
    <p><strong>Статус:</strong>
        @if ($order->status === 'completed')
            Выполнен
        @else
            Новый
        @endif
    </p>
    <p><strong>Итоговая цена:</strong> {{ number_format($order->total_price, 2, ',', ' ') }} ₽</p>

    @if ($order->status === 'new')
        <form method="POST" action="{{ route('orders.complete', $order) }}">
            @csrf
            @method('PATCH')
            <button type="submit">Отметить как выполненный</button>
        </form>
    @endif

    <a href="{{ route('orders.index') }}">Назад к списку</a>

@endsection
