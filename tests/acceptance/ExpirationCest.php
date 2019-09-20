<?php 

class ExpirationCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestCardExpirationFalse(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 321);
        $I->fillField("OrderNumber", 135);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCardExpirationTrue1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1231231231231230);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 136);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Succeed');
    }

     public function tryToTestCardExpirationTrue2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Elena Fomina');
        $I->fillField("Expiration", '2020-05');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 137);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Succeed');
    }
}
