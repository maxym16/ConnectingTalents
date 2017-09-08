<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

Url::remember();
$this->title = 'Connecting Talents | Opportunity';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">I HAVE AN OPPORTUNITY</h2>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-success">
                  <br> <br>  
                  <p class="text-center"><a href="<?= Url::to(['/insert-opport']) ?>">Insert your opportunity</a></p>
                  <br> <br>  
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-info">
                  <br> <br>  
                  <p class="text-center"><a href="<?= Url::to(['#']) ?>">Join an existing opportunity</a></p>
                  <br> <br>  
                </div>
            </div>
        </div>

    </div>        
</div>
