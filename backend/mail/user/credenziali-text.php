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

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$appLink = Yii::$app->urlManager->createAbsoluteUrl(['/']);
$appLinkPrivacy = Yii::$app->urlManager->createAbsoluteUrl(['/admin/user-profile/privacy']);
$appName = Yii::$app->name;
$welcomeSwitch = Yii::t('amosplatform', 'Benvenuta');
if ($profile->sesso == 'Maschio') { // TODO Translate
    $welcomeSwitch = Yii::t('amosplatform', 'Benvenuto');
}
?>
<?= Yii::t('amosplatform', '{nome} {cognome}', [
    'nome' => Html::encode($profile->nome),
    'cognome' => Html::encode($profile->cognome)]);
?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= Html::beginTag('a', ['href' => $appLink . 'site/insert-auth-data?token=' . $profile->user->password_reset_token]) ?>
                            <?= Yii::t('amosplatform', 'Accedi alla piattaforma {appName}',
							 [
								'appName' => $appName
							]
							
							); ?>
                            <?= Html::endTag('a'); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', 'Se il link non funziona copia e incolla il seguente in una finestra del tuo browser di navigazione') ?>
                            <?= Yii::t('amosplatform', $appLink . 'site/insert-auth-data?token=' . $profile->user->password_reset_token) ?>
		<?= "\n"; ?>
		<?= "\n"; ?>	
		
<?=
                Yii::t('amosplatform', '{nome} {cognome}, questo messaggio ti è stato inviato automaticamente dalla piattaforma {appName}, a cui sei registrato con l\'indirizzo email {email}.', [
					'appName' => $appName,
                    'nome' => $profile->nome,
                    'cognome' => $profile->cognome,
                    'email' => $profile->user->email,
                ])
                ?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= $appLink; ?>


