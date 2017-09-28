<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Invite internal member';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'Create a team', 'url' => '/my-teams/create'];
$this->params['breadcrumbs'][] = 'Invite internal member';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
        <h2 class="text-center">Invite internal member</h2>
        <br>
            <div class="row col-lg-12">
                <div class="thumbnail row">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Internal member</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Send a notification/email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['/my-teams/create']) ?>" class="btn btn-primary">Send</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['/my-teams/create']) ?>" class="btn btn-primary">Send</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['/my-teams/create']) ?>" class="btn btn-primary">Send</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
            </div>
        </div>
    </div>        
</div>

