<?php 

class CardSumCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest1(AcceptanceTester $I)
    {
         $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Sum is not valid');
    }

    public function tryToTest2(AcceptanceTester $I)
    {
         $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", -1);

        $I->click('Send');
        $I->see('Sum is not valid');
    }

    public function tryToTest3(AcceptanceTester $I)
    {
         $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", -1000);

        $I->click('Send');
        $I->see('Sum is not valid');
    }

    public function tryToTest4(AcceptanceTester $I)
    {
         $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", -1e3);

        $I->click('Send');
        $I->see('Sum is not valid');
    }

    public function tryToTest5(AcceptanceTester $I)
    {
         $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", -100);

        $I->click('Send');
        $I->see('Sum is not valid');
    }

}
