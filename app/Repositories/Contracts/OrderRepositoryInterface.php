<?php

namespace App\Repositories\Contracts;

use App\Models\Order;

interface OrderRepositoryInterface
{
    public function all();

    public function find(int $id);

    public function create(array $data);
}
