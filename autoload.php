<?php

require __DIR__ . '/vendor/autoload.php';
spl_autoload_register(function ($class)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require $path;
    //var_dump($path); die;
});