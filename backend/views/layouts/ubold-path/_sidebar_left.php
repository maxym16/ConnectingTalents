<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>"><span> Main </span></a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= \yii\helpers\Url::to(['/user']) ?>">All</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['user/create']) ?>">Add new user</a></li>
                </ul>
            </li>
            <li class="has_sub">
                <a href="<?= \yii\helpers\Url::to(['/feedback-idea']) ?>"><span> Feedback Ideas/Problems </span></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>