<?php
namespace frontend\controllers;
use Yii;
use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\User;
use common\models\UserProfile;
use yii\db\ActiveRecord;

/**
 * Description of UserProfController
 * для роботи з 2-ма моделями
 */
class UserProfController extends Controller 
{
    public function actionUpdate($id)
    {
        $user = User::findOne($id);
        $profile = UserProfile::findOne($id);
        
        if (!isset($user, $profile)) {
            throw new NotFoundHttpException("The user was not found.");
        }
        
        $user->scenario = 'update';
        $profile->scenario = 'update';
        
        if ($user->load(Yii::$app->request->post()) && $profile->load(Yii::$app->request->post())) {
            $isValid = $user->validate();
            $isValid = $profile->validate() && $isValid;
            if ($isValid) {
                $user->save(false);
                $profile->save(false);
                return $this->redirect(['user/view', 'id' => $id]);
            }
        }
        
        return $this->render('update', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }
}
