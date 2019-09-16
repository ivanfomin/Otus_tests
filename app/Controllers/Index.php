<?php

namespace App\Controllers;

use App\Core\MyException;

class Index extends Controller
{
    public function actionDefault()
    {
        include __DIR__ . '/../Templates/index.html';
    }

    public function actionErrorMoney()
    {
        $this->view->display('error_money.html');
        http_response_code(403);
    }

    public function actionErrorCvv()
    {
        $this->view->display('error_cvv.html');
        http_response_code(401);
    }

    public function actionSuccess()
    {
        $this->view->display('success.html');
    }

}