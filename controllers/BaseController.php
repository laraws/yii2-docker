<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use Yii;

class BaseController extends Controller
{
    public $layout = 'main.twig';
}