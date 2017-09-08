<?php
/**
 * @var $article \lispa\amos\news\models\News
 */
//use yii\helpers\Html;
//use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->params['breadcrumbs'][]= ['label' => 'Community&Blog', 'url' => '/community'];
$this->params['breadcrumbs'][]= ['label' => 'Blog', 'url' => '/community/blog'];
$this->params['breadcrumbs'][]= ['label' => $article->titolo];
$this->title = 'Connecting Talents | Blog | '.$article->titolo;
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center"><?= $article->titolo ?></h2>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><?= $article->descrizione_breve ?></p>
                <div>
                    <span class="badge">Posted <?= $article->data_pubblicazione ?></span>
                </div>
            </div>
        </div>
    </div>
</div>


