<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */

use yii\helpers\ArrayHelper;
use app\models\Instructor;
use app\models\InstructorSearch;
use app\models\Typeactivity;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Zajęcia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Zaktualizuj', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuń', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id',
                'value' =>  $model->id,
            ],
            'name',
            [
                'attribute' => 'instructor_id',
                //'value' =>  Instructor::find()->where(['id' => 1])->one()->surname,
                //'value' => InstructorSearch::search('1'),
                'value' => $model->instructor_id,
            ],
            'typeActivity_id',
            'describeActivtity:ntext',
        ],
    ]) ?>

</div>
