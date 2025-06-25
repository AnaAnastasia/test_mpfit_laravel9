<h1>Заказ №{{ $order->id }} принят!</h1>
<p>Покупатель: {{ $order->customer_name }}</p>
<p>Товар: {{ $order->product->name }}</p>
<p>Количество: {{ $order->quantity }}</p>
<p>Сумма: {{ number_format($order->total_price, 2, ',', ' ') }} ₽</p>
