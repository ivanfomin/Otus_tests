<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('run error');

$I->amOnPage('/app/Templates/error_cvv.html');

$I->see('Не удалось списать данные с карты, проверьте реквизиты');
