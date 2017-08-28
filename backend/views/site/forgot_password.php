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

//use Yii;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;


$this->title = 'Password dimenticata';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="bk-formDefaultLogin" class="bk-loginContainer">
    <h2><?= Html::encode($this->title) ?></h2>
    <hr class="bk-hrLogin">
    <p><?= Yii::t('amosplatform', 'Inserisci lo username di registrazione oppure il codice fiscale'); ?></p>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username') ?>
            <p class="text-center"><?= Yii::t('amosplatform', ' - oppure - '); ?></p>
            <?= $form->field($model, 'codice_fiscale') ?>

            <div class="form-group">
                <?= Html::submitButton('Invia le nuove credenziali', ['class' => 'btn bk-btnLogin col-xs-12 col-sm-6', 'name' => 'login-button']) ?>
            </div>
            <a class="col-xs-12 col-sm-12 text-right bk-askPassword" href="login">Accedi</a>


            <div class="clear"></div>

            <hr class="bk-hrLogin">
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
