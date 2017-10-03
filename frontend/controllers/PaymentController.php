<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SignupExtraForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;

/**
 * PaymentController implements the CRUD actions for SignupExtraForm model.
 */
class PaymentController extends Controller
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
            
            $file = UploadedFile::getInstance($model, 'file');
            if ($file && $file->tempName) {
                $model->file = $file;
                if ($model->validate(['file'])) {
/*                    
                    switch ($model->material_type) {
                        case 0:
                            $material_type = '';
                            break;
                        case 1:
                            $material_type = 'news/';
                            break;
                        case 2:
                            $material_type = 'persons/';
                            break;
                        case 3:
                            $material_type = 'movies/';
                            break;
                        case 4:
                            $material_type = 'interview/';
                            break;
                    }
*/                    
                    $dir = Yii::getAlias('img/avatar/');
                    $fileName = $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($dir . $fileName);
                    $model->file = $fileName; // без цього помилка
                    $model->image = '/'.$dir . $fileName;
// Для ресайза фотки до 800x800px по більшій стороні треба звертатись до функції Box() або widen, так як в обертках доступні тільки 5 простых функцій: crop, frame, getImagine, setImagine, text, thumbnail, watermark
                    $photo = Image::getImagine()->open($dir . $fileName);
                    $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                    //$imagineObj = new Imagine();
                    //$imageObj = $imagineObj->open(\Yii::$app->basePath . $dir . $fileName);
                    //$imageObj->resize($imageObj->getSize()->widen(400))->save(\Yii::$app->basePath . $dir . $fileName);
                    
                    Yii::$app->controller->createDirectory(Yii::getAlias('img/avatar/thumbs')); 
                    Image::thumbnail($dir . $fileName, 150, 70)
                    ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                }
            }
            
            if($model->validate()){
//                debug($model); die;
                if($user){
                $user->role='user_2';
                $user->username=$model->nome;
                $user->surname=$model->cognome;
                $user->email=$model->email;
                $user->password_hash=Yii::$app->security->generatePasswordHash($model->password);
                $user->update();
                }                
            $model->user_id=\Yii::$app->user->id;
            $model->save();
            }
            else {
            return $this->redirect(['/signup-extra/create', 'id' => $model->id]);
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
        
        $current_image = $model->image;
//        $model->sections = explode(',', $model->sections);
        
        if(\Yii::$app->user->identity->id){
          $user = User::findOne(\Yii::$app->user->identity->id);  
        }
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['/profile', 'id' => $model->id]);
//        }
        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'file');
            if ($file && $file->tempName) {
                $model->file = $file;
                if ($model->validate(['file'])) {
                    
                    //Якщо позначений чекбокс «видалити файл»            
                    if($model->del_img)
                    {
                        if(file_exists(Yii::getAlias('@webroot'.$current_image)))
                        {
                            //видаляємо файл
                            unlink(Yii::getAlias('@webroot'.$current_image));
                            $model->image = '';
                        }
                    }
/*                    
                    switch ($model->material_type) {
                        case 0:
                            $material_type = '';
                            break;
                        case 1:
                            $material_type = 'news/';
                            break;
                        case 2:
                            $material_type = 'persons/';
                            break;
                        case 3:
                            $material_type = 'movies/';
                            break;
                        case 4:
                            $material_type = 'interview/';
                            break;
                    }
*/                    
//                    $dir = Yii::getAlias('images/blog/'.$material_type);
                    $dir = Yii::getAlias('img/avatar/');
                    $fileName = $model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs($dir . $fileName);
                    $model->file = $fileName; // без этого ошибка
                    $model->image = '/'.$dir . $fileName;
// Для ресайза фотки до 800x800px по більшій стороні треба звертатись до функції Box() або widen, так як в обертках доступні тільки 5 простых функцій: crop, frame, getImagine, setImagine, text, thumbnail, watermark
                    $photo = Image::getImagine()->open($dir . $fileName);
                    $photo->thumbnail(new Box(800, 800))->save($dir . $fileName, ['quality' => 90]);
                    //$imagineObj = new Imagine();
                    //$imageObj = $imagineObj->open(\Yii::$app->basePath . $dir . $fileName);
                    //$imageObj->resize($imageObj->getSize()->widen(400))->save(\Yii::$app->basePath . $dir . $fileName);
                    
                    Yii::$app->controller->createDirectory(Yii::getAlias('img/avatar/thumbs')); 
                    Image::thumbnail($dir . $fileName, 150, 70)
                    ->save(Yii::getAlias($dir .'thumbs/'. $fileName), ['quality' => 80]);
                }
            } 


            if($model->validate()){
//                debug($model); die;
                if($user){
//                $user->role='user_2';
                $user->username=$model->nome;
                $user->surname=$model->cognome;
                $user->email=$model->email;
                $user->password_hash=Yii::$app->security->generatePasswordHash($model->password);
                $user->update();
                }                
            $model->user_id=\Yii::$app->user->id;
            $model->save();
            }
            else {
            return $this->redirect(['/signup-extra/update', 'id' => $model->id]);
            }
            return $this->redirect(['/profile', 'id' => $model->id]);
        }        
        else {
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
    
    public function createDirectory($path) {   
        //$filename = "/folder/{$dirname}/";  
        if (file_exists($path)) {  
            //echo "The directory {$path} exists";  
        } else {  
            mkdir($path, 0775, true);  
            //echo "The directory {$path} was successfully created.";  
        }
    }    
}
