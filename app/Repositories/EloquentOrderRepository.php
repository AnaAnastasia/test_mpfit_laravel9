<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;

class EloquentOrderRepository implements OrderRepositoryInterface
{

    public function all()
    {
        return Order::all();
    }

    public function find(int $id)
    {
        return Order::find($id);
    }

    public function create(array $data)
    {
        return Order::create($data);
    }
}
