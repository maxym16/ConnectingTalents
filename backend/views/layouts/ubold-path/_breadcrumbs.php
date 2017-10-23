<?php

/**
 * @var $ubold_breadcrumbs
 */

?>
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title"><?= $this->title ?></h4>
        <ol class="breadcrumb">
            <li>
                <a href="<?= \yii\helpers\Url::to(['site/index']) ?>">Main</a>
            </li>
            <?php foreach ($ubold_breadcrumbs as $item): ?>
                <?php if(isset($item['url'])): ?>
                <li><a href="<?= \yii\helpers\Url::to($item['url']) ?>"><?= $item['title'] ?></a></li>
                <?php else: ?>
                <li class="active"><?= $item['title'] ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </div>
</div>