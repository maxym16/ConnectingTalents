<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 13.10.2017
 */

namespace frontend\models;


use Yii;
use yii\base\Model;

class FeedbackForm extends Model
{
    public $type;
    public $title;
    public $description;
    public $email;

    public function rules()
    {
        return [
          [['type', 'title', 'description', 'email'], 'required'],
          [['email'], 'email'],
        ];
    }

    public function sendEmail(){

        $email = '';
        $subject = '';
        $template = '-feedbackMail-text';
        
        switch($this->type){
            case 'feedback':
                $email = 'feedbackEmail';
                $subject = 'Feedback from site ';
                $template = 'feedback'.$template;
                break;
            case 'bug':
                $email = 'bugEmail';
                $subject = 'User find BUG on site ';
                $template = 'bug'.$template;
                break;
            default: return null;
        }
        
        return Yii::$app->mailer->compose(['text' => $template], ['model'=>$this])
            ->setFrom([Yii::$app->params['supportEmail']=>$this->email])
            ->setTo(Yii::$app->params[$email])
            ->setSubject($subject . Yii::$app->params['myAplication'])
            ->send();
    }

    public function clear(){
        $this->type =
            $this->title =
                $this->description =
                    $this->email = '';
    }

}