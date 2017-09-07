<?php

namespace frontend\modules\community\controllers;

use yii\web\Controller;

/**
 * Description of BlogController
 */
class BlogController extends Controller 
{
    public $layout = 'default';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
