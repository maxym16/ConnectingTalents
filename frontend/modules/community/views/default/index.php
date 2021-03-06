<?php

//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
yii\helpers\Url::remember();
$this->title = 'Connecting Talents | Community&Blog';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Community&Blog  &nbsp;&nbsp;<?= $username;?></h2>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-success">
                  <br> <br>  
                  <p class="text-center">News</p>
                  <br> <br>  
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-info">
                  <br> <br>  
                  <p class="text-center"><a href="<?= Url::to(['/community/blog']) ?>">Blog</a></p>
                  <br> <br>  
                </div>
            </div>
        </div>
        <?php if($username):?>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-warning">
                  <br> <br>  
                  <p class="text-center">Team</p>
                  <br> <br>  
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-danger">
                  <br> <br>  
                  <p class="text-center">Archipelago</p>
                  <br> <br>  
                </div>
            </div>
        </div>
        
        <?php endif;?>
    </div>        
</div>


