<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Dear <?= Html::encode($user->username) ?>,</p>

    <p>
    Welcome to the Connecting Talents community.
    </p>
    Your login data are:
    </p>
    <p>
    Username: <?= Html::encode($user->username) ?>
    </p>
    <p>
    Password: the password you choose at the sign up process
    If you forgot your password you can retrieve it from here: 
    </p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
    <p></p>
    <p>
    What's next?
    </p>
    <p>
    We invite you to provide more details about yourself, 
    accessing your Profile page http://connectingtalents.org/signup-extra/create
    </p>
    <p>
    You can start discovering your talents with our Unique Talent Coding Tests, 
    and see the Opportunities our community is cultivating.
    </p>
    <p>
    Thank you again for your registration. If you have any questions, 
    please let us know using the feedback page !
    </p>
    <br>
    <p>
    Kerry
    </p>
    <p>
    Connecting Talents
    </p>
    <p>
    Twitter: @ConnecTalents
    </p>
    <p>
    Facebook: https://www.facebook.com/Connecting-Talents-299139017111407/
    </p>
    <p>
    Email: kerry@connectingtalents.org

    </p>
</div>
