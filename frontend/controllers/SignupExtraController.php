<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SignupExtraForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Gd;
use Imagine\Image\Box;
use Imagine\Image\BoxInterface;

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
        return $this->redirect(['/']);
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
        $this->layout = 'ct-main-layout';

        if(!\Yii::$app->user->id && !SignupExtraForm::findOne(['user_id'=>\Yii::$app->user->id])){
            return $this->redirect(['/']);
        }

        $model = new SignupExtraForm();
        $user = User::findOne(Yii::$app->user->id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){
                $model->user_id = Yii::$app->user->id;
                $post = Yii::$app->request->post();
                $post = $post['SignupExtraForm'];

                $model->presentazione_personale =
                    isset($post['presentazione_personale'])?$post['presentazione_personale']:'';
                $model->remote_work =
                    isset($post['remote_work'])?$post['remote_work']:'';
                $model->effort =
                    isset($post['effort'])?$post['effort']:'';

                /** Sharing fields */
                    $model->sharing =
                        isset($post['sharing'])?$post['sharing']:'0';
                    if($model->sharing){
                        $model->sharing_role =
                            isset($post['sharing_role'])?$post['sharing_role']:'';
                        $model->sharing_purpose =
                            isset($post['sharing_purpose'])?$post['sharing_purpose']:'';
                        $model->sharing_expl =
                            isset($post['sharing_expl'])?$post['sharing_expl']:'';
                    }
                /** end */

                $file = UploadedFile::getInstance($model, 'file');
                if ($file && $file->tempName) {
                    if ($model->validate(['file'])) {
                        $dir = Yii::getAlias('img/avatar/');
                        $fileName = $file->name;
                        $file->saveAs($dir . $fileName);
                        $model->image = '/'.$dir . $fileName;
                        $photo = Image::getImagine()->open($dir . $fileName);
                        $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                        Yii::$app->controller->createDirectory(Yii::getAlias('img/avatar/thumbs'));
                        Image::thumbnail($dir . $fileName, 150, 70)
                            ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                    }
                }

                $model->save();

                /** Update user table data */
                $user->role='user_2';
//                $user->username=$model->nome;
                $user->surname=$model->cognome;
                $user->email=$model->email_pec;
                $user->update();

                /** Send mail to user */
                $model->sendEmail();

                return $this->redirect(['/profile']);
            }
            else {
                return $this->redirect(['/signup-extra/create', 'model' => $model, 'user' => $user,
                ]);
            }

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
        $this->layout = 'ct-main-layout';

        /** start */
        if(!\Yii::$app->user->id && !SignupExtraForm::findOne(['user_id'=>\Yii::$app->user->id])){
            return $this->redirect(['/']);
        }

        $model =SignupExtraForm::findOne($id);
        $user = User::findOne(Yii::$app->user->id);

        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()){
                $model->user_id = Yii::$app->user->id;
                $post = Yii::$app->request->post();
                $post = $post['SignupExtraForm'];

                $model->presentazione_personale =
                    isset($post['presentazione_personale'])?$post['presentazione_personale']:'';
                $model->remote_work =
                    isset($post['remote_work'])?$post['remote_work']:'';
                $model->effort =
                    isset($post['effort'])?$post['effort']:'';

                /** Sharing fields */
                $model->sharing =
                    isset($post['sharing'])?$post['sharing']:'0';
                if($model->sharing){
                    $model->sharing_role =
                        isset($post['sharing_role'])?$post['sharing_role']:'';
                    $model->sharing_purpose =
                        isset($post['sharing_purpose'])?$post['sharing_purpose']:'';
                    $model->sharing_expl =
                        isset($post['sharing_expl'])?$post['sharing_expl']:'';
                }
                /** end */

                $file = UploadedFile::getInstance($model, 'file');
                if ($file && $file->tempName) {
                    if ($model->validate(['file'])) {
                        $dir = Yii::getAlias('img/avatar/');
                        $fileName = $file->name;
                        $file->saveAs($dir . $fileName);
                        $model->image = '/'.$dir . $fileName;
                        $photo = Image::getImagine()->open($dir . $fileName);
                        $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                        Yii::$app->controller->createDirectory(Yii::getAlias('img/avatar/thumbs'));
                        Image::thumbnail($dir . $fileName, 150, 70)
                            ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                    }
                }

                $model->update();

                /** Update user table data */
//                $user->username = $model->nome;
                $user->surname = $model->cognome;
                $user->email = $model->email_pec;
                $user->update();

                /** Send mail to user */
                $model->sendEmail();

                return $this->redirect(['/profile']);
            }
            else {
                return $this->redirect(['/signup-extra/update', 'id' => $model->id]);
            }

        }
        else {
            return $this->render('update', [
                'model' => $model, 'user' => $user,
            ]);
        }
        /** end */
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
    
    public function createDirectory($path) {
        if (file_exists($path)) {  
            //echo "The directory {$path} exists";  
        } else {  
            mkdir($path, 0775, true);  
            //echo "The directory {$path} was successfully created.";  
        }
    }    
}
