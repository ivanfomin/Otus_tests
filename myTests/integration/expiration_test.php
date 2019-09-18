<?php
//In case Error card_expiration
//Card_expiration will be red
//See
//<p style="color: red">Expiration

$_POST['card_number'] = 1234567890123456;
$_POST['card_holder'] = 'Ivan Fomin';
$_POST['card_expiration'] = '11/97';


include __DIR__ . '/../../app/Logic/action.php';