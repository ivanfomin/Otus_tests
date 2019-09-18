<?php namespace service;

use App\Models\Order;
use App\Service;

class CvvTest extends \Codeception\Test\Unit
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
    public function testCardHasCvv()
    {
        $order = new Order();
        $order->sum = 100;
        $order->order_number = 1234;

        $this->assertEquals(200, Service::withdraw($order, 1234567891234567, 123));

        //not correct cvv
        $this->assertEquals(401, Service::withdraw($order, 1234567891234567, 122));

        $order->sum = 10000; //too much

        $this->assertEquals(403, Service::withdraw($order, 1234567891234567, 123));


    }
}