<?php

namespace App;

use App\Logic\Back;
use App\Models\Card;
use App\Models\Order;

class Service
{
    public static function withdraw(Order $order, int $card_number, int $cvv)
    {
        $card = Card::findByNumber($card_number);

        if ($card->expiration < date('Y-m')) {
            return 402;
        }
        if ($card->cvv != $cvv) {

            return 401;
        }
        if ($card->money < $order->sum) {

            return 403;
        }

        $card->money -= $order->sum;
        if (self::setOrderIsPaid($order, $order->sum, $order->order_number) === true) {
            $card->save();
            return 200;
        }
        return 404;

    }

    public static function setOrderIsPaid(Order $order, int $sum, int $number): bool
    {

        if ($order->sum == $sum && $order->order_number == $number) {
            $order->save();
            return true;
        }
        return false;
    }
}