<?php

namespace App\Models;
use App\Core\Model;

class Order extends Model
{
    public static $table = 'orders';

    public int $order_number;
    public float $sum;
}