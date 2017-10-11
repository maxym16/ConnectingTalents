<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use Lcobucci\JWT\Signer\Hmac\Sha256;

class ApiController extends Controller
{
    const issuer = 'CT';
    const audience = 'service.connectingtalents.org';
    const key = 'GtWQMzG4alJGjfahqFGxR7ascaYVaQ';

    public function actionResponse(){
        echo '<pre>';
        print_r($_GET);
        print_r($_POST);

        mail('rudenko.programmer@gmail.com', 'subject', print_r($_GET, true).' '.print_r($_POST));
        echo '</pre>';
        die;
    }
    
    public static function getStartUtcSurveyToken($utc_level, $language, $id_internal_user, $id_external_user){
        $signer = new Sha256();
        
        return Yii::$app->jwt->getBuilder()
            ->setIssuer(self::issuer) // Configures the issuer (iss claim)
            ->setAudience(self::audience) // Configures the audience (aud claim)
            ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
            ->setExpiration(time() + 365*24*60*60) // Configures the expiration time of the token (nbf claim)
            ->set('utc_level', $utc_level)
            ->set('language', $language)
            ->set('id_internal_user', $id_internal_user)
            ->set('id_external_user', $id_external_user)
            ->set('return_page', Url::toRoute(['api/response'], true))
            ->sign($signer, self::key) // creates a signature using "testing" as key
            ->getToken(); // Retrieves the generated token
    }
}