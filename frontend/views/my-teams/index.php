<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->params['breadcrumbs'][]= ['label' => 'I have an opportunity', 'url' => '/opport'];
$this->params['breadcrumbs'][]= ['label' => 'Insert opportunity', 'url' => '/insert-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My opportunities', 'url' => '/my-opport'];
$this->params['breadcrumbs'][]= ['label' => 'My teams'];

$this->title = 'Connecting Talents | My teams';
?>
<div class="team-index">

<!--    <h1>< ? = Html::encode($this->title) ? ></h1>-->

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
                </div>
            </div>
            <div class="row col-lg-10">
                <div class="col-lg-7">
                    <div class="thumbnail row" style="border: 2px solid #ee6633">
                        <div class="panel-heading text-center">My UTC</div>
                        <br>
                        <img class="col-lg-3" src="<?= $profile->image ?>" alt="Photo">
                        <div class="caption col-lg-8">
                            <ul class="list-group content">
                                <li class="list-group-item">Name : <?= $user->username ?></li>
                                <li class="list-group-item">Surname : <?= $user->surname ?></li>
                                <li class="list-group-item">
                                    <a href="<?= Url::to(['/profile']) ?>">Other data (TBD)</a>
                                </li>
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
            <div class="row col-lg-10">
                <div class="col-lg-7">
                    <div class="thumbnail row" style="border: 2px solid #ee6633">
                        <div class="panel-heading text-center">My Teams</div>
                        <br>
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Opportunity Name</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><a href="<?= Url::to(['/my-teams/1']) ?>">Team 1</a></td>
                        <td class="text-center">3/8</td>
                        <td class="text-center danger"></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="<?= Url::to(['/my-teams/2']) ?>">Team 2</a></td>
                        <td class="text-center">3/8</td>
                        <td class="text-center warning"></td>
                        </tr>
                        <tr>
                            <td class="text-center"><a href="<?= Url::to(['/my-teams/3']) ?>">Team 3</a></td>
                        <td class="text-center">3/8</td>
                        <td class="text-center success"></td>
                        </tr>
                        </tbody>
                        </table>
                    </div>                    
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail col-lg-12" style="border: 2px solid #ee6633">
                        <div class="panel-heading text-center">Joined team</div>
                        <br>
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">Opportunity Name</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">Team 4</td>
                        <td class="text-center">3/8</td>
                        <td class="text-center danger"></td>
                        </tr>
                        <tr>
                        <td class="text-center">Team 5</td>
                        <td class="text-center">3/8</td>
                        <td class="text-center warning"></td>
                        </tr>
                        <tr>
                        <td class="text-center">Team 6</td>
                        <td class="text-center">3/8</td>
                        <td class="text-center success"></td>
                        </tr>
                        </tbody>
                        </table>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="row col-lg-12">
            <div class="col-lg-offset-2 bg-info">
                <p>
                <?= Html::a('Create a Team', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
            </div>
            <div class="col-lg-offset-2 bg-info">
                <br>
                <p class="text-center">Request team services</p>
                <br>
            </div>
        </div>
            
        </div>
    </div>        
</div>
    
    <!--
    <p>
        < ? = Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ? >
    </p>
    < ? = GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'owner',
//            'owner_opport',
            'description:ntext',
            'date',
            'joined_team_id',
            // 'type',
            // 'team_role_id',
            // 'parent_id',
            // 'visible',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ? >
    -->

    