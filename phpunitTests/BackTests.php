<?php

use App\Logic\Back;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../app/Logic/Back.php';

class BackTests extends TestCase
{


    public function testWrongCardNumber()
    {

        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_number is not valid');
        $this->back = new Back(12345678, 'Ivan Fomin', '2019-01', 123, 100, 300);
        $this->fail("Long number");
    }

    public function testWrongCardHolder()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_holder is not valid');
        $this->back = new Back(123456, 'Ivan Fomin ', '2019-01', 123, 100, 300);
        $this->fail("Too many spaces");
    }

    public function testWrongExpiration()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Card_expiration is not valid');
        $this->back = new Back(123456, 'Ivan Fomin', '06-70', 123, 1001, 300);
        $this->fail("Wrong date");

    }

    public function testWrongCvv()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Cvv is not valid');
        $this->back = new Back(123456, 'Ivan Fomin', '2019-01', 1234, 100, 300);
        $this->fail("Cvv wrong");
    }

    public function testWrongOrder()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Order_number is not valid');
        $this->back = new Back(123456, 'Ivan Fomin', '2019-01', 123, 12345678912345678, 300);
        $this->fail("Order wrong");
    }

    public function testWrongSum()
    {
        $this->expectExceptionCode(400);
        $this->expectExceptionMessage('Sum is not valid');
        $this->back = new Back(123456, 'Ivan Fomin', '2019-01', 123, 100, -300);
        $this->fail("Sum wrong");
    }


}