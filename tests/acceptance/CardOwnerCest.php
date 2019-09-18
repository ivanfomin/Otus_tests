<?php

class CardOwnerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestOwner1(AcceptanceTester $I)
    {


        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Fomin Ivan ');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_holder is not valid');

    }


    public function tryToTestOwner2(AcceptanceTester $I)
    {


        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", ' Ivan ');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_holder is not valid');

    }

    public function tryToTestOwner3(AcceptanceTester $I)
    {


        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", ' ');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_holder is not valid');

    }

    public function tryToTestOwner4(AcceptanceTester $I)
    {


        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", ' A B C');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_holder is not valid');

    }

    public function tryToTestOwner5(AcceptanceTester $I)
    {


        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", '1');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_holder is not valid');

    }
}
