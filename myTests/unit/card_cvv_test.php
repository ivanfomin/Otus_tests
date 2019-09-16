<?php

require __DIR__ . '/../../app/Logic/Back.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-05', '1234', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Cvv is not valid' && $exception->getCode() === 400) {
        echo 'CVV Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-05', '12', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Cvv is not valid' && $exception->getCode() === 400) {
        echo 'CVV Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-05', '1', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Cvv is not valid' && $exception->getCode() === 400) {
        echo 'CVV Ok' . PHP_EOL;
    }
}
try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-05', '12345', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Cvv is not valid' && $exception->getCode() === 400) {
        echo 'CVV Ok' . PHP_EOL;
    }
}