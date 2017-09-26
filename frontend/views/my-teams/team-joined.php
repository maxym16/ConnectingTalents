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
$this->params['breadcrumbs'][] = 'Manage experience rating';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
        <h2 class="text-center">Manage experience rating</h2>
        <p class="text-center">Opportunity owner to add feedback to the other team members</p>
        <br>
            <div class="row col-lg-12">
                <div class="thumbnail row">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Team members list</th>
                        <th class="text-center">Leave your experience rating</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                        <div class="btn-group">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Rating<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                        <div class="btn-group">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Rating<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center">
                        <div class="btn-group">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Rating<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                        </ul>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
            </div>
            
        </div>
    </div>        
</div>

