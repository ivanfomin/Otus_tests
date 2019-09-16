<?php

require __DIR__ . '/../../app/Logic/Back.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-13', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_expiration is not valid' && $exception->getCode() === 400) {
        echo 'Expiration Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2022-00', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_expiration is not valid' && $exception->getCode() === 400) {
        echo 'Expiration Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '0000-05', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_expiration is not valid' && $exception->getCode() === 400) {
        echo 'Expiration Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '11-2020', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_expiration is not valid' && $exception->getCode() === 400) {
        echo 'Expiration Ok' . PHP_EOL;
    }
}

