<?php

namespace App;

use App\Logic\Back;
use App\Models\Card;
use App\Models\Order;

class Service
{
    public static function withdraw(Order $order, Back $back)
    {
        $card = Card::findByNumber($back->card_number);

        if ($card->cvv != $back->cvv) {

            return 401;
        }
        if ($card->money < $order->sum) {

            return 403;
        }

        $card->money -= $order->sum;
        self::setOrderIsPaid($order->order_number, $order->sum);
        $card->save();
        return 200;

    }

    public static function setOrderIsPaid(int $orderNumber, float $sum)
    {
        $order = new Order();
        $order->order_number = $orderNumber;
        $order->sum = $sum;
        $order->save();
    }
}