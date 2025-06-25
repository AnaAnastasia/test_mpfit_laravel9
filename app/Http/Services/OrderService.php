<?php

namespace App\Http\Services;

use App\Mail\OrderCreate;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderService
{
    public function create($data) {
        return DB::transaction(function () use ($data) {
            $product = Product::findOrFail($data['product_id']);

            $data['total_price'] = $product->price * $data['quantity'];

            $order = Order::create($data);

            Mail::to('aksayskaya2804@gmail.com')->queue(new OrderCreate($order));

            return $order;
        });
    }
}
