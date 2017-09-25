<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Team incoming requests';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'My team', 'url' => Url::previous()];
$this->params['breadcrumbs'][] = 'Team incoming requests';

?>
<div class="team-requests">
<div class="site-index">
    <div class="container">
        <h2 class="text-center">Team incoming requests</h2>
        <br>
            
        </div>
    </div>        
</div>

