<?php

/**
 * OPEN 2.0
 */
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity'];
$this->title = 'Connecting Talents | Insert opportunity';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Insert opportunity</h2>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-success">
                  <br> <br>  
                  <p class="text-center"><a href="<?= Url::to(['#']) ?>">Insert your opportunity</p>
                  <br> <br>  
                </div>
            </div>
        </div>

    </div>        
</div>
