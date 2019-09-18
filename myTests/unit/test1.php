<?php
require __DIR__ . '/../../app/Logic/Back.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567, 'qwerty QWERTY', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_number is not valid' && $exception->getCode() === 400) {
        echo 'Number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY qwer', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_holder is not valid' && $exception->getCode() === 400) {
        echo 'Holder Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-13', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_expiration is not valid' && $exception->getCode() === 400) {
        echo 'Expiration Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-10', '1234', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Cvv is not valid' && $exception->getCode() === 400) {
        echo 'CVV Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-10', '123', '1234567891234567890', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Order_number is not valid' && $exception->getCode() === 400) {
        echo 'Order_number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-10', '123', '123456789', -200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Sum is not valid' && $exception->getCode() === 400) {
        echo 'Sum Ok' . PHP_EOL;
    }
}



