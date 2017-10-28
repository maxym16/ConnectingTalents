<?php

namespace backend\controllers;

use common\models\UserProfile;
use common\models\UserSocial;
use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;

/**
 * UserController implements the CRUD actions for User model.
 */

class UserController extends Controller
{
    public $layout = 'ubold-pages-layout';

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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);
        $users = User::find()->all();


//        return $this->render('index', [
//            'dataProvider' => $dataProvider,
//
//        ]);
        return $this->render('index', compact('users'));
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            if(Yii::$app->request->post('update_type') === 'basic'){
                if($model->load(Yii::$app->request->post()) && $model->update()){
                    Yii::$app->session->setFlash('update', 'success');
                    return $this->render('update', compact('model'));
                }
                return $this->render('update', compact('model'));
            }
            if(Yii::$app->request->post('update_type') === 'extra'){
                $profile_model = $model->myprofile;
            if ($profile_model->load(Yii::$app->request->post())) {
                if($profile_model->validate()){
                    $file = UploadedFile::getInstance($profile_model, 'file');
                    if ($file && $file->tempName) {
                        if ($profile_model->validate(['file'])) {
                            $dir = Yii::getAlias('img/avatar/');
                            $dir0 = Yii::getAlias('@frontend/web/img/avatar/');
                            $fileName = $file->name;
                            $file->saveAs($dir0.$fileName);
                            $profile_model->image = '/'.$dir.$fileName;
                            $photo = Image::getImagine()->open($dir0.$fileName);
                            $photo->thumbnail(new Box(800, 800))->save($dir0.$fileName, ['quality' => 90]);
                            \yii\helpers\FileHelper::createDirectory(Yii::getAlias($dir.'thumbs'));
                            //Yii::$app->controller->createDirectory(Yii::getAlias($dir.'thumbs'));
                            Image::thumbnail($dir0. $fileName, 150, 70)
                                ->save(Yii::getAlias($dir0 .'thumbs/'. $fileName), ['quality' => 80]);
                        }
                    }

                    $profile_model->save();
                    Yii::$app->session->setFlash('update', 'success');
                    return $this->render('update', compact('model', 'profile_model'));
                }
            }
                
//                if($profile_model->load(Yii::$app->request->post()) && $profile_model->save()){
//                    Yii::$app->session->setFlash('update', 'success');
//                    return $this->render('update', compact('model', 'profile_model'));
//                }

                return $this->render('update', compact('model', 'profile_model'));
            }
        }

        return $this->render('update', compact('model'));
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        /** TODO Сделать удаление пользователей через корзину */
        $this->findModel($id)->delete();
        if($profile = UserProfile::findOne(['user_id' => $id])){
            $profile->delete();
        }
        if($social = UserSocial::findAll(['user_id' => $id])){
            foreach ($social as $item){
                $item->delete();
            }
        }

        return $this->redirect(['index', 'result' => '']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

