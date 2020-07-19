<?php
namespace app\controllers;

use app\controllers\BaseController;

class TwigExampleController extends BaseController
{
    public function actionSay($message = 'Hello')
    {
        return $this->render('say.twig', compact('message'));
    }
}