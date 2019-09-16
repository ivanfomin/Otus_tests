<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('run error money');

$I->amOnPage('/app/Templates/error_money.html');

$I->see('Not enough money');

