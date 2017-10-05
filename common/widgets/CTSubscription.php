<?php
/**
 * Разработал Максим Руденко
 * email: rudenko.programmer@gmail.com
 * Дата: 05.10.2017
 */

namespace common\widgets;

use Yii;
use DrewM\MailChimp\MailChimp;
use yii\bootstrap\Widget;
use yii\helpers\Html;

class CTSubscription extends Widget
{
    public $apiKey;
    public $list_id;
    public $list_array;

    public function init()
    {
        parent::init();

        $class   = "";
        $fname   = "";
        $lname   = "";
        $email   = "";
        $message = "";

        // Api Key
        if(!$this->apiKey) {
            if(!Yii::$app->getModule('mailchimp')->apiKey) {
                throw new \yii\base\InvalidConfigException("You must define apiKey in your Configuration File");
            } else {
                $this->apiKey = Yii::$app->getModule('mailchimp')->apiKey;
            }
        }

        // Api Key
        if(!$this->list_id && !$this->list_array) {
            throw new \yii\base\InvalidConfigException("You must define Mailchimp ListID");
        } else if ($this->list_array) {
            $this->list_id = $this->list_array[Yii::$app->language];
        }

        $post = Yii::$app->request->post();
        $MailChimp = new MailChimp($this->apiKey);

        if($post) {
            $email  = $post['subscribe-email'];
            $fname  = isset($post['subscribe-first-name']) ? $post['subscribe-first-name'] : "";
            $lname  = isset($post['subscribe-last-name']) ? $post['subscribe-last-name'] : "";
            $submit = $post['subscribe-submit'];
        }

        if( isset($submit) )
        {
            $result = $MailChimp->post("lists/".$this->list_id."/members", [
                'merge_fields' => [
                    'FNAME' => $fname,
                    'LNAME' => $lname
                ],
                'email_address' => $email,
                'status' => 'subscribed',
            ]);

            if ($MailChimp->success()) {

                $class   = "alert-success";
                $message = $result['email_address']." ".$result['status'];

            } else {

                $class   = "alert-warning";
                $message = $result['title'];
            }
        }

        if(isset($message) && $message) {
            echo Html::tag('div', $message, array('id' => 'subscribe-message', 'class' => 'alert '.$class));
        }

        echo Html::beginForm();
        echo Html::beginTag('fieldset', array('class'=> 'subscription__form'));
        if(Yii::$app->getModule('mailchimp')->showFirstname) {
            echo Html::textInput('subscribe-first-name',(empty($post['subscribe-first-name']) ? '' : $post['subscribe-first-name']), array('id' => 'subscribe-first-name','placeholder'=> Yii::t('mailchimp', 'First Name'), 'class'=> 'form-control'));
        }

        if(Yii::$app->getModule('mailchimp')->showLastname) {
            echo Html::textInput('subscribe-last-name',(empty($post['subscribe-last-name']) ? '' : $post['subscribe-last-name']), array('id' => 'subscribe-last-name','placeholder'=> Yii::t('mailchimp', 'Last Name'), 'class'=> 'form-control'));
        }

        echo Html::textInput('subscribe-email', (empty($post['subscribe-email']) ? '' : $post['subscribe-email']), array('id' => 'subscribe-email', 'type' => 'email','placeholder'=> 'Insert your best email', 'required' => 'required', 'class'=> 'subscription__field'));

        echo Html::beginTag('div', array('class'=> 'subscription__send'));
        echo Html::submitButton('<span class="button__text">Send</span>', array('id' => 'subscribe-submit', 'name' => 'subscribe-submit', 'class'=> 'button button--default button--white'));
        echo Html::endTag('div');

        echo Html::endTag('fieldset');
        echo Html::endForm();
    }

}