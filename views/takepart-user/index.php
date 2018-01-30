<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\ActiveForm;

use app\models\Activity;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TakepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Moje zajęcia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            //'activity_id',
            [
                'attribute'=>'activity_id',
                'value'=>'activity.name',
            ],
            [
                'attribute'=>'describe',
                'value'=>'activity.describeActivtity',
            ],

            //'activity.name',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons'  => [
                    'delete' => function($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model['id']], [
                                    'title' => Yii::t('app', 'Delete'), 'data-confirm' => Yii::t('app', 'Czy na pewno chcesz wypisać się z tych zajęć' .'?'),'data-method' => 'post']);
                    }
                    ],
            ],

        ],
    ]); ?>

    <p>
        <?= Html::a('Przejrzyj ofertę', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
</div>
