<?php

class ValidCardCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestCard1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2019-08');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '97-11');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '11-97');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '0000');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 0);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard6(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 'string');
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '2018-10');
        $I->fillField("CVV", 'string');
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

}
