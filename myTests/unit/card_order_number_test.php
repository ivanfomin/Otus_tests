<?php

require __DIR__ . '/../../app/Logic/Back.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '1234567891234567890', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Order_number is not valid' && $exception->getCode() === 400) {
        echo 'Order_number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '123456789123456789', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Order_number is not valid' && $exception->getCode() === 400) {
        echo 'Order_number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '12345678912345678', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Order_number is not valid' && $exception->getCode() === 400) {
        echo 'Order_number Ok' . PHP_EOL;
    }
}

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '12345678912345670', 200);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Order_number is not valid' && $exception->getCode() === 400) {
        echo 'Order_number Ok' . PHP_EOL;
    }
}
