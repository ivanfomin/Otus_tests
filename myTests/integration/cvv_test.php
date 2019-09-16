<?php
//In case Error cvv
//CVV will be red
//See
//<p style="color: red">CVV

$_POST['card_number'] = 123456;
$_POST['card_holder'] = 'Ivan Fomin';
$_POST['card_expiration'] = '2020-06';
$_POST['cvv'] = 1234;


include __DIR__ . '/../../app/Logic/action.php';
