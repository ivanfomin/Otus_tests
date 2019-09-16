<?php
//In case Error order_number
//Order number will be red
//See
//<p style="color: red" >Order number

$_POST['card_number'] = 123456;
$_POST['card_holder'] = 'Ivan Fomin';
$_POST['card_expiration'] = '2020-06';
$_POST['cvv'] = 123;
$_POST['order_number'] = 12345678901234567;


include __DIR__ . '/../../app/Logic/action.php';
