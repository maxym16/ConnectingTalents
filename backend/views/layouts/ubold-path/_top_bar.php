<?php

use common\models\UserProfile;
use yii\helpers\Html;
use yii\helpers\Url;

$user_profile = UserProfile::findOne(['user_id' => Yii::$app->user->id]);
?>
<!-- LOGO -->
<div class="topbar-left">
    <div class="text-center">
        <a href="<?= Yii::$app->homeUrl ?>" class="logo">
            <i class="icon-c-logo"> <img src="http://www.connectingtalents.org/wp-content/uploads/2016/07/faviconconnect.png" height="42"/> </i>
            <span>CT Admin</span>
        </a>
    </div>
</div>

<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="">
            <div class="pull-left">
                <button class="button-menu-mobile open-left waves-effect waves-light">
                    <i class="md md-menu"></i>
                </button>
                <span class="clearfix"></span>
            </div>

            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="hidden-xs">
                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                </li>
                <li class="dropdown top-menu-item-xs">
                    <?php
                    $img_url = '';
                    if(isset($user_profile->image) && file_exists(Yii::getAlias( '@frontend/web'.$user_profile->image)))
                    {
                        $img_url = Yii::$app->urlManagerFrontend->baseUrl.$user_profile->image;
                    }
                    ?>

                    <?php if($img_url): ?>
                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                        <img src="<?= $img_url ?>" alt="user-img" class="img-circle">
                    </a>
                    <?php endif; ?>
                    <ul class="dropdown-menu">
                        <li><a href="<?= \yii\helpers\Url::to(['user/view?id='.Yii::$app->user->id]) ?>"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['user/update?id='.Yii::$app->user->id]) ?>"><i class="ti-settings m-r-10 text-custom"></i> Edit profile</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)" id="logout-button-id"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                        <?php
                            echo Html::beginForm(['/site/logout'], 'post', ['id' => 'logout-form-id']);
                            echo Html::endForm();
                        ?>
<?php
$script = <<< JS
$(function() {
$("#logout-button-id").click(function(){   
    $.Notification.confirm('info','top center', 'Logout', 'Are you want logout ?', 'user_logout');
});

$(document).on('click', '.notifyjs-metro-base .user_logout.yes', function () {
    $(this).trigger('notify-hide');
    $('#logout-form-id').submit();
});
});
JS;

$this->registerJs($script, yii\web\View::POS_END);
?>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>