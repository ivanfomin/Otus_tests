<?php

use App\Logic\Back;

class UnitTest extends \Codeception\Test\Unit
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


    public function testWrongCardNumber()
    {

        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_number is not valid');
        $this->back = new Back(12345678, 'Ivan Fomin', '10/20', 123, 100, 300);
        $this->fail("Long number");
    }

    public function testWrongCardHolder()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_holder is not valid');
        $this->back = new Back(1234567891123456, 'Ivan Fomin ', '10/20', 123, 100, 300);
        $this->fail("Too many spaces");
    }

    public function testWrongExpiration()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_expiration is not valid');
        $this->back = new Back(1234567891123456, 'Ivan Fomin', '200000-20000', 123, 1001, 300);
        $this->fail("Wrong date");

    }

    public function testWrongExpiration1()
    {
        $this->expectExceptionCode(402);
        $this->expectExceptionMessage('Card is out of order');
        $this->back = new Back(1122334455667788, 'Ivan Fomin', '10/20', 123, 1001, 300);
        $this->fail("Wrong date");

    }

    public function testWrongCvv()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Cvv is not valid');
        $this->back = new Back(1234567891123456, 'Ivan Fomin', '10/20', 1234, 100, 300);
        $this->fail("Cvv wrong");
    }

    public function testWrongOrder()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Order_number is not valid');
        $this->back = new Back(1234567891123456, 'Ivan Fomin', '10/20', 123, 12345678912345678, 300);
        $this->fail("Order wrong");
    }

    public function testWrongSum()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Sum is not valid');
        $this->back = new Back(1234567891123456, 'Ivan Fomin', '10/20', 123, 100, -300);
        $this->fail("Sum wrong");
    }
}