<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<!--Dear < ? = $user->username ? >,

you recently requested to reset your password 
for your Conneting Talents account. 
Click the link below to reset your password:

< ? = $resetLink ? >

    If you did not request a password reset, 
    please ignore this email or replay to let us know. 
    This password reset is only valid for the next 24 hours.
    
    Thanks,
    Connecting Talents
    Twitter: @ConnecTalents
    Facebook: https://www.facebook.com/Connecting-Talents-299139017111407/
    Email: kerry@connectingtalents.org
-->
    Dear <?= $user->username ?>,
    
    Welcome to the Connecting Talents community.

    Your login data are:
    Username: <?= $user->username ?>
    Password: the password you choose at the sign up process
    If you forgot your password you can retrieve it from here: 
        <?= $resetLink ?>

    What's next?
    We invite you to provide more details about yourself, 
    accessing your Profile page http://connectingtalents.org/signup-extra/create

    You can start discovering your talents with our Unique Talent Coding Tests, 
    and see the Opportunities our community is cultivating.
    Thank you again for your registration. If you have any questions, 
    please let us know using the feedback page !

    Kerry
    Connecting Talents
    Twitter: @ConnecTalents
    Facebook: https://www.facebook.com/Connecting-Talents-299139017111407/
    Email: kerry@connectingtalents.org
