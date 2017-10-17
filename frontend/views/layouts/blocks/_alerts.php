<?php
use yii\helpers\Url;
?>
<?php if(!isset($_COOKIE['accept-cookie'])): ?>
<div class="cookie clearfix js-cookie-banner custom-alert">
    <div class="cookie__text">
        <p>We have placed cookies on our computer to help make this website better.</p>
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
            <p>You successfully logged in</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
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
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && $_GET['alert'] === 'password'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>Password has been reset successfully</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && $_GET['alert'] === 'reset_password'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>You will receive an email, shortly, with the reset password link</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && ( $_GET['alert'] == 'basic_utc_failed' || $_GET['alert'] == 'basic_utc_success' )): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <?php if( $_GET['alert'] == 'basic_utc_success'): ?>
                <p>Basic UTC is been successful</p>
            <?php endif; ?>
            <?php if( $_GET['alert'] == 'basic_utc_failed'): ?>
                <p>Basic UTC is been failed</p>
            <?php endif; ?>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_GET['alert']) && $_GET['alert'] === 'change_password'): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>Password has been reset successfully</p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(Yii::$app->session->getFlash('feedback_error') || Yii::$app->session->getFlash('feedback_ok')): ?>
    <div class="cookie clearfix js-cookie-banner custom-alert">
        <div class="cookie__text">
            <p>
                <?php
                    echo Yii::$app->session->getFlash('feedback_ok')?:'';
                    echo Yii::$app->session->getFlash('feedback_error')?:'';
                ?>
            </p>
        </div>
        <div class="cookie__buttons">
            <div class="cookie__button">
                <button class="custom-alert-button button button--small button--flat button--yellow" type="button">
                    <span class="button__text button__text--small">close</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php

$time = time()+72*3600;
$path = parse_url(Url::to(['/']));

$script_alert ='';/* <<< JS
$("#accept-cookie").click(function(){
    setCookie('accept-cookie', '1', {
        path: $path,
        time: $time
    });
    $('.js-scroll-cookie').click();
    
});
$(".custom-alert").click(function() {
  $(".custom-alert").hide();
});
$(window).scroll(function(){
    if ( $("html").scrollTop() > 70 ){
        $(".custom-alert").hide();
        if($('*').is('#accept-cookie')) {
            setCookie('accept-cookie', '1', {
                path: $path,
                time: $time
            });
        }
    }
})

JS;*/
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script_alert, yii\web\View::POS_READY);
?>
