<?php

namespace backend\controllers;

use Yii;
use common\models\FeedbackIdea;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeedbackIdeaController implements the CRUD actions for FeedbackIdea model.
 */
class FeedbackIdeaController extends Controller
{
    public $layout = 'ubold-pages-layout';

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
     * Lists all FeedbackIdea models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => FeedbackIdea::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FeedbackIdea model.
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
     * Creates a new FeedbackIdea model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FeedbackIdea();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FeedbackIdea model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FeedbackIdea model.
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
     * Finds the FeedbackIdea model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FeedbackIdea the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FeedbackIdea::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function export_csv(
            $table, 		// Iм'я таблицi для експорту
            $afields, 		// Масив рядків - імен полів таблиці
            $filename, 	 	// Iм'я CSV файла для зберігання інформації
                                    // (шлях від корня web-сервера)
            $delim=',', 		// Разділювач полів в CSV файлі
            $enclosed='"', 	 	// лапки для вмісту полів
            $escaped='\\', 	 	// Ставиться перед спец. символами
            $lineend='\\r\\n'){  	// Чим закінчувати рядок в файлі CSV

    $q_export = 
    "SELECT ".implode(',', $afields).
    "   INTO OUTFILE '".$_SERVER['DOCUMENT_ROOT'].$filename."' ".
    "FIELDS TERMINATED BY '".$delim."' ENCLOSED BY '".$enclosed."' ".
    "    ESCAPED BY '".$escaped."' ".
    "LINES TERMINATED BY '".$lineend."' ".
    "FROM ".$table
    ;

            // Якщо файл існує, при експорті буде видана помилка
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$filename)) 
                    unlink($_SERVER['DOCUMENT_ROOT'].$filename); 
            return mysql_query($q_export);
//https://docs.google.com/spreadsheets/d/<KEY>/export?gid=0&fo‌​rmat=csv            
    }
    
    
}
