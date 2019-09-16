<?php 

class NumberCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');

        $I->fillField('CardNumber', 123);

        $I->click('Send');
        $I->see('Card_number is not valid');

    }
}
