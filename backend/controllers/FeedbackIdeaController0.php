<?php

namespace backend\controllers;

use Yii;
use common\models\FeedbackIdea;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
//require_once(__DIR__.'/../../src/Google/autoload.php');

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

//require_once __DIR__ . '/vendor/autoload.php';


define('APPLICATION_NAME', 'Google Sheets API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/sheets.googleapis.com-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '/client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/sheets.googleapis.com-php-quickstart.json
//define('SCOPES', implode(' ', array(Google_Service_Sheets::SPREADSHEETS_READONLY)));

//if (php_sapi_name() != 'cli') {
//  throw new Exception('This application must be run on the command line.');
//}
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




/**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
public function getClient() {
  $client = new \Google_Client();
  $client->setApplicationName(APPLICATION_NAME);
  $client->setScopes(SCOPES);
  $client->setAuthConfig(CLIENT_SECRET_PATH);
  $client->setAccessType('offline');

  // Load previously authorized credentials from a file.
  $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
  if (file_exists($credentialsPath)) {
    $accessToken = json_decode(file_get_contents($credentialsPath), true);
  } else {
    // Request authorization from the user.
    $authUrl = $client->createAuthUrl();
    printf("Open the following link in your browser:\n%s\n", $authUrl);
    print 'Enter verification code: ';
    $authCode = trim(fgets(STDIN));

    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Store the credentials to disk.
    if(!file_exists(dirname($credentialsPath))) {
      mkdir(dirname($credentialsPath), 0700, true);
    }
    file_put_contents($credentialsPath, json_encode($accessToken));
    printf("Credentials saved to %s\n", $credentialsPath);
  }
  $client->setAccessToken($accessToken);

  // Refresh the token if it's expired.
  if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
  }
  return $client;
}

/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
public function expandHomeDirectory($path) {
  $homeDirectory = getenv('HOME');
  if (empty($homeDirectory)) {
    $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
  }
  return str_replace('~', realpath($homeDirectory), $path);
}


    
    public function actionExport(){
//if (php_sapi_name() != 'cli') {throw new Exception('This application must be run on the command line.');}
// Get the API client and construct the service object.
$client = $this->getClient();
$service = new Google_Service_Sheets($client);

// Prints the names and majors of students in a sample spreadsheet:
// https://docs.google.com/spreadsheets/d/1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms/edit
$spreadsheetId = '1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms';
$range = 'Class Data!A2:E';
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

if (count($values) == 0) {
  print "No data found.\n";
} else {
  print "Name, Major:\n";
  foreach ($values as $row) {
    // Print columns A and E, which correspond to indices 0 and 4.
    printf("%s, %s\n", $row[0], $row[4]);
  }
}
        
        $model = new FeedbackIdea();
        $model=FeedbackIdea::findAll(1);
        $model = FeedbackIdea::find()->all();
        $xw = xmlwriter_open_memory();
//        06feee329a1c4a8167686f0713db32ee8c96c8aa
//https://docs.google.com/spreadsheets/d/18bcbfgHzeqRL7JdgjA-dRIpZUyyTECmWzTOjE3wXYPY/edit#gid=0        
//$client = new Google_Client();
//$client->setApplicationName('Spreadsheet');
//$client->setClientId(CLIENT_ID);
//        $service= new Google_
        
        

        return $this->render('export', compact('model'));

/*
require_once('Array2XML.php');
 
header('Content-type: application/xml');
$data = array(
    'val1' => 111,
    'val2' => '222',
    'val3' => 333,
    500,
    'container' => array(
        'mystr' => 'test test',
        'myobj' => array(
            'x' => 250,
            'y' => 150,
            'name' => 'objName'
        )
    )
);
 
$converter = new Array2XML();
$xmlstr = $converter->convert($data);
 
echo $xmlstr; 
*/
//        return $this->render('export', compact('model','xw','xmlstr'));
        
/*        
$result = mysqli_query($mysqli, "SELECT * FROM feedback_idea");
    while( $row = mysqli_fetch_assoc($result) ){ 
    print("<br>".$row['id']); 
     //ТУТ мы делает что-то полезное
    }
//Освобождаем курсор  
mysqli_free_result($result); 
//Закрываем БД
$mysqli->close();
*/ 
/*        
//include("db.php");

$csv_file = ''; // создаем переменную, в которую записываем строки

$query = "SELECT field1, field2, field3, field4 FROM table";
$result = mysql_query($query);
if ($result)
{
   while ($row = mysql_fetch_assoc($result))
   {
      $csv_file .= '"'.$row["field1"].'","'.$row["field2"].'","'.$row["field3"].'","'.$row["field4"].'"'."\r\n";
      // в качестве начала и конца полей я указал " (двойные кавычки)
      // в качестве разделителей полей я указал , (запятая)
      // \r\n - это перенос строки
   }
}

$file_name = 'export.csv'; // название файла
$file = fopen($file_name,"w"); // открываем файл для записи, если его нет, то создаем его в текущей папке, где расположен скрипт
fwrite($file,trim($csv_file)); // записываем в файл строки
fclose($file); // закрываем файл

// задаем заголовки. то есть задаем всплывающее окошко, которое позволяет нам сохранить файл.
header('Content-type: application/csv'); // указываем, что это csv документ
header("Content-Disposition: inline; filename=".$file_name); // указываем файл, с которым будем работать
readfile($file_name); // считываем файл
//unlink($file_name); // удаляем файл. то есть когда вы сохраните файл на локальном компе, то после он удалится с сервера
*/
/*        {
            "Feedback Idea":[ 
            {
                "Id": 1,
                "Title": "bread",
                "Description": "Bread description",
                "Email": 120
            }
            ]
        }
*/        
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
