<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Team joined';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'My team', 'url' => Url::previous()];
$this->params['breadcrumbs'][] = 'Team joined';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
        <h2 class="text-center">Team joined</h2>
        <br>
        <div class="row col-lg-12">
            <div class="thumbnail row">
                <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Join request date</th>
                    <th class="text-center">Matching %</th>
                    <th class="text-center">UTC matching</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                <tr>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                </tr>
                </tbody>
                </table>
            </div>                    
            <a href="<?= Url::to(['#']) ?>" class="btn btn-success">Accept the request</a>
            <a href="<?= Url::to(['#']) ?>" class="btn btn-primary">Contact the users</a>
        </div>
            
        </div>
    </div>        
</div>

