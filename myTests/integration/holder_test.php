<?php
//In case Error card_holder
//Owner will be red
//See
// <p style="color: red">Owner<input  type="text" name="card_holder">

$_POST['card_number'] = 1234567890123456;
$_POST['card_holder'] = 'qwe qwe qwe';

include __DIR__ . '/../../app/Logic/action.php';




