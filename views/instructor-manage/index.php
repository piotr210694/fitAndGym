<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Activity;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstructorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instruktorzy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Dodaj instruktora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'firstName',
            'surname',
            'dateOfBirth',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
