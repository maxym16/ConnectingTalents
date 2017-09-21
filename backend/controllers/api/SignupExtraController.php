<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "SignupExtraController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class SignupExtraController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\SignupExtraForm';
}
