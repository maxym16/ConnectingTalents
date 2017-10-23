<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->registerCssFile('@web/assets/plugins/flag-icon/css/flag-icon.min.css');

$this->title = 'Profile of user '.ucfirst(strtolower($model->username));
?>
<?php
echo $this->render('../layouts/ubold-path/_breadcrumbs', ['ubold_breadcrumbs' => [
    ['title' => 'Users', 'url' => ['user/index']],
    ['title' => 'Profile of user '.ucfirst(strtolower($model->username))]
]]);
?>
<div class="row">
    <div class="col-sm-12" style="padding-bottom: 20px;">
            <a href='<?= \yii\helpers\Url::to(['user/update?id='.$model->id]) ?>' class="btn btn-warning waves-effect waves-light">
                <span class="btn-label"><i class="fa fa-pencil"></i></span>Edit
            </a>
            <button type="button" class="btn btn-danger waves-effect waves-light" onclick="$.Notification.confirm('error','top center', 'User delete', 'Are you sure you want delete user ?', 'user_delete');">
                <span class="btn-label"><i class="fa fa-trash-o"></i></span>Delete
            </button>
<?php
    echo Html::beginForm(['/user/delete?id='.$model->id], 'post', ['id' => 'user-delete-form-id']);
    echo Html::endForm();
?>
<?php
$url = \yii\helpers\Url::to(['user/delete']).'?id=';
$script = <<< JS
$(function() {
    $(document).on('click', '.notifyjs-metro-base .user_delete.yes', function () {
        $(this).trigger('notify-hide');
        $('#user-delete-form-id').submit();
    });
});
JS;

$this->registerJs($script, yii\web\View::POS_END);
?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <?php
                $user_profile = $model->myprofile;
                if($user_profile):
            ?>
                    <?php if(isset($user_profile->image) && $user_profile->image != '' && file_exists(Yii::getAlias( '@frontend/web'.$user_profile->image))){
                        ?>
                        <div class="col-sm-4 text-center">
                            <img src="<?= Yii::$app->urlManagerFrontend->baseUrl.$user_profile->image ?>" class="img-responsive img-thumbnail" style="width: 100%">
                        </div>
                    <?php } ?>
                        <div class="col-sm-8">
                            <dl class="dl-horizontal m-b-0">
                                <dt>Name: </dt>
                                <dd><?= ucfirst(strtolower($model->username)) ?></dd>
                                <dt>Surname: </dt>
                                <dd><?= ucfirst(strtolower($model->surname)) ?></dd>
                                <dt>Email: </dt>
                                <dd><?= $model->email ?></dd>
                                <dt>Gender: </dt>
                                <dd>
                                    <?php if($user_profile->sesso === 'Male'){ ?>
                                        <i class="icon-symbol-male"></i>
                                    <?php } else { ?>
                                        <i class="icon-symble-female"></i>
                                    <?php } ?>
                                </dd>
                                <dt>Age: </dt>
                                <dd>
                                <?php
                                    $age_list = frontend\models\SignupExtraForm::ageGroup();
                                    echo isset($age_list[$user_profile->user_profile_age_group_id])?$age_list[$user_profile->user_profile_age_group_id]:'' ?>
                                </dd>
                                <dt>Country: </dt>
                                <dd>
                                    <?php if($user_profile->country): ?>
                                    <span class="flag-icon flag-icon-<?= strtolower($user_profile->country) ?>"></span>
                                    <?php endif; ?>
                                </dd>
                                <dt>City: </dt>
                                <dd><?= $user_profile->city ?></dd>
                                <dt><i class="ion-ios7-telephone"></i></dt>
                                <dd><?= $user_profile->telefono ?></dd>
                                <dt><i class="ion-social-linkedin"></i> </dt>
                                <dd><?= $user_profile->linkedin ?></dd>
                                <dt><i class="ion-social-facebook"></i> </dt>
                                <dd><?= $user_profile->facebook ?></dd>
                                <dt><i class=" ion-social-googleplus"></i> </dt>
                                <dd><?= $user_profile->googleplus ?></dd>
                                <dt>Description:</dt>
                                <dd>
                                    <?php if($string = $user_profile->presentazione_personale): ?>
                                    <p>
                                        <span class="dropcap"><?= substr($string,0,1) ?></span><?= substr($string,1) ?>
                                    </p>
                                    <?php endif; ?>
                                </dd>
                                <dt>Remote work: </dt>
                                <dd><?= $user_profile->remote_work ?></dd>
                                <dt>Effort: </dt>
                                <dd><?= $user_profile->effort ?></dd>
                            </dl>
                        </div>
            <?php else: ?>
                <dl class="dl-horizontal m-b-0">
                    <dt>Name: </dt>
                    <dd><?= $model->username ?></dd>
                    <dt>Surname: </dt>
                    <dd><?= $model->surname ?></dd>
                    <dt>Email: </dt>
                    <dd><?= $model->email ?></dd>
                </dl>
            <?php endif; ?>
            <div style="clear: both"></div>
        </div>
    </div>
</div>