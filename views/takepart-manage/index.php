<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\User;
use app\models\Activity;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TakepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zapisy na zajęcia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Zapisz na zajęcia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'user_id',
                'value'=>'user.email',
            ],
            [
                'attribute'=>'activity_id',
                'value'=>'activity.name',
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
