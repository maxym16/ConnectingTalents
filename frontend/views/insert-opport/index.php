<?php

/**
 * OPEN 2.0
 */
use yii\helpers\Url;

/* @var $this yii\web\View */

//Url::remember();

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => Url::previous()];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity'];
$this->title = 'Connecting Talents | Insert opportunity';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Insert opportunity</h2>
        <br>
	<div class="row">
            <div class="col-lg-6">
                <div class="panel-body bg-success">
                    <p class="text-center"><a href="<?= Url::to(['#']) ?>">Opportunity owner registration</a></p>
                  <br> <br> <br> <br> <br>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel-body bg-info">
                  <p class="text-center">Opportunity registration section</p>
                  <br>   
                  <p class="text-left"><a href="<?= Url::to(['/insert-opport/summary']) ?>">Opportunity Summary</a></p>
                  <p class="text-left"><a href="<?= Url::to(['/insert-opport/lifecycle']) ?>">Lifecycle</a></p>
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Team Members</a></p>
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-warning">
                  <br>  
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Showcase of Talents (only statistics by tag)</a></p>
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Showcase of other Opportunities stored in CT (only statistics by tag)</a></p>
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Showcase of CT Archipelagos (only statistics by tag)</a></p>
                  <br>  
                </div>
            </div>
        </div>
        
    </div>        
</div>
