<?php

class CardNumberCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestNumber1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 123);
        $I->fillField("Owner", 'Fomin Ivan');

        $I->click('Send');
        $I->see('Card_number is not valid');

    }

    public function tryToTestNumber2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567);
        $I->fillField("Owner", 'Fomin Ivan');

        $I->click('Send');
        $I->see('Card_number is not valid');

    }

    public function tryToTestNumber3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 'hello');
        $I->fillField("Owner", 'Fomin Ivan');

        $I->click('Send');
        $I->see('Card_number is not valid');

    }

    public function tryToTestNumber4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', '123456hello');
        $I->fillField("Owner", 'Fomin Ivan');

        $I->click('Send');
        $I->see('Card_number is not valid');

    }

    public function tryToTestNumber5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', -1);
        $I->fillField("Owner", 'Fomin Ivan');

        $I->click('Send');
        $I->see('Card_number is not valid');

    }


}
