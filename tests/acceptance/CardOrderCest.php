<?php 

class CardOrderCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestOrder1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 0);

        $I->click('Send');
        $I->see('Order_number is not valid');
    }

    public function tryToTestOrder2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", -123);

        $I->click('Send');
        $I->see('Order_number is not valid');
    }

    public function tryToTestOrder3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 1111111111111111123);

        $I->click('Send');
        $I->see('Order_number is not valid');
    }

    public function tryToTestOrder4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 11111111111111111234);

        $I->click('Send');
        $I->see('Order_number is not valid');
    }

    public function tryToTestOrder5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 111111111111111112345);

        $I->click('Send');
        $I->see('Order_number is not valid');
    }


}
