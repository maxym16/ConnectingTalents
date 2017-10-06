<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Dear <?= $user->username ?>,

you recently requested to reset your password 
for your Conneting Talents account. 
Click the link below to reset your password:

<?= $resetLink ?>

    If you did not request a password reset, 
    please ignore this email or replay to let us know. 
    This password reset is only valid for the next 24 hours.
    
    Thanks,
    Connecting Talents
    Twitter: @ConnecTalents
    Facebook: https://www.facebook.com/Connecting-Talents-299139017111407/
    Email: kerry@connectingtalents.org

