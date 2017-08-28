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

use kartik\password\PasswordInput;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'First access';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= Html::encode($this->title) ?></h2>
    <hr class="bk-hrLogin">
    <p><?= Yii::t('amosplatform', 'Scegli le tue credenziali di accesso'); ?></p>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php
            $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'options' => ['class' => 'form-horizontal', 'autocomplete' => 'off'],
                    ])
            ?>
            <?= $form->field($model, 'username')->textInput() ?>
            <?=
            $form->field($model, 'password')->widget(PasswordInput::classname(), [
                'language' => 'it',
                'pluginOptions' => [
                    'showMeter' => true,
                    'toggleMask' => true,
                    'language' => 'it'
            ]]);
            ?>
            <?= $form->field($model, 'ripetiPassword')->passwordInput() ?>
            <?= $form->field($model, 'token')->hiddenInput()->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('amosplatform', 'Salva'), ['class' => 'btn bk-btnLogin col-xs-12 col-sm-6', 'name' => 'primo-accesso-button']) ?>
            </div>

            <div class="clear"></div>
            <hr class="bk-hrLogin">
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
