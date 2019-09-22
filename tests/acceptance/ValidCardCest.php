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


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '08/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 10);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/21');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 10);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '11/21');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 10);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '11/19');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 10);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '11/21');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 10);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

    public function tryToTestCard6(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1122334455667788);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '11/20');
        $I->fillField("CVV", 123);
        $I->fillField("OrderNumber", 123);
        $I->fillField("Sum", 100);

        $I->click('Send');
        $I->see('Ваша карта устарела, проверьте срок действия!!!');
    }

}
