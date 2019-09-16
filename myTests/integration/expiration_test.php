<?php
//In case Error card_expiration
//Card_expiration will be red
//See
//<p style="color: red">Expiration

$_POST['card_number'] = 123456;
$_POST['card_holder'] = 'Ivan Fomin';
$_POST['card_expiration'] = '06-19';


include __DIR__ . '/../../app/Logic/action.php';