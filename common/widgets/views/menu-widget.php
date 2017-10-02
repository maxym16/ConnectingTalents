<?php
/**
 * @var $items
 */
use yii\helpers\Url;

?>
<div class="nav__inner">
    <?php if($items): ?>
        <?php foreach($items as $item): ?>
            <?php if(is_array($item)){ ?>
                <a class="nav__item" href="<?= Url::to($item['url']) ?>"><?= $item['label'] ?></a>
            <?php }else{ echo $item; } ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>