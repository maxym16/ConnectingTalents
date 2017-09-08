<?php



namespace frontend\modules\community\controllers;



use lispa\amos\news\models\News;
use yii\web\Controller;



/**

 * Description of BlogController

 */

class BlogController extends Controller 

{

    public $layout = 'default';



    public function actionIndex()

    {
        $articles = News::find()->all();
        return $this->render('index', compact('articles'));
    }
    
    public function actionView($id){
        $article = News::findOne($id);
        return $this->render('article', compact('article'));
    }

}

