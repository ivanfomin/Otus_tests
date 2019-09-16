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
    $testBack = new Back(12345678901, 'qwerty QWERTY', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_number is not valid' && $exception->getCode() === 400) {
        echo 'Number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(12345678901-232, 'qwerty QWERTY', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_number is not valid' && $exception->getCode() === 400) {
        echo 'Number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(123456789012345678, 'qwerty QWERTY', '2020-04', '123', '123456', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Card_number is not valid' && $exception->getCode() === 400) {
        echo 'Number Ok' . PHP_EOL;
    }
}