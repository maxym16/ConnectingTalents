<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Buy Team services';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'My team', 'url' => Url::previous()];
$this->params['breadcrumbs'][] = 'Buy Team services';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
            <h2 class="text-center">Buy Team services</h2>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body bg-success">
                      <br> <br>  
                      <p class="text-center"><a href="<?= Url::to(['/my-teams/team-coding']) ?>">Team coding</a></p>
                      <br> <br>  
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body bg-info">
                      <br> <br>  
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Team assessment</a></p>
                      <br> <br>  
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body bg-success">
                      <br> <br>  
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Team coaching</a></p>
                      <br> <br>  
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body bg-info">
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Consulting Service</a></p>
                      <p class="text-center">Business plan</p>
                      <p class="text-center">Business model</p>
                      <p class="text-center">Competitive analysis</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-body bg-success">
                      <p class="text-center"><a href="<?= Url::to(['#']) ?>">Include</a></p>
                      <p class="text-center">Bio of the consultant (and the Back-end page): Text + Picture</p>
                      <p class="text-center">Search/Select box to filter consultant per service</p>
                      <div class="text-center"><p class="btn btn-default">Ask for a consultant</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>

