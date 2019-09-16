<?php

require __DIR__ . '/../../app/Logic/Back.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY qwer', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_holder is not valid' && $exception->getCode() === 400) {
        echo 'Holder Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY qwer weqw', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_holder is not valid' && $exception->getCode() === 400) {
        echo 'Holder Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty   ', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_holder is not valid' && $exception->getCode() === 400) {
        echo 'Holder Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, ' qwerty ', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_holder is not valid' && $exception->getCode() === 400) {
        echo 'Holder Ok' . PHP_EOL;
    }
}

