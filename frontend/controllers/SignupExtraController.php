<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SignupExtraForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;

/**
 * SignupExtraController implements the CRUD actions for SignupExtraForm model.
 */
class SignupExtraController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SignupExtraForm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SignupExtraForm::find(),
        ]);
        return $this->redirect(['/']);
//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//        ]);
    }

    /**
     * Displays a single SignupExtraForm model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $user = new User();
        if(\Yii::$app->user->identity->id){
          $user = User::findOne(\Yii::$app->user->identity->id);  
        }
        return $this->render('view', [
            'model' => $this->findModel($id), 'user' => $user,
        ]);
    }

    /**
     * Creates a new SignupExtraForm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SignupExtraForm();
        $user = new User();
        if(\Yii::$app->user->identity->id){
          $user = User::findOne(\Yii::$app->user->identity->id);  
        }
        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){
                if($user){
                $user->username=$model->nome;
                $user->surname=$model->cognome;
                $user->email=$model->email;
                $user->password_hash=Yii::$app->security->generatePasswordHash($model->password);
                $user->update();
                }
            $model->save();
            }
            return $this->redirect(['/', 'id' => $model->id]);
            //return $this->refresh();
        }        
        else {
            return $this->render('create', [
                'model' => $model, 'user' => $user,
            ]);
        }
    }

    /**
     * Updates an existing SignupExtraForm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user = new User();
        if(\Yii::$app->user->identity->id){
          $user = User::findOne(\Yii::$app->user->identity->id);  
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model, 'user' => $user,
            ]);
        }
    }

    /**
     * Deletes an existing SignupExtraForm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SignupExtraForm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SignupExtraForm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SignupExtraForm::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
