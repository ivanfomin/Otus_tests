<?php 

class CardCvvCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTestCvv1(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", '2020');

        $I->click('Send');
        $I->see('Cvv is not valid');
    }

    public function tryToTestCvv2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 2020);

        $I->click('Send');
        $I->see('Cvv is not valid');
    }

    public function tryToTestCvv3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 12);

        $I->click('Send');
        $I->see('Cvv is not valid');
    }

    public function tryToTestCvv4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", 12345);

        $I->click('Send');
        $I->see('Cvv is not valid');
    }

    public function tryToTestCvv5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '10/20');
        $I->fillField("CVV", -1);

        $I->click('Send');
        $I->see('Cvv is not valid');
    }
}
