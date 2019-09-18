<?php
require_once __DIR__ . '/../../autoload.php';

use App\Logic\Back;

try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '123456789', -1);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Sum is not valid' && $exception->getCode() === 400) {
        echo 'Sum Ok' . PHP_EOL;
    }
}
try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '123456789', -0.7);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Sum is not valid' && $exception->getCode() === 400) {
        echo 'Sum Ok' . PHP_EOL;
    }
}
try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '123456789', -100000);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Sum is not valid' && $exception->getCode() === 400) {
        echo 'Sum Ok' . PHP_EOL;
    }
}
try {
    $testBack = new Back(1234567891234567, 'qwerty QWERTY', '2019-12', '123', '123456789', -INF);

} catch (Exception $exception) {
    if ($exception->getMessage() === 'Sum is not valid' && $exception->getCode() === 400) {
        echo 'Sum Ok' . PHP_EOL;
    }
}
