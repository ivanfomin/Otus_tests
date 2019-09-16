<?php

use App\Logic\Back;


require_once __DIR__ . '/../../autoload.php';

try {
    $tempOrder = new Back((int)$_POST['card_number'], $_POST['card_holder'],
        $_POST['card_expiration'], (int)$_POST['cvv'], (int)$_POST['order_number'], (float)$_POST['sum']);

} catch (Exception $exception) {
    $error = $exception->getMessage();
    var_dump($error);
    include __DIR__ . '/../Templates/errors.php';
}






