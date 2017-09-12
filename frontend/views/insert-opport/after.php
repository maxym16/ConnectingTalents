<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

//Url::remember();

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => Url::previous()];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity'];
$this->title = 'Connecting Talents | Insert opportunity';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Insert opportunity(after log-in)</h2>
        <br>
	<div class="row">
            <div class="col-lg-6">
                <div class="panel-body bg-success">
                    <p class="text-center">Opportunity owner info</p>
                  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  
                  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>  
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel-body bg-info">
                  <p class="text-center">Opportunity registration info</p>
                  <br>
                  <div class="col-lg-12 bg-success">
                  <h3 class="text-center">OTC</h3>
                    <ul class="list-group">
                        <li class="list-group-item">1.Purpose</li>
                        <li class="list-group-item">2.Footprint</li>
                        <li class="list-group-item">3.Resources</li>
                        <li class="list-group-item">4.Opportunity Owner Portrait</li>
                    </ul>
                  </div>
                  <div class="col-lg-12 bg-warning">
                  <p class="text-left"><a href="<?= Url::to(['/insert-opport/summary']) ?>">Opportunity Summary</a></p>
                  </div>
                  <div class="col-lg-12 bg-success">
                  <p class="text-left"><a href="<?= Url::to(['/insert-opport/lifecycle']) ?>">Lifecycle</a></p>
                  </div>
                  <div class="col-lg-12 bg-warning">
                  <p class="text-left">Team Members</p>
                  </div>
                  <div class="col-lg-12 bg-info">
                  <br>
                  <p class="text-center">Opportunity needs:</p>
                    <div class="checkbox">
                    <label><input type="checkbox" value="">1.Find talents</label>
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox" value="">2.Tune the Team</label>
                    </div>
                    <div class="checkbox disabled">
                    <label><input type="checkbox" value="">3.Grow an Opportunity</label>
                    </div>                  
                    <div class="checkbox disabled">
                    <label><input type="checkbox" value="">4.Create an Archipelago</label>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <br>
	<div class="row">
            <div class="col-lg-12">
                <div class="panel-body bg-warning">
                  <br>  
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Showcase Opportunity in details</a></p>
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Showcase Archipelagos in details</a></p>
                  <p class="text-left"><a href="<?= Url::to(['#']) ?>">Sharing Platform</a></p>
                  <p class="text-left"><a href="<?= Url::to(['/my-opport']) ?>">My Opportunities</a></p>
                  <br>  
                </div>
            </div>
        </div>
        
    </div>        
</div>
