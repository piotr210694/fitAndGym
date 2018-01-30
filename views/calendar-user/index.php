<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kalendarz zajęć';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p>
        <?= Html::a('Create Calendar', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?= yii2fullcalendar\yii2fullcalendar::widget([
        'options' => [
            //... more options to be defined here!
        ],
        'events'=> $events,
        //'events' => Url::to(['/timetrack/default/jsoncalendar'])
        ]);
    ?>

    <?php
    //  GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],

    //         'id',
    //         'date',
    //         'activity_id',
    //         'room_id',

    //         ['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]); 
    ?>
</div>
