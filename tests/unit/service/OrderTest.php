<?php

use App\Models\Order;
use App\Service;
use Codeception\Stub\Expected;
use App\Logic\Back;

class OrderTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testOrderIsPaid()
    {

        $order = new Order();
        $order->sum = 100;
        $order->order_number = 12345;

        $this->assertTrue(Service::setOrderIsPaid($order, 100, 12345));
        $this->assertFalse(Service::setOrderIsPaid($order, 100, 123456));
        $this->assertFalse(Service::setOrderIsPaid($order, 1000, 12345));

    }
}