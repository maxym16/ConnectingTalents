<?php

/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 02.10.2017
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Keychain;

class ApiController extends Controller
{
    private static $issuer = 'CT';
    private static $audience = 'service.connectingtalents.org';
    private static $key = 'GtWQMzG4alJGjfahqFGxR7ascaYVaQ';

    public static function getStartUtcSurveyToken($utc_level, $language, $id_internal_user, $id_external_user, $return_page){
        $signer = new Sha256();
        
        return Yii::$app->jwt->getBuilder()
            ->setIssuer(self::$issuer) // Configures the issuer (iss claim)
            ->setAudience(self::$audience) // Configures the audience (aud claim)
            ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
            ->setExpiration(time() + 3600) // Configures the expiration time of the token (nbf claim)
            ->set('utc_level', $utc_level)
            ->set('language', $language)
            ->set('id_internal_user', $id_internal_user)
            ->set('id_external_user', $id_external_user)
            ->set('return_page', $return_page)
            ->sign($signer, self::$key) // creates a signature using "testing" as key
            ->getToken(); // Retrieves the generated token
    }
}