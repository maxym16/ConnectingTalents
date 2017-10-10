<?php
use yii\helpers\Url;
?>
<?php if(!isset($_COOKIE['accept-cookie'])): ?>
<div class="cookie clearfix js-cookie-banner">
    <div class="cookie__text">
        <p>We have placed cookies on our computer to hel make this website better.</p>
        <p>You can <a class="underline" href="#">change your cookie settings</a> at any time. Please, click on the button or scroll down to continue.</p>
    </div>
    <div class="cookie__buttons">
        <div class="cookie__button">
            <button id="accept-cookie" class="button button--small button--flat button--yellow" type="button">
                <span class="button__text button__text--small">accept</span>
            </button>
        </div>
        <div class="cookie__button">
            <button class="cookie__scroll js-scroll-cookie" type="button">
                <span class="italic light">or </span>scroll down
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(isset($_GET['alert']) && $_GET['alert'] === 'login'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>Login is success</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button id="custom-alert" class="button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && $_GET['alert'] === 'register'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>Dear User, you have been successfully registered in system !</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button id="custom-alert" class="button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && $_GET['alert'] === 'password'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>Please check you email and reset the password.</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button id="custom-alert" class="button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php

$time = time()+72*3600;
$path = parse_url(Url::to(['/']));

$script_alert = <<< JS
$("#accept-cookie").click(function(){
    setCookie('accept-cookie', '1', {
        path: $path,
        time: $time
    });
    $('.js-scroll-cookie').click();
    
});
$("#custom-alert").click(function() {
  $(".custom-alert").hide();
});
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script_alert, yii\web\View::POS_READY);
?>
