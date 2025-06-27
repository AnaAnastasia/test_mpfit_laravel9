<?php

namespace App\Http\Services;

use App\Mail\OrderCreate;
use App\Models\Order;
use App\Models\Product;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderService
{
    public function __construct(
        protected OrderRepositoryInterface $orders
    )
    {}

    public function create($data) {
        return DB::transaction(function () use ($data) {
            $product = Product::findOrFail($data['product_id']);

            $data['total_price'] = $product->price * $data['quantity'];

            $order = $this->orders->create($data);

            Mail::to('aksayskaya2804@gmail.com')->queue(new OrderCreate($order));

            return $order;
        });
    }
}
