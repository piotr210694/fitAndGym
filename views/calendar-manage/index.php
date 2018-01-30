<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Activity;
use app\models\Room;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalendarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kalendarz zajęć';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calendar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dodaj zajęcia do kalendarza', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            [
                'attribute'=> 'activity_id',
                'value'=>'activity.name',
            ],
            [
                'attribute'=> 'room_id',
                'value'=>'room.number',
            ],
        



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
