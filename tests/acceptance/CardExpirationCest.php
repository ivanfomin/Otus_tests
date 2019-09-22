<?php 

class CardExpirationCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestExpiration1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '13/19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 103);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '12/18');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 102);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '11/19/12');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 101);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '10000000');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 122);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", 'hello');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 121);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration6(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '10 19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 129);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration7(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '10.19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 128);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration8(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '10-19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 127);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration9(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", 'abc/19a');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 126);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration10(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '0/19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 125);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration11(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '-1/19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 124);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration12(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
         $I->fillField("Expiration", '10/19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Succeed');
    }

}
