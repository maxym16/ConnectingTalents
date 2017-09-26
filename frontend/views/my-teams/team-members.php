<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Connecting Talents | Add/remove members';

$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams', 'url' => '/my-teams'];
$this->params['breadcrumbs'][]= ['label' => 'My team', 'url' => Url::previous()];
$this->params['breadcrumbs'][] = 'Add/remove members';

?>
<div class="team-requests">
    <div class="site-index">
        <div class="container">
        <h2 class="text-center">Add/remove members</h2>
        <br>
            <div class="row col-lg-12">
                <div class="thumbnail row">
                    <div class="panel-heading text-center">Team members</div>
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <br>
                <h3 class="text-center">List of incoming requests to join the selected opportunity</h3>
                <br>
                <div class="thumbnail row">
                    <div class="panel-heading text-center">Role : Partner</div>
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Send email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr> 
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
                <br>
                <div class="thumbnail row">
                    <div class="panel-heading text-center">Role : Contributors</div>
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Send email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr> 
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
                <br>
                <div class="thumbnail row">
                    <div class="panel-heading text-center">Role : Fan</div>
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Send email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr> 
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
                <br>
                <div class="thumbnail row">
                    <div class="panel-heading text-center">Role : Sponsor</div>
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Send email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr> 
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"><a href="<?= Url::to(['#']) ?>" class="text-success">Agree</a>
                              &nbsp;&nbsp;&nbsp;<a href="<?= Url::to(['#']) ?>" class="text-danger">Disagree</a></td>
                    </tr>
                    </tbody>
                    </table>
                </div>                    
            </div>
            
        </div>
    </div>        
</div>

