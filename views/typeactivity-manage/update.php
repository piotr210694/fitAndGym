<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typeactivity */

$this->title = 'Aktualizuj typy zajęć: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Typy zajęć', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Aktualizuj typy zajęć';
?>
<div class="typeactivity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
