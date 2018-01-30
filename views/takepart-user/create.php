<?php

use yii\helpers\Html;
use yii\grid\GridView;

use app\models\Instructor;
use app\models\Typeactivity;


/* @var $this yii\web\View */
/* @var $model app\models\Takepart */

$this->title = 'Zapisz się';
$this->params['breadcrumbs'][] = ['label' => 'Moje zajęcia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="takepart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?=
     GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'describeActivtity',
            [
                'attribute'=>'instructor_id',
                'value'=>'instructor.surname',
            ],
            [
                'attribute'=>'typeActivity_id',
                'value'=>'typeActivity.type',
            ],
        ],
    ]); 
    ?>


</div>

