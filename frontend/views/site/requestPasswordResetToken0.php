<?php



/**

 * Lombardia Informatica S.p.A.

 * OPEN 2.0

 *

 * @see http://example.com Developers'community

 * @license GPLv3

 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3

 *

 * @package    lispa\amos\basic\template

 * @category   CategoryName

 * @author     Lombardia Informatica S.p.A.

 */



/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\PasswordResetRequestForm */



use yii\helpers\Html;

use yii\bootstrap\ActiveForm;



$this->title = 'Request password reset';

$this->params['breadcrumbs'][] = $this->title;

?>

<div style="width:70%; margin: 0 auto">
    <div id="register" class="modal">
        <div class="modal__content modal__content--standalone register">
            <p>Please fill out your email. A link to reset password will be sent there.</p>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
            <fieldset class="form">
                <div class="form-group">
                    <?= Html::activeLabel($model, 'email',['class'=>'form-group__title']); ?>
                    <?= Html::activeInput('email' ,$model, 'email', ['class'=>'form-field']); ?>
                    <?= Html::error($model, 'email'); ?>
                </div>
                <!--<div class="form__captcha">
                    <div id="register-captcha"></div>
                </div>-->
                <div class="form__table">
                    <div class="form__cell">
                        <button class="form__button" type="submit">Send</button>
                    </div>
                </div>
            </fieldset>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>