<?php
//In case Error sum
//Sum will be red
//See
//<p style="color: red">Sum

$_POST['card_number'] = 123456;
$_POST['card_holder'] = 'Ivan Fomin';
$_POST['card_expiration'] = '2020-06';
$_POST['cvv'] = 123;
$_POST['order_number'] = 1234567890123456;
$_POST['sum'] = -100;


include __DIR__ . '/../../app/Logic/action.php';