<?php 

class SuccessCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToSuccess1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 138);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Succeed');
    }

    public function tryToSuccess2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Fomin Ivan');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 132);
        $I->fillField("Sum", 1000);

        $I->click('Send');
        $I->see('Succeed');
    }

    public function tryToSuccess3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 133);
        $I->fillField("Sum", 1);

        $I->click('Send');
        $I->see('Succeed');
    }

    public function tryToSuccess4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 134);
        $I->fillField("Sum", 200);

        $I->click('Send');
        $I->see('Succeed');
    }

    public function tryToSuccess5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 135);
        $I->fillField("Sum", 999);

        $I->click('Send');
        $I->see('Succeed');
    }
}
