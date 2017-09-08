<?php
/**
 * @var $articles \lispa\amos\news\models\News
 */
//use yii\helpers\Html;
//use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->params['breadcrumbs'][]= ['label' => 'Community&Blog', 'url' => '/community'];
$this->params['breadcrumbs'][]= ['label' => 'Blog'];
$this->title = 'Connecting Talents | Blog';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Blog</h2>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <?php foreach ($articles as $article): ?>
                    <div class="col-sx-12">
                        <h1>
                            <a href="<?= Url::to(['blog/view', 'id'=>$article->id]) ?>">
                                <?= $article->titolo ?>
                            </a>
                        </h1>
                        <p><?= $article->descrizione_breve ?></p>
                        <div>
                            <span class="badge">Posted <?= $article->data_pubblicazione ?></span>
                        </div>
                    </div>
                    <hr>
                <?php endforeach;  ?>
            </div>
        </div>
    </div>        
</div>


