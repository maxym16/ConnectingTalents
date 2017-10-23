<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Update profile of user ' . ucfirst(strtolower($model->username));
?>
<?php
echo $this->render('../layouts/ubold-path/_breadcrumbs', ['ubold_breadcrumbs' => [
    ['title' => 'Users', 'url' => ['user/index']],
    ['title' => 'Profile of user '.ucfirst(strtolower($model->username)), 'url' => ['user/view?id='.$model->id]],
    ['title' => 'Update profile of user ' . ucfirst(strtolower($model->username))]
]]);
?>
<div class="row">
    <div class="col-sm-12" style="padding-bottom: 20px;">
        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="$.Notification.confirm('error','top center', 'User delete', 'Are you sure you want delete user ?', 'user_delete');">
            <span class="btn-label"><i class="fa fa-trash-o"></i></span>Delete
        </button>
        <?php
        echo Html::beginForm(['/user/delete?id='.$model->id], 'post', ['id' => 'user-delete-form-id']);
        echo Html::endForm();
        ?>
        <?php
        $url = \yii\helpers\Url::to(['user/delete']).'?id=';
        $message = Yii::$app->session->getFlash('update');

$script = <<< JS
$(function() {
    $(document).on('click', '.notifyjs-metro-base .user_delete.yes', function () {
        $(this).trigger('notify-hide');
        $('#user-delete-form-id').submit();
    });
    if('$message' == 'success'){
        $.Notification.autoHideNotify('success', 'top right', 'Update Successfully','Profile has been update successfully.');
    }
    
});
JS;

        $this->registerJs($script, yii\web\View::POS_END);
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <?php if($model->myprofile): ?>
                <?= $this->render('_extra_update_form', [
                    'model' => isset($profile_model)?$profile_model:$model->myprofile
                ]) ?>
            <?php else: ?>
                <?= $this->render('_basic_update_form', compact('model')) ?>
            <?php endif; ?>
        </div>
    </div>
</div>
