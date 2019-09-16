<?php

use App\Models\Order;

class DbTest extends \Codeception\Test\Unit
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
    public function testSomeFeature()
    {
        $order = new Order();
        $order->order_number = 123;
        $order->sum = 500;
        $order->save();
        $this->assertEquals(500, $order->sum);
        //$this->tester->seeInDatabase('orders', ['order_number' => 123]);

    }
}