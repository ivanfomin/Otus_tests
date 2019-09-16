<?php
//In case Error card_holder
//Card number will be red
//See
// <p style="color: red">Card number

$_POST['card_number'] = 1234567;
$_POST['card_holder'] = 'Ivan Fomin';

include __DIR__ . '/../../app/Logic/action.php';
