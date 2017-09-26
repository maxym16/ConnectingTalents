<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Team Coding';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'My team', 'url' => Url::previous()];
$this->params['breadcrumbs'][] = 'Team Coding';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
        <h2 class="text-center">Team Coding</h2>
        <br>
            <div class="row col-lg-12">
                <div class="thumbnail row">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Additional team service</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Link to payment gateway</th>
                        <th class="text-center">Link to the service page (core service)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
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
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
            </div>
            
        </div>
    </div>        
</div>

