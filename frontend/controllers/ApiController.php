<?php

/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 02.10.2017
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ApiController extends Controller
{
    public function actionUser(){
        echo Yii::$app->user->identity->username;
    }
}