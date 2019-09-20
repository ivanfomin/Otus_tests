<?php

namespace App\Logic;

use App\Service;
use App\Models\Order;

class Back
{
    public int $card_number;
    public string $card_holder;
    public $card_expiration;
    public int $cvv;
    public int $order_number;
    public float $sum;

    /**
     * Back constructor.
     * @param int $card_number
     * @param string $card_holder
     * @param $card_expiration
     * @param int $cvv
     * @param int $order_number
     * @param float $sum
     */
    public function __construct(int $card_number, string $card_holder, $card_expiration, int $cvv, int $order_number, float $sum)
    {
        $this->card_number = $card_number;
        $this->card_holder = $card_holder;
        $this->card_expiration = $card_expiration;
        $this->cvv = $cvv;
        $this->order_number = $order_number;
        $this->sum = $sum;


        $tempDate = explode('-', $this->card_expiration);
        //$tempDate[0] - year
        //$tempDate[1] - month
        $dt = implode('', $tempDate);
        $currentDate = date('Ym');

        if ($dt < $currentDate) {
            throw  new \Exception('Card is out of order!', 402);
        }
        $resultDate = checkdate((int)$tempDate[1], 1, (int)$tempDate[0]);
        $order_len = strlen((string)$this->order_number);


        if (strlen((string)$this->card_number) != 16) {
            throw  new \Exception("Card_number is not valid", 400);
        }

        if (preg_match("/[^A-z\-]+$/", $this->card_holder) ||
            (substr_count($this->card_holder, ' ') > 1)) {
            throw new \Exception("Card_holder is not valid", 400);
        }

        if ($resultDate !== true) {
            throw new \Exception ("Card_expiration is not valid", 400);
        }

        if (strlen((string)$this->cvv) != 3) {
            throw new \Exception("Cvv is not valid", 400);
        }

        if ($this->order_number <= 0 || $order_len > 16) {
            throw new \Exception("Order_number is not valid", 400);
        }

        if ($this->sum <= 0) {
            throw new \Exception("Sum is not valid", 400);
        }


        $order = new Order();
        $order->order_number = $this->order_number;
        $order->sum = $this->sum;

        $answer = Service::withdraw($order, $this->card_number, $this->cvv);

        if ($answer == 403) {
            header('Location: /Index/ErrorMoney');
            exit();
        }

        if ($answer == 402) {
            header('Location: /Index/ErrorCard');
            exit();
        }

        if ($answer == 401) {
            header('Location: /Index/ErrorCvv');
            exit();
        }

        if ($answer == 200) {
            header('Location: /Index/Success');
            exit();
        }

    }

}