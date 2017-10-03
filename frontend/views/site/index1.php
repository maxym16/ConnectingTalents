<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Connecting Talents';
?>
<div class="site-index">
   
    <div class="container">
        <h2 class="text-center">HOME</h2>
        <br>
	<div class="row">
            <div class="col-lg-6">
                <div class="panel panel-success col-lg-11">
                  <div class="panel-body bg-success text-center">
                      <br> <br> <br> <br> <br> <br>  
                      <p><a href="<?= Url::to(['/talent']) ?>">I have a talent</a></p>
                      <br> <br> <br> <br> <br> <br>  
                  </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-warning col-lg-11">
                  <div class="panel-body bg-warning text-center">
                      <br> <br> <br> <br> <br> <br>  
                      <p><a href="<?= Url::to(['/opport']) ?>">I have an opportunity</a></p>
                      <br> <br> <br> <br> <br> <br>  
                  </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
