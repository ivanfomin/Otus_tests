<?php

namespace App\Controllers;

use App\Core\View;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

}