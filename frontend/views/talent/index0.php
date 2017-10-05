<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Connecting Talents | Talent';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">I HAVE A TALENT</h2>
        <br>
	<div class="row">
            <div class="col-lg-4">
                <div class="panel panel-success col-lg-11">
                  <div class="panel-body bg-success">
                      <br>  
                      <br> <br> <br> <br> <br> <br>  
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Levels Explaination</a></p>
                      <br>  
                      <br> <br> <br> <br> <br> <br>  
                  </div>
                </div>
                
            </div>
            
            <div class="col-lg-8">
                <div class="panel panel-warning col-lg-11">
                  <div class="panel-body bg-warning">
                      <p class="text-center"><a href="<?= Url::to(['/talent/signup']) ?>">Start the Registration Process</a></p>
                  </div>
                </div>
                <div class="panel panel-danger col-lg-11">
                  <div class="panel-body bg-danger">
                      <br>  
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Try our game for free</p>
                      <br>   
                  </div>
                </div>
                <div class="panel panel-info col-lg-11">
                  <div class="panel-body bg-info">
                      <br>  
                      <p class="text-center"><a href="<?= Url::to(['/showcaseopp']) ?>">Showcase Opportunities</p>
                      <br>    
                  </div>
                </div>
                
            </div>
        </div>
    </div>        
</div>
