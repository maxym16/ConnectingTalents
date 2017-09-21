<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "UserProfileController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UserProfileController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\UserProfile';
}
