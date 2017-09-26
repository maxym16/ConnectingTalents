<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Team;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\UserProfile;

/**
 * MyTeamsController implements the CRUD actions for Team model.
 */
class MyTeamsController extends Controller
{
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
     * Lists all Team models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Team::find(),
        ]);
        if(Yii::$app->user->identity->username)
            {
            $username=Yii::$app->user->identity->username;
            $user_id=Yii::$app->user->id;
            } 
            else {$username=null;}

        $user = User::find()->where(['id' =>$user_id])->one();
        $profile = UserProfile::find()->where(['user_id' =>$user_id])->one();

        return $this->render('index', [
            'dataProvider' => $dataProvider, 'username' => $username,
            'user' => $user, 'profile' => $profile,
        ]);
    }

    /**
     * Displays a single Team model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Team model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model, 'user_id' => $user_id,
            ]);
        }
    }

    /**
     * Updates an existing Team model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $user_id=\Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model, 'user_id' => $user_id,
            ]);
        }
    }

    /**
     * Deletes an existing Team model.
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
     * Finds the Team model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Team the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Team::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionTeamRequests()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        return $this->render('team-requests', [
            'model' => $model, 'user_id' => $user_id,
        ]);
    }

    public function actionTeamMembers()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        return $this->render('team-members', [
            'model' => $model, 'user_id' => $user_id,
        ]);
    }

    public function actionTeamServices()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        return $this->render('team-services', [
            'model' => $model, 'user_id' => $user_id,
        ]);
    }

    public function actionTeamCoding()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        return $this->render('team-coding', [
            'model' => $model, 'user_id' => $user_id,
        ]);
    }

    public function actionTeamJoined()
    {
        $model = new Team();
        $user_id=\Yii::$app->user->id;

        return $this->render('team-joined', [
            'model' => $model, 'user_id' => $user_id,
        ]);
    }

}
