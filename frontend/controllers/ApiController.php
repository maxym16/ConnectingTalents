<?php
namespace frontend\controllers;

use common\models\User;
use common\models\UserApiData;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use Lcobucci\JWT\Signer\Hmac\Sha256;

class ApiController extends Controller
{
    const issuer = 'CT';
    const audience = 'service.connectingtalents.org';
    const key = 'GtWQMzG4alJGjfahqFGxR7ascaYVaQ';

    const API_SCHEME = 'http';
    const API_SERVER = '54.93.119.106';
    const API_VERSION = '1.0';
    const API_METHOD_UTC = 'utc';

    /**
     * Method bring BB server request
     * @return \yii\web\Response
     */
    public function actionResponse(){
        /** Save after complete Basic UTC data */
        if(Yii::$app->request->isGet){

            $status = Yii::$app->request->get('status');
            $internal_user_id = Yii::$app->request->get('id_internal_user');
            $candidate_id = Yii::$app->request->get('candidateid');
            $survey_id = Yii::$app->request->get('surveyid');
            $utc_id = Yii::$app->request->get('utcid');

            if($status && $status === 'completed'
                && $utc_id && $candidate_id
                && $survey_id && $internal_user_id
            )
            {
                $user = User::findOne(['internal_user_id'=>$internal_user_id, 'status' => User::STATUS_ACTIVE]);
//                $api_data = UserApiData::findOne(['uder_id'=>$user->id]);
                if($user){
                    $model = new UserApiData();
                    $model->candidate_id = $candidate_id;
                    $model->survey_id = $survey_id;
                    $model->utc_id = $utc_id;
                    $model->user_id = $user->id;
                    $model->save();

                    return $this->redirect(['/profile', 'alert'=>'basic_utc_success']);
                }
            }
            return $this->redirect(['/profile', 'alert'=>'basic_utc_failed']);
        }
        return $this->redirect(['/profile']);
    }

    public function actionTest(){
        echo "<pre>";
        //utc_id = 59de9f811d65c0a00f2d2f7f берём тут http://prntscr.com/gwa5of в дальнейшем будем подключать из таблици user_api_data
        print_r(json_decode(self::getUTCData('59de9f811d65c0a00f2d2f7f')));
        echo "</pre>";
    }
    /**
     * Function build JWTToken based on params
     * Params must be set as 'key' => 'value'
     * @param array|null $params
     * @param bool $return_page
     */
    public static function getBuildToken($params = null, $return_page = true){
        $signer = new Sha256();

        $JWTToken = Yii::$app->jwt->getBuilder()
            ->setIssuer(self::issuer) // Configures the issuer (iss claim)
            ->setAudience(self::audience) // Configures the audience (aud claim)
            ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
            ->setExpiration(time() + 365*24*60*60); // Configures the expiration time of the token (nbf claim)


        if(is_array($params)){
            foreach ($params as $key=>$item){
                $JWTToken->set($key, $item);
            }
        }

        if($return_page){
            $JWTToken->set('return_page', Url::toRoute(['api/response'], true));
        }

        return $JWTToken->sign($signer, self::key)->getToken();
    }

    /**
     * Function create token for basic utc
     *
     * @param $utc_level
     * @param $language
     * @param $id_internal_user
     * @param $id_external_user
     * @return mixed
     */
    public static function getStartUtcSurveyToken($utc_level, $language, $id_internal_user, $id_external_user){
        return self::getBuildToken([
            'utc_level' => $utc_level,
            'language'  => $language,
            'id_internal_user' => $id_internal_user,
            'id_external_user' => $id_external_user
        ]);
    }

    /**
     * Function get user utc data
     */
    public static function getUTCData($utc_id){

//        return Yii::$app->cache->getOrSet('utc'.$utc_id,function () use ($utc_id){
//            return self::getApiData(
//                'GET',
//                self::getApiPath(self::API_METHOD_UTC).'/'.$utc_id
//            );
//        }, 600);



        return self::getApiData(
            'GET',
            self::getApiPath(self::API_METHOD_UTC).'/'.$utc_id
        );
    }

    /**
     * Method use for call BB API data
     * @param $method
     * @param $url
     * @param bool $data
     * @param null $token
     * @return mixed
     */
    public static function getApiData($method, $url, $data = false, $token = null)
    {
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            /*case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;*/
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        /**
         * If token is null set default JWTToken
         */
        if($token == null){
            $token = self::getBuildToken();
        }

        curl_setopt($curl, CURLOPT_HTTPHEADER,
            [
                'Content-Type: application/json' ,
                "Authorization: Bearer $token"
            ]
        );

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

    public static function getApiPath($api_method){
        return self::API_SCHEME.'://'.self::API_SERVER.'/api/'.self::API_VERSION.'/'.$api_method;
    }
}