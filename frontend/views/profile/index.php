<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */
//use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Connecting Talents | '.Yii::$app->user->identity->username;
?>
<div class="site-index">
    <div class="container">
        <h2 class="text-center"><?= Yii::$app->user->identity->username; ?></h2>
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
                </div>
            </div>
            <div class="col-lg-5">
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
                <div class="panel col-lg-11" style="border: 2px solid #ee6633">
                    <div class="panel-heading text-center">Opportunities</div>
                    <br>
                    <h4 class="heading text-center">UTC REPRESENTATION</h4>
                    <br>
                    <p class="text-center">UTC DATA</p>
                    <p class="text-center">(Previous versions ?)</p>
                    <br><br>
                </div>
            </div>
        </div>
        
        <div class="row" style="border: 2px solid #ee6633">
            <div class="col-lg-6">
                <br>
                <div class="panel col-lg-11-offset">
                    <div class="panel-body bg-success text-center">
                        <br>  
                        <p class="text-center">Showcase Opportunities</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <br>
                <div class="panel col-lg-11-offset">
                    <div class="panel-body bg-info text-center">
                        <br>  
                        <p class="text-center">JOIN THE SHARING PLATFORM</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row" style="border: 2px solid #ee6633">
            <div class="panel-heading text-center">My Notifications</div>
            <div class="col-lg-6">
                <div class="panel col-lg-11-offset">
                    <div class="panel-body bg-info text-center">
                        <br>  
                        <p class="text-center">CT Notifications</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel col-lg-11-offset">
                    <div class="panel-body bg-success text-center">
                        <br>  
                        <p class="text-center">Archipelago Notifications</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
