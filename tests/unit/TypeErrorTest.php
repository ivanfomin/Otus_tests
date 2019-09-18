<?php

use App\Logic\Back;

class TypeErrorTest extends \Codeception\Test\Unit
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
    public function testConstructCardNumer()
    {
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Argument 1 passed to App\Logic\Back::__construct() must be of the type int, string given');
        $this->back = new Back('string', 123, 2020 - 10, 'string ', ' string ', '');

    }

    public function testConstructCvv()
    {
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Argument 4 passed to App\Logic\Back::__construct() must be of the type int, string given');
        $this->back = new Back(1234567890123456, 'Ivan Fomin', 2020 - 10, 'string ', ' string ', '');

    }

    public function testConstructOrder()
    {
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Argument 5 passed to App\Logic\Back::__construct() must be of the type int, string given');
        $this->back = new Back(1234567890123456, 'Ivan Fomin', 2020 - 10, 123, ' string ', '');

    }

    public function testConstructSum()
    {
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Argument 6 passed to App\Logic\Back::__construct() must be of the type float, string given');
        $this->back = new Back(1234567890123456, 'Ivan Fomin', 2020 - 10, 123, 1234567, '');

    }
}