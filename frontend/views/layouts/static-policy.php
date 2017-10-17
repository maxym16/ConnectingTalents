<?php
/* @var $content string */
use yii\helpers\Url;

$url = Yii::$app->request->url;
?>
<section class="page">
    <div id="page-tabs" class="page__inner" data-eui-tabs>
        <h1 class="page__title">Privacy and Terms</h1>
        <div class="page__content">
            <aside class="page__nav">
                <a href="<?= Url::to(['site/privacy']) ?>" class="page__nav-item <?php if($url === '/site/privacy'): ?> t-eui-tab-nav-item--active<?php endif; ?>" type="button">Privacy Policy</a>
                <a href="<?= Url::to(['site/cookie']) ?>" class="page__nav-item <?php if($url === '/site/cookie'): ?> t-eui-tab-nav-item--active<?php endif; ?>" type="button"> Cookie Policy</a>
            </aside>
            <div class="page__text">
                <div class="page__section t-eui-tab-item--active">
                    <div class="default-text">
                        <?php echo $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>