<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams'];

$this->title = 'Connecting Talents | My teams';
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center">My teams</h2>
        <br>
        <div class="row">
            <div class="col-lg-2">
                <div class="panel col-lg-12" style="border: 2px solid #ee6633">
                    <div class="panel-heading">My Roadmap</div>
                    <br>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-danger">UTC1</li>
                        <li class="list-group-item list-group-item-danger">UTC2</li>
                        <li class="list-group-item list-group-item-danger">UTC3</li>
                        <li class="list-group-item">UTC4</li><!--active -->
                    </ul>
                    <br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br>
                </div>
            </div>
            <div class="row col-lg-10">
                <div class="col-lg-7">
                    <div class="thumbnail row" style="border: 2px solid #ee6633">
                        <div class="panel-heading text-center">My UTC</div>
                        <br>
                        <img class="col-lg-3" src="img/photo.jpg" alt="Photo">
                        <div class="caption col-lg-8">
                            <ul class="list-group content">
                                <li class="list-group-item">Name</li>
                                <li class="list-group-item">Surname</li>
                                <li class="list-group-item">Other data (TBD)</li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-5">
                    <div class="panel col-lg-12" style="border: 2px solid #ee6633">
                    <div class="panel-heading text-center">Opportunities</div>
                    <br>
                    <h4 class="heading text-center">UTC REPRESENTATION</h4>
                    <p>&nbsp;</p>
                    <br><br><br><br>
                    <br>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
