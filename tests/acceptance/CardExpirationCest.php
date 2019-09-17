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
        $I->fillField("Expiration", '1');

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration2(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '');

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration3(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '1 1');

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration4(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '20-20');

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }

    public function tryToTestExpiration5(AcceptanceTester $I)
    {
        $I->amOnPage('/');


        $I->fillField('CardNumber', 1234567891234567);
        $I->fillField("Owner", 'Ivan Fomin');
        $I->fillField("Expiration", '201-20');

        $I->click('Send');
        $I->see('Card_expiration is not valid');
    }
}
