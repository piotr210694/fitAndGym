<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Activity */

$this->title = 'Dodaj zajęcia';
$this->params['breadcrumbs'][] = ['label' => 'Zajęcia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
