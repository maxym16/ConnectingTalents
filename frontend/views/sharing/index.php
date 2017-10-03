<?php

//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

Url::remember();
$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'Access the Sharing Platform'];
$this->title = 'Connecting Talents | Access the Sharing Platform';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Access the Sharing Platform</h2>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-success">
                  <br> <br>  
                  <p class="text-center">An explanation of the Sharing platform </p>
                  <br> <br>  
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-info">
                  <br> <br>  
                  <p class="text-center"><a href="<?= Url::to(['/payment/create']) ?>">Payment</a></p>
                  <br> <br>  
                </div>
            </div>
        </div>

    </div>        
</div>
