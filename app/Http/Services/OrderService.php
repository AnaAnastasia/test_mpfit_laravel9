<?php

namespace App\Http\Services;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function create($data) {
        return DB::transaction(function () use ($data) {
            $product = Product::findOrFail($data['product_id']);

            $data['total_price'] = $product->price * $data['quantity'];

            return Order::create($data);
        });
    }
}
