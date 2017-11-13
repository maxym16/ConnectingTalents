<?php

namespace backend\controllers;

use common\models\Options;
use Yii;
use common\models\FeedbackFeed;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FeedbackFeedController implements the CRUD actions for FeedbackFeed model.
 */
class FeedbackFeedController extends Controller
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
     * Lists all FeedbackFeed models.
     * @return mixed
     */
    public function actionIndex()
    {

        $dataProvider = new ActiveDataProvider([
            'query' => FeedbackFeed::find(),
        ]);



        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    function exportToGoogleSpreadsheet(){
        $client = $this->getClient();
        $service = new \Google_Service_Sheets($client);

// TODO: Assign values to desired properties of `requestBody`:
        $requestBody = new \Google_Service_Sheets_Spreadsheet();

        $response = $service->spreadsheets->create($requestBody);

        $requests = array();
        $requests[] = new \Google_Service_Sheets_Request(array(
            'updateSpreadsheetProperties' => array(
                'properties' => array(
                    'title' => 'Export '.date('Y-m-d H:i:s')
                ),
                'fields' => 'title'
            )
        ));
        $requests[] = new \Google_Service_Sheets_Request(array(
            'updateSheetProperties' => array(
                'properties' => array(
                    'title' => 'My sheet'
                ),
                'fields' => 'title'
            )
        ));

        $batchUpdateRequest = new \Google_Service_Sheets_BatchUpdateSpreadsheetRequest(array(
            'requests' => $requests
        ));

        $service->spreadsheets->batchUpdate($response->getSpreadsheetId(),
            $batchUpdateRequest);

        $values = [];

        $counter = 1;
        $feedbacks = FeedbackFeed::find()->all();
        /** @var FeedbackFeed $item */
        foreach ($feedbacks as $item){
            $values[] = [
                $counter++,
                $item->agree,
                $item->surprised,
                $item->recommend,
                $item->text,
            ];
        }

        $body = new \Google_Service_Sheets_ValueRange(array(
            'values' => $values
        ));
        $params = array(
            'valueInputOption' => 'RAW'
        );
        $service->spreadsheets_values->update($response->getSpreadsheetId(), 'My sheet',
            $body, $params);

        return $response->getSpreadsheetUrl();
    }

    function getClient() {

        $client = new \Google_Client();

        $client->setScopes(
            [
                'https://www.googleapis.com/auth/spreadsheets'
            ]
        );
        $client->setAuthConfig(__DIR__.'/key.json');
        $client->setIncludeGrantedScopes(true);

//        if (Options::getOption('access_token') != null) {
        if (Yii::$app->session->get('access_token') != null) {
//            $client->setAccessToken(Options::getOption('access_token'));
            $client->setAccessToken(Yii::$app->session->get('access_token'));
            $token = $client->getAccessToken();
//            Options::setOption('access_token',$token['access_token']);
            Yii::$app->session->set('access_token',$token);
            return $client;
        }

        if(Yii::$app->request->get('code') != null){
            $client->fetchAccessTokenWithAuthCode(Yii::$app->request->get('code'));
            $token = $client->getAccessToken();
//            Options::setOption('access_token',$token['access_token']);
            Yii::$app->session->set('access_token',$token);
            $client->setAccessToken($token);
            return $client;
        }

        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(true);
        //$client->setRedirectUri('https://openadmin.connectingtalents.org/feedback-feed/export');
        $client->setRedirectUri('http://testadmin.connectingtalents.org/feedback-feed/export');
        $auth_url = $client->createAuthUrl();
        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
        die;
    }

    /**
     * Displays a single FeedbackFeed model.
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
     * Creates a new FeedbackFeed model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FeedbackFeed();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FeedbackFeed model.
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
     * Deletes an existing FeedbackFeed model.
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
     * Finds the FeedbackFeed model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FeedbackFeed the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FeedbackFeed::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionExport(){
        echo $this->exportToGoogleSpreadsheet();
//        $this->redirect(['index']);
    }
    
}
