<?php

use App\Logic\Back;


require_once __DIR__ . '/../../autoload.php';

try {
    $tempOrder = new Back((int)$_POST['card_number'], $_POST['card_holder'],
        $_POST['card_expiration'], (int)$_POST['cvv'], (int)$_POST['order_number'], (float)$_POST['sum']);

} catch (Exception $exception) {
    $error = $exception->getMessage();
    if($exception->getCode() === 402) {
        include __DIR__ . '/../Templates/error_expiration.html';
        exit();
    }
    include __DIR__ . '/../Templates/errors.php';
}






