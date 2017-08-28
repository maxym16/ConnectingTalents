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
?>

<?= "\n"; ?>
<?= Yii::t('amosplatform', "Carissimo iscritto al portale EXAMPLE,"); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "per finalizzare l'iscrizione alle selezioni dei corsi"); ?>
<?php

if (!empty($corsi)) {
    foreach ($corsi as $corso) {
        $Corso = backend\modules\corsi\models\Corsi::findOne($corso);
        if ($Corso) {
            ?>
            <?= "\n\t- $Corso->titolo - $Corso->nome"; ?>
        <?php

        }
    }
}
?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "le inviamo in allegato i moduli da compilare, firmare e spedire a: "); ?>
<?= Yii::t('amosplatform', "EXAMPLE"); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "Alleghiamo anche l'avviso che spiega nel dettaglio il processo di selezione, che le consigliamo di leggere bene."); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "Siamo sempre a disposizione per chiarimenti,"); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "Cordiali Saluti."); ?>
<?= "\n"; ?>


<?= "\n"; ?>
<?= Yii::t('amosplatform', "Congratulazioni!"); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "Ora sei iscritto al portale EXAMPLE!"); ?>
<?= "\n"; ?>
<?= Yii::t('amosplatform', "Ecco i tuoi dati riepilogativi: "); ?>
<?=

Yii::t('amosplatform', 'Nuovo iscritto nella piattaforma {appName}', [
    'appName' => $appName
        ]
)
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Nome: {nome}', [
    'nome' => Html::encode($profile->nome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Cognome: {cognome}', [
    'cognome' => Html::encode($profile->cognome)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Cofice Fiscale: {cf}', [
    'cf' => Html::encode($profile->codice_fiscale)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Data di nascita: {nascita_data}', [
    'nascita_data' => Html::encode($profile->nascita_data)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Sesso: {sesso}', [
    'sesso' => Html::encode($profile->sesso)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Email: {email}', [
    'email' => Html::encode($user->email)]);
?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Nazione di nascita: {nazionedinascita}', [
    'nazionedinascita' => Html::encode($profile->nascitaNazioni->nome)]);
?>

<?= "\n"; ?>
<?= "\n"; ?>
<?=

Yii::t('amosplatform', 'Questo messaggio è stato inviato automaticamente dalla piattaforma {appName}.', [
    'appName' => $appName,
])
?>
<?= "\n"; ?>
<?= "\n"; ?>
<?= $appLink; ?>


