<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Магазин')</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">

<nav>
    <a href="{{ route('products.index') }}">Товары</a>
    <a href="{{ route('orders.index') }}">Заказы</a>
</nav>

<hr>

@yield('content')

</body>
</html>
