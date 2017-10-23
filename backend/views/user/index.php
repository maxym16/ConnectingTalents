<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $users \common\models\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->registerCssFile('@web/assets/plugins/footable/css/footable.core.css');
$this->registerCssFile('@web/assets/plugins/bootstrap-select/css/bootstrap-select.min.css');


$this->registerJsFile('@web/assets/plugins/footable/js/footable.all.min.js', ['position' => \yii\web\View::POS_END, 'depends' => [\backend\assets\UboldFooterAsset::className()]]);
$this->registerJsFile('@web/assets/plugins/bootstrap-select/js/bootstrap-select.min.js', ['position' => \yii\web\View::POS_END, 'depends' => [\backend\assets\UboldFooterAsset::className()]]);

$this->registerJsFile('@web/assets/pages/jquery.footable.js', ['position' => \yii\web\View::POS_END, 'depends' => [\backend\assets\UboldFooterAsset::className()]]);
?>
<?php
/** View title + breadcrumbs */
echo $this->render('../layouts/ubold-path/_breadcrumbs', ['ubold_breadcrumbs' => [
    ['title' => $this->title]
]]);
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>Users list</b></h4>
            <label class="form-inline">Show
                <select id="demo-show-entries" class="form-control input-sm">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                entries
            </label>
            <table id="demo-foo-filtering" class="table table-striped toggle-circle m-b-0" data-page-size="10">
                <thead>
                <tr>
                    <th data-sort-ignore="true" ></th>
                    <th data-toggle="true">Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th data-sort-ignore="true" aria-label="Actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php if($users): ?>
                    <?php foreach($users as $item): ?>
                    <tr>
                        <td>
                            <?php
                                $item_profile = $item->myprofile;
                                $img_url = '';
                                if(isset($item_profile->image) && file_exists(Yii::getAlias( '@frontend/web'.$item_profile->image)))
                                {
                                    $img_url = Yii::$app->urlManagerFrontend->baseUrl.$item_profile->image;
                                }
                            ?>
                            <img src="<?= $img_url ?>" title="" class="img-circle thumb-sm">
                        </td>
                        <td><?= ucfirst(strtolower($item->username)) ?></td>
                        <td><?= ucfirst(strtolower($item->surname)) ?></td>
                        <td><?= $item->email ?></td>
                        <td class="actions">
                            <a href="<?= \yii\helpers\Url::to(['user/view?id='.$item->id]) ?>" class="on-default edit-row" style="padding-right: 10px; color: green">
                                <i class="fa fa-eye"></i> view
                            </a>
                            <a href="<?= \yii\helpers\Url::to(['user/update?id='.$item->id]) ?>" class="on-default edit-row" style="padding-right: 10px; color: #ffaf14">
                                <i class="fa fa-pencil"></i> edit
                            </a>
                            <a href="javascript:void(0)" user-id="<?= $item->id ?>" class="user-delete-button on-default remove-row" style="color: red">
                                <i class="fa fa-trash-o"></i> delete
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="text-right">
                            <ul class="pagination pagination-split m-t-30 m-b-0"></ul>
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php
echo Html::beginForm(['/user/delete?id='], 'post', ['id' => 'user-delete-form-id']);
echo Html::endForm();
?>
<?php
$url = \yii\helpers\Url::to(['user/delete']).'?id=';
$script = <<< JS
$(function() {
    var url = '$url';  
        $('.user-delete-button').bind('click', function() {
        $('#user-delete-form-id').attr('action', url + $(this).attr('user-id'));        
        $.Notification.confirm('error','top center', 'User delete', 'Are you sure you want delete user ?', 'user_delete');
    });
      
    $(document).on('click', '.notifyjs-metro-base .user_delete.yes', function () {
        $(this).trigger('notify-hide');
        $('#user-delete-form-id').submit();
    });
});
JS;

$this->registerJs($script, yii\web\View::POS_END);
?>
